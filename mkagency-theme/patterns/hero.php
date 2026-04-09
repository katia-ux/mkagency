<?php
/**
 * Title: Hero – Sección Principal
 * Slug: mkagency/hero
 * Categories: mkagency, mkagency-sections
 * Description: Sección hero con titular grande, subtítulo, botones CTA y elemento decorativo animado.
 * Keywords: hero, portada, inicio, cta
 * Inserter: true
 */
?>
<!-- wp:group {"className":"mkagency-hero","style":{"color":{"background":"#0d0d0d"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"margin":{"top":"0"}},"minHeight":"95vh"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group mkagency-hero" style="background-color:#0d0d0d;min-height:95vh;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6)">

	<!-- wp:group {"className":"hero-badge","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group hero-badge" style="margin-bottom:var(--wp--preset--spacing--6)">
		<!-- wp:group {"style":{"color":{"background":"rgba(200,241,53,0.12)"},"border":{"radius":"100px","color":"rgba(200,241,53,0.3)","width":"1px"},"spacing":{"padding":{"top":"0.4em","bottom":"0.4em","left":"1.2em","right":"1.2em"}}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
		<div class="wp-block-group" style="border:1px solid rgba(200,241,53,0.3);border-radius:100px;background-color:rgba(200,241,53,0.12);padding:0.4em 1.2em">
			<!-- wp:paragraph {"style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
			<p class="has-text-color" style="color:#c8f135;font-size:var(--wp--preset--font-size--xs);font-weight:700;letter-spacing:0.12em;text-transform:uppercase">✦ Agencia de Comunicación</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","lineHeight":"1.02","letterSpacing":"-0.04em"},"color":{"text":"#ffffff"},"fontSize":"hero"}} -->
	<h1 class="wp-block-heading has-text-color has-hero-font-size" style="color:#ffffff;font-family:var(--wp--preset--font-family--space-grotesk);font-weight:700;line-height:1.02;letter-spacing:-0.04em">Hacemos que tu<br><span style="color:#c8f135">marca hable</span><br>por sí sola.</h1>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"var:preset|spacing|5"} -->
	<div style="height:var(--wp--preset--spacing--5)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"style":{"color":{"text":"#a0a0a0"},"typography":{"fontSize":"var:preset|font-size|xl","lineHeight":"1.6"},"layout":{"contentSize":"640px"}}} -->
	<p class="has-text-color" style="color:#a0a0a0;font-size:var(--wp--preset--font-size--xl);line-height:1.6;max-width:640px">Estrategia, creatividad y tecnología al servicio de marcas que quieren conectar de verdad con su audiencia. Transformamos ideas en experiencias que dejan huella.</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"var:preset|spacing|7"} -->
	<div style="height:var(--wp--preset--spacing--7)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
	<div class="wp-block-group" style="gap:var(--wp--preset--spacing--4);flex-wrap:wrap">

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"accent","textColor":"background","style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"1em","bottom":"1em","left":"2.5em","right":"2.5em"}},"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","fontSize":"var:preset|font-size|lg"}},"className":"is-style-fill hero-btn-primary"} -->
			<div class="wp-block-button is-style-fill hero-btn-primary"><a class="wp-block-button__link wp-element-button has-accent-background-color has-background-text-color has-background has-text-color" href="/contacto/" style="border-radius:100px;padding:1em 2.5em;font-weight:700;font-size:var(--wp--preset--font-size--lg)">Hablemos →</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"border":{"radius":"100px","color":"rgba(255,255,255,0.2)","width":"1px"},"color":{"text":"#ffffff","background":"transparent"},"spacing":{"padding":{"top":"1em","bottom":"1em","left":"2.5em","right":"2.5em"}},"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"600","fontSize":"var:preset|font-size|lg"}},"className":"is-style-outline hero-btn-secondary"} -->
			<div class="wp-block-button is-style-outline hero-btn-secondary"><a class="wp-block-button__link wp-element-button" href="/portfolio/" style="border-radius:100px;padding:1em 2.5em;font-weight:600;border:1px solid rgba(255,255,255,0.2);color:#ffffff;background:transparent">Ver proyectos</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|9"} -->
	<div style="height:var(--wp--preset--spacing--9)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"className":"hero-clients","style":{"border":{"top":{"color":"#2e2e2e","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|6"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
	<div class="wp-block-group hero-clients" style="border-top:1px solid #2e2e2e;padding-top:var(--wp--preset--spacing--6)">

		<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
		<p class="has-text-color" style="color:#666666;font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Confían en nosotros</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
		<div class="wp-block-group" style="gap:var(--wp--preset--spacing--6);flex-wrap:wrap">
			<!-- wp:paragraph {"className":"client-logo-placeholder","style":{"color":{"text":"#444444"},"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","fontSize":"var:preset|font-size|lg","letterSpacing":"-0.02em"}}} -->
			<p class="has-text-color client-logo-placeholder" style="color:#444444;font-family:var(--wp--preset--font-family--space-grotesk);font-weight:700;font-size:var(--wp--preset--font-size--lg)">Cliente A</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"client-logo-placeholder","style":{"color":{"text":"#444444"},"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","fontSize":"var:preset|font-size|lg","letterSpacing":"-0.02em"}}} -->
			<p class="has-text-color client-logo-placeholder" style="color:#444444;font-family:var(--wp--preset--font-family--space-grotesk);font-weight:700;font-size:var(--wp--preset--font-size--lg)">Cliente B</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"client-logo-placeholder","style":{"color":{"text":"#444444"},"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","fontSize":"var:preset|font-size|lg","letterSpacing":"-0.02em"}}} -->
			<p class="has-text-color client-logo-placeholder" style="color:#444444;font-family:var(--wp--preset--font-family--space-grotesk);font-weight:700;font-size:var(--wp--preset--font-size--lg)">Cliente C</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"client-logo-placeholder","style":{"color":{"text":"#444444"},"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","fontSize":"var:preset|font-size|lg","letterSpacing":"-0.02em"}}} -->
			<p class="has-text-color client-logo-placeholder" style="color:#444444;font-family:var(--wp--preset--font-family--space-grotesk);font-weight:700;font-size:var(--wp--preset--font-size--lg)">Cliente D</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"client-logo-placeholder","style":{"color":{"text":"#444444"},"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","fontSize":"var:preset|font-size|lg","letterSpacing":"-0.02em"}}} -->
			<p class="has-text-color client-logo-placeholder" style="color:#444444;font-family:var(--wp--preset--font-family--space-grotesk);font-weight:700;font-size:var(--wp--preset--font-size--lg)">Cliente E</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
