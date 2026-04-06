/**
 * MK Agency Theme — main.js
 * Mobile menu, scroll effects, and misc UI enhancements.
 * No dependencies. Vanilla JS only.
 */

(function () {
  'use strict';

  /* ─── Header scroll effect ─────────────────────────────────────────────────── */
  (function initScrollHeader() {
    const header = document.querySelector('.site-header');
    if (!header) return;

    let lastY = 0;
    let ticking = false;

    function onScroll() {
      if (!ticking) {
        requestAnimationFrame(function () {
          const y = window.scrollY;
          header.classList.toggle('scrolled', y > 20);
          // Hide on scroll down, show on scroll up
          if (y > 80) {
            header.classList.toggle('header--hidden', y > lastY);
          } else {
            header.classList.remove('header--hidden');
          }
          lastY = y;
          ticking = false;
        });
        ticking = true;
      }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
  })();

  /* ─── Smooth anchor scroll ─────────────────────────────────────────────────── */
  (function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
      anchor.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (!target) return;
        e.preventDefault();
        const header = document.querySelector('.site-header');
        const offset = header ? header.offsetHeight + 16 : 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top: top, behavior: 'smooth' });
      });
    });
  })();

  /* ─── Intersection Observer – fade-in animations ───────────────────────────── */
  (function initFadeIn() {
    if (!window.IntersectionObserver) return;
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    const selectors = [
      '.service-card',
      '.portfolio-card',
      '.testimonial-card',
      '.blog-card',
      '.product-card',
      '.stat-item',
      '.contact-detail',
    ];

    const elements = document.querySelectorAll(selectors.join(', '));

    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.style.animationPlayState = 'running';
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );

    elements.forEach(function (el) {
      el.style.animationPlayState = 'paused';
      observer.observe(el);
    });
  })();

  /* ─── Stats counter animation ──────────────────────────────────────────────── */
  (function initCounters() {
    if (!window.IntersectionObserver) return;
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    const statHeadings = document.querySelectorAll('.stat-item h2');
    if (!statHeadings.length) return;

    function animateCount(el, target, suffix, duration) {
      const start = performance.now();
      const startVal = 0;

      function step(now) {
        const elapsed = now - start;
        const progress = Math.min(elapsed / duration, 1);
        // Ease out cubic
        const eased = 1 - Math.pow(1 - progress, 3);
        const current = Math.round(startVal + (target - startVal) * eased);
        el.textContent = current + suffix;
        if (progress < 1) requestAnimationFrame(step);
      }

      requestAnimationFrame(step);
    }

    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          const el = entry.target;
          const raw = el.textContent.trim();
          const num = parseFloat(raw.replace(/[^0-9.]/g, ''));
          const suffix = raw.replace(/[0-9.]/g, '');
          if (!isNaN(num)) animateCount(el, num, suffix, 1800);
          observer.unobserve(el);
        });
      },
      { threshold: 0.5 }
    );

    statHeadings.forEach(function (el) { observer.observe(el); });
  })();

  /* ─── CF7 / WPForms: auto-style injected forms ─────────────────────────────── */
  (function initFormStyle() {
    // Re-style dynamically loaded form elements
    function styleForm(wrapper) {
      const inputs = wrapper.querySelectorAll(
        'input:not([type="submit"]):not([type="checkbox"]):not([type="radio"]):not([type="hidden"]), textarea, select'
      );
      inputs.forEach(function (input) {
        input.style.cssText = [
          'background-color: var(--mka-bg) !important',
          'border: 1px solid var(--mka-border) !important',
          'border-radius: 12px !important',
          'color: var(--mka-fg) !important',
          'padding: 0.9em 1.1em !important',
          'width: 100% !important',
          'font-family: inherit !important',
          'font-size: 1rem !important',
          'transition: border-color 0.25s !important',
          'box-shadow: none !important',
        ].join(';');

        input.addEventListener('focus', function () {
          this.style.borderColor = 'var(--mka-accent)';
          this.style.boxShadow = '0 0 0 3px rgba(200, 241, 53, 0.15)';
        });
        input.addEventListener('blur', function () {
          this.style.borderColor = 'var(--mka-border)';
          this.style.boxShadow = 'none';
        });
      });

      const submits = wrapper.querySelectorAll('input[type="submit"], button[type="submit"]');
      submits.forEach(function (btn) {
        btn.style.cssText = [
          'background: var(--mka-accent) !important',
          'color: var(--mka-bg) !important',
          'border: none !important',
          'border-radius: 100px !important',
          'padding: 0.9em 2.5em !important',
          'font-weight: 700 !important',
          'font-size: 1rem !important',
          'cursor: pointer !important',
          'transition: all 0.25s !important',
        ].join(';');

        btn.addEventListener('mouseover', function () {
          this.style.background = 'var(--mka-accent-dark)';
          this.style.transform = 'translateY(-2px)';
        });
        btn.addEventListener('mouseout', function () {
          this.style.background = 'var(--mka-accent)';
          this.style.transform = '';
        });
      });
    }

    // Initial run
    document.querySelectorAll('.contact-form-wrapper').forEach(styleForm);

    // Watch for CF7 AJAX form injection
    document.addEventListener('wpcf7mailsent', function () {
      document.querySelectorAll('.contact-form-wrapper').forEach(styleForm);
    });

    // MutationObserver for dynamically added forms
    const mo = new MutationObserver(function (mutations) {
      mutations.forEach(function (m) {
        m.addedNodes.forEach(function (node) {
          if (node.nodeType !== 1) return;
          const wrapper = node.closest('.contact-form-wrapper') || node.querySelector('.contact-form-wrapper');
          if (wrapper) styleForm(wrapper);
        });
      });
    });

    mo.observe(document.body, { childList: true, subtree: true });
  })();

  /* ─── Portfolio card hover label ───────────────────────────────────────────── */
  (function initPortfolioHover() {
    document.querySelectorAll('.portfolio-card').forEach(function (card) {
      card.setAttribute('tabindex', '0');
      card.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          const link = this.querySelector('a');
          if (link) link.click();
        }
      });
    });
  })();

})();
