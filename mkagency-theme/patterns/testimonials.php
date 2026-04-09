<?php
/**
 * Title: Testimonios – Reseñas de clientes
 * Slug: mkagency/testimonials
 * Categories: mkagency, mkagency-sections
 * Description: Sección de testimonios con cards de reseñas, estrellas, foto, nombre y empresa del cliente.
 * Keywords: testimonios, reseñas, opiniones, clientes
 * Inserter: true
 */
?>
<!-- wp:group {"className":"mkagency-testimonials","style":{"color":{"background":"#111111"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group mkagency-testimonials" style="background-color:#111111;padding:var(--wp--preset--spacing--10) var(--wp--preset--spacing--6)">

	<!-- wp:group {"className":"section-header","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|8"},"padding":{"bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group section-header" style="text-align:center;margin-bottom:var(--wp--preset--spacing--8)">
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-text-color" style="color:#c8f135;font-size:var(--wp--preset--font-size--xs);font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Lo que dicen nuestros clientes</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","letterSpacing":"-0.03em"},"color":{"text":"#ffffff"}}} -->
		<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Resultados reales,<br><span style="color:#c8f135">clientes felices</span></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"testimonial-card","style":{"color":{"background":"#1a1a1a"},"border":{"radius":"20px","color":"#2e2e2e","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group testimonial-card" style="border:1px solid #2e2e2e;border-radius:20px;background-color:#1a1a1a;padding:var(--wp--preset--spacing--7) var(--wp--preset--spacing--6)">
				<!-- wp:paragraph {"className":"testimonial-stars","style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|lg"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
				<p class="has-text-color testimonial-stars" style="color:#c8f135;font-size:var(--wp--preset--font-size--lg);margin-bottom:var(--wp--preset--spacing--4)">★★★★★</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"testimonial-quote","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"var:preset|font-size|lg","lineHeight":"1.6","fontStyle":"italic"},"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
				<p class="has-text-color testimonial-quote" style="color:#ffffff;font-size:var(--wp--preset--font-size--lg);line-height:1.6;font-style:italic;margin-bottom:var(--wp--preset--spacing--6)">"Trabajar con MK Agency fue un antes y un después para nuestra marca. Duplicamos nuestra presencia digital en tan solo 6 meses."</p>
				<!-- /wp:paragraph -->
				<!-- wp:separator {"style":{"color":{"background":"#2e2e2e"}},"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-background is-style-wide" style="background-color:#2e2e2e;color:#2e2e2e"/>
				<!-- /wp:separator -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5)">
					<!-- wp:image {"width":48,"height":48,"scale":"cover","style":{"border":{"radius":"50%"}}} -->
					<figure class="wp-block-image" style="border-radius:50%;width:48px;height:48px"><img src="" alt="Ana García" style="object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:group {"style":{"spacing":{"margin":{"left":"var:preset|spacing|4"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group" style="margin-left:var(--wp--preset--spacing--4)">
						<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700","fontFamily":"var:preset|font-family|space-grotesk"}}} -->
						<p class="has-text-color" style="color:#ffffff;font-weight:700;font-family:var(--wp--preset--font-family--space-grotesk)">Ana García</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|xs"}}} -->
						<p class="has-text-color" style="color:#666666;font-size:var(--wp--preset--font-size--xs)">CEO · Empresa Alfa</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"testimonial-card","style":{"color":{"background":"#c8f135"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group testimonial-card" style="border-radius:20px;background-color:#c8f135;padding:var(--wp--preset--spacing--7) var(--wp--preset--spacing--6)">
				<!-- wp:paragraph {"className":"testimonial-stars","style":{"color":{"text":"#0d0d0d"},"typography":{"fontSize":"var:preset|font-size|lg"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
				<p class="has-text-color testimonial-stars" style="color:#0d0d0d;font-size:var(--wp--preset--font-size--lg);margin-bottom:var(--wp--preset--spacing--4)">★★★★★</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"testimonial-quote","style":{"color":{"text":"#0d0d0d"},"typography":{"fontSize":"var:preset|font-size|lg","lineHeight":"1.6","fontStyle":"italic"},"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
				<p class="has-text-color testimonial-quote" style="color:#0d0d0d;font-size:var(--wp--preset--font-size--lg);line-height:1.6;font-style:italic;margin-bottom:var(--wp--preset--spacing--6)">"El equipo de MK Agency entiende perfectamente el lenguaje de nuestra audiencia. Los resultados superaron todas nuestras expectativas iniciales."</p>
				<!-- /wp:paragraph -->
				<!-- wp:separator {"style":{"color":{"background":"rgba(13,13,13,0.15)"}},"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-background is-style-wide" style="background-color:rgba(13,13,13,0.15);color:rgba(13,13,13,0.15)"/>
				<!-- /wp:separator -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5)">
					<!-- wp:image {"width":48,"height":48,"scale":"cover","style":{"border":{"radius":"50%"}}} -->
					<figure class="wp-block-image" style="border-radius:50%;width:48px;height:48px"><img src="" alt="Carlos Martín" style="object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:group {"style":{"spacing":{"margin":{"left":"var:preset|spacing|4"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group" style="margin-left:var(--wp--preset--spacing--4)">
						<!-- wp:paragraph {"style":{"color":{"text":"#0d0d0d"},"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700","fontFamily":"var:preset|font-family|space-grotesk"}}} -->
						<p class="has-text-color" style="color:#0d0d0d;font-weight:700;font-family:var(--wp--preset--font-family--space-grotesk)">Carlos Martín</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"rgba(13,13,13,0.6)"},"typography":{"fontSize":"var:preset|font-size|xs"}}} -->
						<p class="has-text-color" style="color:rgba(13,13,13,0.6);font-size:var(--wp--preset--font-size--xs)">Director de Marketing · Beta Corp</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"testimonial-card","style":{"color":{"background":"#1a1a1a"},"border":{"radius":"20px","color":"#2e2e2e","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group testimonial-card" style="border:1px solid #2e2e2e;border-radius:20px;background-color:#1a1a1a;padding:var(--wp--preset--spacing--7) var(--wp--preset--spacing--6)">
				<!-- wp:paragraph {"className":"testimonial-stars","style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|lg"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
				<p class="has-text-color testimonial-stars" style="color:#c8f135;font-size:var(--wp--preset--font-size--lg);margin-bottom:var(--wp--preset--spacing--4)">★★★★★</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"testimonial-quote","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"var:preset|font-size|lg","lineHeight":"1.6","fontStyle":"italic"},"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
				<p class="has-text-color testimonial-quote" style="color:#ffffff;font-size:var(--wp--preset--font-size--lg);line-height:1.6;font-style:italic;margin-bottom:var(--wp--preset--spacing--6)">"Profesionalidad, creatividad y resultados. Si buscas una agencia que realmente entienda tu negocio y lo lleve al siguiente nivel, esta es."</p>
				<!-- /wp:paragraph -->
				<!-- wp:separator {"style":{"color":{"background":"#2e2e2e"}},"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-background is-style-wide" style="background-color:#2e2e2e;color:#2e2e2e"/>
				<!-- /wp:separator -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5)">
					<!-- wp:image {"width":48,"height":48,"scale":"cover","style":{"border":{"radius":"50%"}}} -->
					<figure class="wp-block-image" style="border-radius:50%;width:48px;height:48px"><img src="" alt="Laura Sánchez" style="object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:group {"style":{"spacing":{"margin":{"left":"var:preset|spacing|4"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group" style="margin-left:var(--wp--preset--spacing--4)">
						<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700","fontFamily":"var:preset|font-family|space-grotesk"}}} -->
						<p class="has-text-color" style="color:#ffffff;font-weight:700;font-family:var(--wp--preset--font-family--space-grotesk)">Laura Sánchez</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|xs"}}} -->
						<p class="has-text-color" style="color:#666666;font-size:var(--wp--preset--font-size--xs)">Fundadora · Gamma Studio</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
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
