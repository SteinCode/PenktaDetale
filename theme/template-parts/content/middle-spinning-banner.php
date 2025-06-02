<?php
/**
 * Template part for displaying spinning banner
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package steinthemes
 */
$mainPageId = 22;
$middleSpinningBannerText = get_field('middle_banner_text', $mainPageId);
?>

<?php if ($middleSpinningBannerText): ?>
    <div class="spinning-banner overflow-hidden relative w-full border-black border-t border-l border-r min-h-[1.75rem] md:min-h-[1rem] bg-accent text-white text-banner flex items-center"
        data-direction="left">
        <span class="spinning-text inline-block whitespace-nowrap uppercase">
            <?php echo esc_html($middleSpinningBannerText) ?></span>
    </div>
<?php endif; ?>