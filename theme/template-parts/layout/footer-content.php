<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package steinthemes
 */
$desktop_logo = wp_get_attachment_image_src(6, 'full');
$year = date_i18n('Y');
$footerPostId = 16;
$footerSocialText1 = get_field('footer_social_text_1', $footerPostId);
$footerSocialText2 = get_field('footer_social_text_2', $footerPostId);
$footerSocialText3 = get_field('footer_social_text_3', $footerPostId);
$footerSocialText4 = get_field('footer_social_text_4', $footerPostId);

$footerSocialUrl1 = get_field('footer_social_url_1', $footerPostId);
$footerSocialUrl2 = get_field('footer_social_url_2', $footerPostId);
$footerSocialUrl3 = get_field('footer_social_url_3', $footerPostId);
$footerSocialUrl4 = get_field('footer_social_url_4', $footerPostId);
?>

<footer id="colophon" class="max-w-[100rem] mx-auto">
	<?php get_template_part('template-parts/content/footer-spinning-banner'); ?>
	<div class="social-row w-full bg-black">
		<div
			class="social-wrapper text-white text-[0.75rem] flex items-center min-h-[1.625rem] justify-evenly pt-1 pb-1">
			<?php if ($footerSocialUrl1): ?>
				<a class="hover:underline"
					href="<?php echo esc_url($footerSocialUrl1); ?>"><?php echo esc_html($footerSocialText1); ?></a>
			<?php endif; ?>
			<?php if ($footerSocialUrl2): ?>
				<a class="hover:underline"
					href="<?php echo esc_url($footerSocialUrl2); ?>"><?php echo esc_html($footerSocialText2); ?></a>
			<?php endif; ?>
			<?php if ($footerSocialUrl3): ?>
				<a class="hover:underline"
					href="<?php echo esc_url($footerSocialUrl3); ?>"><?php echo esc_html($footerSocialText3); ?></a>
			<?php endif; ?>
			<?php if ($footerSocialUrl4): ?>
				<a class="hover:underline"
					href="<?php echo esc_url($footerSocialUrl4); ?>"><?php echo esc_html($footerSocialText4); ?></a>
			<?php endif; ?>
		</div>
	</div>
	<div
		class="footer-wrapper flex w-full min-h-[5.625rem] md:min-h-[3.5rem] bg-white border-1 border-black items-center justify-center flex-col italic text-[0.625rem] gap-[0.5rem] md:gap-[0.25rem]">
		<a href="<?php echo esc_url(home_url('/')); ?>">
			<img src="<?php echo esc_url($desktop_logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
				class="max-w-[7.25rem] md:max-w-[4rem]">
		</a>
		<span
			class="block text-[0.625rem] md:text-[0.375rem]"><?php echo esc_html("© " . $year . " Penkta Detalė") ?></span>
	</div>

</footer><!-- #colophon -->