<?php
/**
 * Title: Formulario de Contacto
 * Slug: mkagency/contact-form
 * Categories: mkagency, mkagency-sections
 * Description: Layout de sección de contacto con información de contacto + formulario. Compatible con CF7 y WPForms. Inserta el shortcode del formulario en el bloque de párrafo indicado.
 * Keywords: contacto, formulario, contact form, cf7, wpforms
 * Inserter: true
 */
?>
<!-- wp:group {"className":"mkagency-contact","style":{"color":{"background":"#0d0d0d"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group mkagency-contact" style="background-color:#0d0d0d;padding:var(--wp--preset--spacing--10) var(--wp--preset--spacing--6)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|9"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"42%","className":"contact-info-col"} -->
		<div class="wp-block-column contact-info-col" style="flex-basis:42%">

			<!-- wp:paragraph {"style":{"color":{"text":"#c8f135"},"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
			<p class="has-text-color" style="color:#c8f135;font-size:var(--wp--preset--font-size--xs);font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Contacto</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","fontSize":"var:preset|font-size|4xl","letterSpacing":"-0.03em","lineHeight":"1.1"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|6"}}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#ffffff;margin-top:var(--wp--preset--spacing--3);margin-bottom:var(--wp--preset--spacing--6)">Cuéntanos tu <span style="color:#c8f135">proyecto</span></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#a0a0a0"},"typography":{"fontSize":"var:preset|font-size|lg","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}}} -->
			<p class="has-text-color" style="color:#a0a0a0;font-size:var(--wp--preset--font-size--lg);line-height:1.7;margin-bottom:var(--wp--preset--spacing--7)">¿Tienes un proyecto en mente? Cuéntanos qué necesitas y te daremos una propuesta personalizada sin compromiso. Primera consulta siempre gratuita.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"contact-detail","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"flex-start"}} -->
			<div class="wp-block-group contact-detail" style="margin-bottom:var(--wp--preset--spacing--5)">
				<!-- wp:group {"style":{"color":{"background":"rgba(200,241,53,0.1)"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.75em","bottom":"0.75em","left":"0.75em","right":"0.75em"}}},"layout":{"type":"flex"}} -->
				<div class="wp-block-group" style="background:rgba(200,241,53,0.1);border-radius:12px;padding:0.75em">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xl"}}} -->
					<p style="font-size:var(--wp--preset--font-size--xl)">📧</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"margin":{"left":"var:preset|spacing|4"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group" style="margin-left:var(--wp--preset--spacing--4)">
					<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
					<p class="has-text-color" style="color:#666666;font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Email</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"500"}}} -->
					<p class="has-text-color" style="color:#ffffff;font-weight:500"><a href="mailto:hola@mkagency.com" style="color:inherit;text-decoration:none">hola@mkagency.com</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"contact-detail","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"flex-start"}} -->
			<div class="wp-block-group contact-detail" style="margin-bottom:var(--wp--preset--spacing--5)">
				<!-- wp:group {"style":{"color":{"background":"rgba(200,241,53,0.1)"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.75em","bottom":"0.75em","left":"0.75em","right":"0.75em"}}},"layout":{"type":"flex"}} -->
				<div class="wp-block-group" style="background:rgba(200,241,53,0.1);border-radius:12px;padding:0.75em">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xl"}}} -->
					<p style="font-size:var(--wp--preset--font-size--xl)">📞</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"margin":{"left":"var:preset|spacing|4"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group" style="margin-left:var(--wp--preset--spacing--4)">
					<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
					<p class="has-text-color" style="color:#666666;font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Teléfono</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"500"}}} -->
					<p class="has-text-color" style="color:#ffffff;font-weight:500"><a href="tel:+34900000000" style="color:inherit;text-decoration:none">+34 900 000 000</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"contact-detail","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"flex-start"}} -->
			<div class="wp-block-group contact-detail">
				<!-- wp:group {"style":{"color":{"background":"rgba(200,241,53,0.1)"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.75em","bottom":"0.75em","left":"0.75em","right":"0.75em"}}},"layout":{"type":"flex"}} -->
				<div class="wp-block-group" style="background:rgba(200,241,53,0.1);border-radius:12px;padding:0.75em">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xl"}}} -->
					<p style="font-size:var(--wp--preset--font-size--xl)">📍</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"margin":{"left":"var:preset|spacing|4"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group" style="margin-left:var(--wp--preset--spacing--4)">
					<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
					<p class="has-text-color" style="color:#666666;font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Oficina</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"500"}}} -->
					<p class="has-text-color" style="color:#ffffff;font-weight:500">Calle Gran Vía, 28<br>28013 Madrid, España</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"58%","className":"contact-form-col"} -->
		<div class="wp-block-column contact-form-col" style="flex-basis:58%">

			<!-- wp:group {"className":"contact-form-wrapper","style":{"color":{"background":"#111111"},"border":{"radius":"24px","color":"#2e2e2e","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7","right":"var:preset|spacing|7"}}}} -->
			<div class="wp-block-group contact-form-wrapper" style="border:1px solid #2e2e2e;border-radius:24px;background-color:#111111;padding:var(--wp--preset--spacing--8) var(--wp--preset--spacing--7)">

				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|space-grotesk","fontWeight":"700","fontSize":"var:preset|font-size|2xl"},"color":{"text":"#ffffff"},"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#ffffff;margin-bottom:var(--wp--preset--spacing--6)">Envíanos un mensaje</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"contact-form-shortcode","style":{"color":{"text":"#a0a0a0"}}} -->
				<p class="has-text-color contact-form-shortcode" style="color:#a0a0a0">
					[contact-form-7 id="REEMPLAZA_CON_ID" title="Formulario de contacto"]<br><br>
					<em style="font-size:0.85em;color:#666">ℹ️ Reemplaza el shortcode anterior con el de tu formulario de Contact Form 7 o WPForms. El diseño ya está aplicado.</em>
				</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
