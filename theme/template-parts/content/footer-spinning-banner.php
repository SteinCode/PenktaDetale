<?php
/**
 * Template part for displaying spinning banner
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package steinthemes
 */
$footerPostId = 16;
$footerSpinningBannerEmail = get_field('footer_spinning_banner_email', $footerPostId);
$footerSpinningBannerPhone = get_field('footer_spinning_banner_phone', $footerPostId);

?>

<?php if ($footerSpinningBannerEmail || $footerSpinningBannerPhone): ?>
    <div class="spinning-banner overflow-hidden relative w-full border-black border-t border-l border-r min-h-[1.75rem] md:min-h-[1rem] bg-accent text-white text-banner flex items-center"
        data-pause-on-hover="true" data-speed-mobile="30">
        <div class="spinning-text inline-block whitespace-nowrap uppercase">
            <?php if ($footerSpinningBannerPhone): ?>
                <a href="tel:<?php echo esc_html($footerSpinningBannerPhone) ?>"
                    class="inline-block pr-4"><?php echo esc_html($footerSpinningBannerPhone) ?></a>
            <?php endif; ?>
            <?php if ($footerSpinningBannerEmail): ?>
                <a href="mailto:<?php echo esc_html($footerSpinningBannerEmail) ?>"
                    class="inline-block"><?php echo esc_html($footerSpinningBannerEmail) ?></a>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>