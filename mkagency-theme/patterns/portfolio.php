<?php
/**
 * Title: Portfolio – Casos de éxito
 * Slug: mkagency/portfolio
 * Categories: mkagency, mkagency-sections
 * Description: Grid de proyectos/casos de éxito con imagen, categoría, título y enlace.
 * Keywords: portfolio, proyectos, casos, éxito, trabajos
 * Inserter: true
 */
?>
<!-- wp:group {"className":"mkagency-portfolio","style":{"color":{"background":"#0d0d0d"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group mkagency-portfolio" style="background-color:#0d0d0d;padding:var(--wp--preset--spacing--10) var(--wp--preset--spacing--6)">

	<!-- wp:group {"className":"section-header","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|8"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
	<div class="wp-block-group section-header" style="margin-bottom:var(--wp--preset--spacing--8)">

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
			<p class="has-text-color" style="color:#c8f135;font-size:var(--wp--preset--font-size--xs);font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Nuestro trabajo</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","letterSpacing":"-0.03em"},"color":{"text":"#ffffff"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#ffffff">Proyectos que<br><span style="color:#c8f135">cuentan historias</span></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"flex-end"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"border":{"radius":"100px","color":"rgba(255,255,255,0.2)","width":"1px"},"color":{"text":"#ffffff","background":"transparent"},"spacing":{"padding":{"top":"0.75em","bottom":"0.75em","left":"1.75em","right":"1.75em"}}},"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/portfolio/" style="border-radius:100px;border:1px solid rgba(255,255,255,0.2);color:#ffffff;background:transparent">Ver todo →</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:group {"className":"portfolio-card portfolio-card--large","style":{"color":{"background":"#1a1a1a"},"border":{"radius":"20px","color":"#2e2e2e","width":"1px"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group portfolio-card portfolio-card--large" style="border:1px solid #2e2e2e;border-radius:20px;background-color:#1a1a1a;overflow:hidden">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"mkagency-portfolio","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px"}}},"className":"portfolio-img"} -->
				<figure class="wp-block-image size-mkagency-portfolio portfolio-img" style="border-radius:20px 20px 0 0"><img src="" alt="Proyecto destacado 1" style="aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
				<div class="wp-block-group" style="padding:var(--wp--preset--spacing--6)">
					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
						<p class="has-text-color" style="color:#c8f135;font-size:var(--wp--preset--font-size--xs);font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Branding · Digital</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","fontSize":"var:preset|font-size|3xl","letterSpacing":"-0.02em"},"color":{"text":"#ffffff"}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#ffffff">Proyecto Alfa — Transformación de marca global</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|2xl"}}} -->
					<p class="has-text-color" style="color:#c8f135;font-size:var(--wp--preset--font-size--2xl)"><a href="/portfolio/" style="color:inherit;text-decoration:none" aria-label="Ver caso de éxito">→</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">

			<!-- wp:group {"className":"portfolio-card","style":{"color":{"background":"#1a1a1a"},"border":{"radius":"20px","color":"#2e2e2e","width":"1px"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group portfolio-card" style="border:1px solid #2e2e2e;border-radius:20px;background-color:#1a1a1a;overflow:hidden">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"mkagency-card","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px"}}},"className":"portfolio-img"} -->
				<figure class="wp-block-image size-mkagency-card portfolio-img" style="border-radius:20px 20px 0 0"><img src="" alt="Proyecto 2" style="aspect-ratio:16/9;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
				<div class="wp-block-group" style="padding:var(--wp--preset--spacing--5)">
					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
						<p class="has-text-color" style="color:#c8f135;font-size:var(--wp--preset--font-size--xs);font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Social Media</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"600","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.02em"},"color":{"text":"#ffffff"}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#ffffff">Proyecto Beta — Estrategia de contenido</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|xl"}}} -->
					<p class="has-text-color" style="color:#c8f135;font-size:var(--wp--preset--font-size--xl)"><a href="/portfolio/" style="color:inherit;text-decoration:none">→</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:spacer {"height":"var:preset|spacing|5"} -->
			<div style="height:var(--wp--preset--spacing--5)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"className":"portfolio-card","style":{"color":{"background":"#1a1a1a"},"border":{"radius":"20px","color":"#2e2e2e","width":"1px"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group portfolio-card" style="border:1px solid #2e2e2e;border-radius:20px;background-color:#1a1a1a;overflow:hidden">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"mkagency-card","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px"}}},"className":"portfolio-img"} -->
				<figure class="wp-block-image size-mkagency-card portfolio-img" style="border-radius:20px 20px 0 0"><img src="" alt="Proyecto 3" style="aspect-ratio:16/9;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
				<div class="wp-block-group" style="padding:var(--wp--preset--spacing--5)">
					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
						<p class="has-text-color" style="color:#c8f135;font-size:var(--wp--preset--font-size--xs);font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Campaña · Vídeo</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"600","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.02em"},"color":{"text":"#ffffff"}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#ffffff">Proyecto Gamma — Campaña de lanzamiento</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|xl"}}} -->
					<p class="has-text-color" style="color:#c8f135;font-size:var(--wp--preset--font-size--xl)"><a href="/portfolio/" style="color:inherit;text-decoration:none">→</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
