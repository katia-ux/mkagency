import { useEffect, useRef } from 'react'

export default function Hero() {
  const heroRef = useRef(null)

  useEffect(() => {
    const el = heroRef.current
    if (!el) return
    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting) {
          el.querySelectorAll('.animate-on-enter').forEach((node, i) => {
            setTimeout(() => node.classList.add('entered'), i * 150)
          })
        }
      },
      { threshold: 0.1 }
    )
    observer.observe(el)
    return () => observer.disconnect()
  }, [])

  return (
    <section
      ref={heroRef}
      className="relative min-h-screen flex items-center bg-ink overflow-hidden"
    >
      {/* Background geometric pattern */}
      <div className="absolute inset-0 overflow-hidden pointer-events-none">
        {/* Large circle top-right */}
        <div className="absolute -top-32 -right-32 w-[600px] h-[600px] rounded-full border border-white/5" />
        <div className="absolute -top-16 -right-16 w-[400px] h-[400px] rounded-full border border-white/5" />
        {/* Gold accent shapes */}
        <div className="absolute top-1/3 right-1/4 w-px h-48 bg-gradient-to-b from-transparent via-accent/40 to-transparent" />
        <div className="absolute bottom-1/4 left-1/3 w-32 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent" />
        {/* Grid lines */}
        <div
          className="absolute inset-0 opacity-[0.03]"
          style={{
            backgroundImage: `linear-gradient(rgba(255,255,255,0.4) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255,255,255,0.4) 1px, transparent 1px)`,
            backgroundSize: '80px 80px',
          }}
        />
        {/* Bottom gradient fade */}
        <div className="absolute bottom-0 left-0 right-0 h-48 bg-gradient-to-t from-ink to-transparent" />
      </div>

      <div className="container-site relative z-10 pt-32 pb-20">
        <div className="max-w-4xl">
          {/* Label */}
          <div
            className="animate-on-enter opacity-0 translate-y-6 transition-all duration-700"
            style={{ transitionDelay: '0ms' }}
          >
            <span className="inline-flex items-center gap-3 text-xs tracking-widest2 font-medium text-accent uppercase mb-10">
              <span className="w-8 h-px bg-accent" />
              Digital Marketing & Communication
            </span>
          </div>

          {/* Main headline */}
          <h1
            className="animate-on-enter opacity-0 translate-y-6 transition-all duration-700 font-display text-white leading-tight mb-6"
            style={{ fontSize: 'clamp(2.8rem, 6vw, 5rem)', transitionDelay: '150ms' }}
          >
            Strategy, creativity,
            <br />
            <span className="text-accent italic">and execution</span>
            <br />
            for ambitious brands.
          </h1>

          {/* Subheadline */}
          <p
            className="animate-on-enter opacity-0 translate-y-6 transition-all duration-700 text-white/60 text-lg md:text-xl font-light max-w-xl mb-12 leading-relaxed"
            style={{ transitionDelay: '300ms' }}
          >
            Digi K is a digital marketing and communication agency built for brands
            that want clarity, consistency, and real growth—not just noise.
          </p>

          {/* CTAs */}
          <div
            className="animate-on-enter opacity-0 translate-y-6 transition-all duration-700 flex flex-col sm:flex-row gap-4"
            style={{ transitionDelay: '450ms' }}
          >
            <a href="#services" className="btn-accent">
              Explore our services
              <svg className="w-4 h-4" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </a>
            <a
              href="#shop"
              className="inline-flex items-center gap-2 border border-white/25 text-white/80 px-7 py-3.5 text-sm font-medium tracking-wide transition-all duration-300 hover:border-white/60 hover:text-white"
            >
              Browse digital products
            </a>
          </div>
        </div>

        {/* Stats row */}
        <div
          className="animate-on-enter opacity-0 translate-y-6 transition-all duration-700 mt-24 pt-12 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-8"
          style={{ transitionDelay: '600ms' }}
        >
          {[
            { value: '100+', label: 'Projects delivered' },
            { value: '3', label: 'Countries served' },
            { value: '6', label: 'Core service areas' },
            { value: '∞', label: 'Scalable solutions' },
          ].map((stat) => (
            <div key={stat.label}>
              <div className="font-display text-3xl text-white mb-1">{stat.value}</div>
              <div className="text-white/40 text-xs tracking-wide uppercase">{stat.label}</div>
            </div>
          ))}
        </div>
      </div>

      {/* Scroll indicator */}
      <div className="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/30">
        <span className="text-xs tracking-widest uppercase">Scroll</span>
        <div className="w-px h-12 bg-gradient-to-b from-white/30 to-transparent animate-pulse" />
      </div>
    </section>
  )
}
