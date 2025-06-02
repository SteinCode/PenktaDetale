<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package steinthemes
 */

$desktop_logo = wp_get_attachment_image_src(5, 'full');
$mobile_logo = wp_get_attachment_image_src(7, 'full');
?>

<header id="masthead" class="w-full bg-white h-auto max-w-[100rem] mx-auto">
	<?php get_template_part('template-parts/content/top-spinning-banner'); ?>
	<div
		class="header-wrapper flex items-center justify-center min-h-[3.75rem] border-1 border-black md:min-h-[1.8rem]">
		<a href="<?php echo esc_url(home_url('/')); ?>">
			<img src="<?php echo esc_url($desktop_logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
				class="max-w-[14.375rem] block md:hidden">
			<img src="<?php echo esc_url($mobile_logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
				class="max-w-[3rem] hidden md:block">
		</a>

	</div>
</header><!-- #masthead -->