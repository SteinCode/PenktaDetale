<?php
/**
 * Template part for displaying spinning banner
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package steinthemes
 */
$headerPostId = 13;
$topSpinningBannerText = get_field('top_spinning_banner', $headerPostId);
?>

<?php if ($topSpinningBannerText): ?>
    <div
        class="spinning-banner overflow-hidden relative w-full border-black border-t border-l border-r min-h-[1.75rem] md:min-h-[1rem] bg-accent text-white text-banner flex items-center">
        <span class="spinning-text inline-block whitespace-nowrap uppercase">
            <?php echo esc_html($topSpinningBannerText) ?></span>
    </div>
<?php endif; ?>