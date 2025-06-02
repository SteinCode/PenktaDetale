<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package steinthemes
 */

get_header();
?>

<section id="primary" class=" w-full max-w-[90rem] mx-auto h-full">
	<main id="main" class="w-full h-full flex justify-center align-center py-[18rem] md:py-[20rem] border-l border-r">
		<div class="max-w-[30rem] md:px-[0.675rem]">
			<h1 class="page-title w-full text-heading-h3 md:text-[1.5rem]">
				<?php esc_html_e('Toks puslapis nerastas', 'steinthemes'); ?>
			</h1>
			<p class="w-full text-body md:text-[0.875rem]">
				<?php esc_html_e('Šis puslapis neegzistuoja, jis galėjo būti pašalintas arba pervadintas, arba jo niekada ir nebuvo.', 'steinthemes'); ?>
			</p>
		</div>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
