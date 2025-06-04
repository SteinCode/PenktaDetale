<?php
/**
 * Template Name: Main Page
 * Description: A custom main‐page layout.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package steinthemes
 */
?>

<?php
$mainPageId = 22;
$topHeading = get_field('top_heading', $mainPageId);
$topHeadingImageId = get_field('top_heading_image', $mainPageId);
$companyDescription = get_field('company_description', $mainPageId);
$mainEmail = get_field('main_email', $mainPageId);
$mainPhone = get_field('main_phone', $mainPageId);

$productHeading1 = get_field('product_heading_1', $mainPageId);
$productHeading2 = get_field('product_heading_2', $mainPageId);
$productHeading3 = get_field('product_heading_3', $mainPageId);
$productHeading4 = get_field('product_heading_4', $mainPageId);
$productHeading5 = get_field('product_heading_5', $mainPageId);
$productHeading6 = get_field('product_heading_6', $mainPageId);

$productDescription1 = get_field('product_description_1', $mainPageId);
$productDescription2 = get_field('product_description_2', $mainPageId);
$productDescription3 = get_field('product_description_3', $mainPageId);
$productDescription4 = get_field('product_description_4', $mainPageId);
$productDescription5 = get_field('product_description_5', $mainPageId);
$productDescription6 = get_field('product_description_6', $mainPageId);

$productImage1 = get_field('product_image_1', $mainPageId);
$productImage2 = get_field('product_image_2', $mainPageId);
$productImage3 = get_field('product_image_3', $mainPageId);
$productImage4 = get_field('product_image_4', $mainPageId);
$productImage5 = get_field('product_image_5', $mainPageId);
$productImage6 = get_field('product_image_6', $mainPageId);
get_header();
?>
<section
    class="primary main-page min-h-[42rem] w-full flex flex-col items-center justify-start max-w-[100rem] mx-auto overflow-hidden">
    <div class="page-wrapper w-full">
        <?php if ($topHeading || $topHeadingImageId): ?>
            <div class="company-description-section border-black border-r border-l bg-background w-full flex">
                <div class="main-left-section flex-1 border-black border-r flex items-center">
                    <h1
                        class="text-heading-h2 leading-[3.25rem] md:leading-[2.125rem] md:text-[1.5rem] pl-[2.5rem] pr-[2.5rem] md:pl-[0.675rem] md:pr-[0.675rem] py-[1rem]">
                        <?php echo esc_html($topHeading); ?>
                    </h1>
                </div>
                <div class="main-right-section flex-1">
                    <?php if ($topHeadingImageId): ?>
                        <img src="<?php echo esc_url(wp_get_attachment_image_url($topHeadingImageId, 'full')); ?>"
                            alt="<?php echo esc_attr($topHeading); ?>"
                            class="w-full h-full aspect-[740/740] md:aspect-[197/298] object-cover">
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($companyDescription || $mainEmail || $mainPhone): ?>
            <div
                class="contacts-section bg-black grid grid-cols-12 gap-4 pt-[6.25rem] pb-[6.25rem] md:pb-[3.75rem] md:pt-[3.75rem] md:gap-[0.675rem]">
                <?php if ($companyDescription): ?>
                    <div
                        class="text-white text-body md:text-[0.75rem] pl-[2.5rem] md:pl-[0.675rem] pr-[2.5rem] md:pr-[0.675rem] col-span-7 xl:col-span-6 lg:col-span-12 lg:pb-[2.375rem]">
                        <span class="inline-block max-w-[55rem]"><?php echo esc_html($companyDescription); ?><span
                                class="type_marker"></span></span>
                    </div>
                <?php endif; ?>
                <?php if ($mainEmail || $mainPhone): ?>
                    <div
                        class="text-white uppercase flex flex-col items-start pr-[2.5rem] lg:pl-[2.5rem] md:pr-[0.675rem] md:pl-[0.675rem] col-span-5 xl:col-span-6 lg:col-span-12">
                        <?php if ($mainEmail): ?>
                            <a class="relative top-[-0.75rem] lg:top-0 inline-block w-full text-[2.8rem] lg:text-[2.4rem] md:text-[1.8rem] vsm:text-[1.6rem]"
                                href="mailto:<?php echo esc_html($mainEmail); ?>">
                                <?php echo esc_html($mainEmail); ?>
                            </a>
                        <?php endif; ?>
                        <?php if ($mainPhone): ?>
                            <a class="relative top-[-0.75rem] lg:top-0 inline-block w-full text-[2.8rem] lg:text-[2.4rem] md:text-[1.8rem] vsm:text-[1.6rem]"
                                href="tel:<?php echo esc_html($mainPhone); ?>"><?php echo esc_html($mainPhone); ?></a>

                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php get_template_part('template-parts/content/middle-spinning-banner'); ?>

        <?php if ($productHeading1 || $productHeading2 || $productHeading3 || $productHeading4 || $productHeading5 || $productHeading6): ?>
            <div
                class="product-section w-full bg-background border-black border-t border-l border-r py-[3.75rem] md:py-0[2.875rem] overflow-hidden">
                <div class="product-row-left grid grid-cols-12 w-full mb-[4rem] md:mb-[2.6rem]">
                    <div
                        class="col-span-5 sm:col-span-6 pl-[2.5rem] pr-[2.5rem] md:pl-[0.675rem] md:pr-[0.675rem] flex flex-col justify-center ">
                        <div class="row-text relative top-[3rem] md:top-[0rem] max-w-[45rem]">
                            <?php if ($productHeading1): ?>
                                <h2
                                    class="text-heading-h3 pb-5 md:pb-3 md:text-[1.5rem] max-w-[26rem] sm:text-[1.4rem] vsm:text-[1.1rem]">
                                    <?php echo esc_html($productHeading1); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if ($productDescription1): ?>
                                <p class="text-body md:text-[0.75rem]">
                                    <?php echo esc_html($productDescription1); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($productImage1): ?>
                        <div
                            class="row-image z-10 image-wrapper w-full h-auto col-span-3 xl:col-span-4 lg:col-span-5 md:col-span-6  sm:pr-[0.675rem] sm:border-b">
                            <img src="<?php echo esc_url(wp_get_attachment_image_url($productImage1, 'full')); ?>"
                                alt="<?php echo esc_attr($productHeading1); ?>"
                                class="w-full h-full aspect-[348/465] object-cover border-black border-1 sm:border-b-0">
                        </div>

                        <div
                            class="row-line block border-b border-black col-span-4 xl:col-span-3 lg:col-span-2 md:col-span-1 sm:hidden">
                        </div>
                    <?php endif; ?>
                </div>

                <div class="product-row-right grid grid-cols-12 w-full mb-[4rem] md:mb-[2.6rem]">
                    <div class="row-line col-span-1 block xl:hidden"></div>
                    <?php if ($productImage2): ?>
                        <div
                            class="row-image z-10 image-wrapper xl:pl-[2.5rem] md:pl-[0.675rem] w-full h-auto col-span-4 xl:col-span-6 lg:col-span-7 ">
                            <img src="<?php echo esc_url(wp_get_attachment_image_url($productImage2, 'full')); ?>"
                                alt="<?php echo esc_attr($productHeading2); ?>"
                                class="w-full h-full aspect-square object-cover border-black border-1">
                        </div>
                    <?php endif; ?>
                    <div
                        class="col-span-7 xl:col-span-6 lg:col-span-5 pl-[2.5rem] pr-[2.5rem] md:pl-[0.675rem] md:pr-[0.675rem] md:pr-[0.675rem] flex flex-col justify-center border-b">
                        <div class="row-text relative top-[-2.5rem] md:top-[0rem] max-w-[45rem]">
                            <?php if ($productHeading2): ?>
                                <h2
                                    class="text-heading-h3 max-w-[26rem] sm:text-[1.4rem] vsm:text-[1.1rem] pb-5 md:pb-3 md:text-[1.5rem]">
                                    <?php echo esc_html($productHeading2); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if ($productDescription2): ?>
                                <p class="text-body md:text-[0.75rem] md:pb-5">
                                    <?php echo esc_html($productDescription2); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="product-row-left grid grid-cols-12 w-full mb-[4rem] md:mb-[2.6rem]">
                    <div
                        class="col-span-6 xl:col-span-5 sm:col-span-6 pl-[2.5rem] pr-[2.5rem] md:pl-[0.675rem] md:pr-[0.675rem] flex flex-col justify-center ">
                        <div class="row-text relative top-[1.5rem] md:top-[0rem] max-w-[45rem]">
                            <?php if ($productHeading3): ?>
                                <h2
                                    class="text-heading-h3 max-w-[26rem] sm:text-[1.4rem] vsm:text-[1.1rem] pb-5 md:pb-3 md:text-[1.5rem]">
                                    <?php echo esc_html($productHeading3); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if ($productDescription3): ?>
                                <p class="text-body md:text-[0.75rem]">
                                    <?php echo esc_html($productDescription3); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($productImage3): ?>
                        <div
                            class="row-image z-10 image-wrapper w-full h-auto col-span-4 xl:col-span-5 md:col-span-6 sm:pr-[0.675rem] sm:border-t">
                            <img src="<?php echo esc_url(wp_get_attachment_image_url($productImage3, 'full')); ?>"
                                alt="<?php echo esc_attr($productHeading3); ?>"
                                class="w-full h-full aspect-square object-cover border-black border-1 sm:border-t-0">
                        </div>

                        <div class="row-line border-t border-black col-span-2 md:col-span-1 sm:hidden"></div>
                    <?php endif; ?>
                </div>

                <div class="product-row-right grid grid-cols-12 w-full mb-[4rem] md:mb-[2.6rem]">
                    <div class="row-line col-span-3 border-t xl:col-span-2 lg:col-span-1 sm:hidden"></div>
                    <?php if ($productImage4): ?>
                        <div
                            class="row-image z-10 image-wrapper w-full h-auto col-span-4 lg:col-span-5 sm:pl-[0.675rem] sm:border-t">
                            <img src="<?php echo esc_url(wp_get_attachment_image_url($productImage4, 'full')); ?>"
                                alt="<?php echo esc_attr($productHeading4); ?>"
                                class="w-full h-full aspect-square object-cover border-black border-1 sm:border-t-0">
                        </div>
                    <?php endif; ?>
                    <div
                        class="col-span-5 xl:col-span-6 sm:col-span-7 pl-[2.5rem] pr-[2.5rem] md:pl-[0.675rem] md:pr-[0.675rem] flex flex-col justify-center">
                        <div class="row-text relative top-[2.5rem] md:top-[0rem] max-w-[45rem]">
                            <?php if ($productHeading4): ?>
                                <h2
                                    class="text-heading-h3 max-w-[26rem] sm:text-[1.4rem] vsm:text-[1.1rem] pb-5 md:pb-3 md:text-[1.5rem]">
                                    <?php echo esc_html($productHeading4); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if ($productDescription4): ?>
                                <p class="text-body md:text-[0.75rem]">
                                    <?php echo esc_html($productDescription4); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="product-row-left grid grid-cols-12 w-full mb-[4rem] md:mb-[2.6rem]">
                    <div
                        class="col-span-4 xl:col-span-5 lg:col-span-6 pl-[2.5rem] pr-[2.5rem] md:pl-[0.675rem] md:pr-[0.675rem] flex flex-col justify-center ">
                        <div class="row-text relative top-[2rem] md:top-[0rem] max-w-[45rem]">
                            <?php if ($productHeading5): ?>
                                <h2
                                    class="text-heading-h3 max-w-[26rem] sm:text-[1.4rem] vsm:text-[1.1rem] pb-5 md:pb-3 md:text-[1.5rem]">
                                    <?php echo esc_html($productHeading5); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if ($productDescription5): ?>
                                <p class="text-body md:text-[0.75rem]">
                                    <?php echo esc_html($productDescription5); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($productImage5): ?>
                        <div class="row-image z-10 image-wrapper w-full h-auto col-span-6 border-black border-1 lg:col-span-5">
                            <img src="<?php echo esc_url(wp_get_attachment_image_url($productImage5, 'full')); ?>"
                                alt="<?php echo esc_attr($productHeading5); ?>"
                                class="w-full h-full aspect-[624/465] object-cover">
                        </div>

                        <div class="row-line border-t border-black col-span-2 xl:col-span-1"></div>
                    <?php endif; ?>
                </div>

                <div class="product-row-right grid grid-cols-12 w-full">
                    <div class="row-line col-span-1 border-b lg:col-span-1"></div>
                    <?php if ($productImage6): ?>
                        <div class="row-image z-10 image-wrapper w-full h-auto col-span-4 lg:col-span-5">
                            <img src="<?php echo esc_url(wp_get_attachment_image_url($productImage6, 'full')); ?>"
                                alt="<?php echo esc_attr($productHeading6); ?>"
                                class="w-full h-full aspect-[444/465] object-cover border-black border-1">
                        </div>
                    <?php endif; ?>
                    <div
                        class="col-span-7 xl:col-span-6 pl-[2.5rem] pr-[2.5rem] md:pl-[0.675rem] md:pr-[0.675rem] flex flex-col justify-center">
                        <div class="row-text relative max-w-[45rem]">
                            <?php if ($productHeading6): ?>
                                <h2
                                    class="text-heading-h3 max-w-[26rem] sm:text-[1.4rem] vsm:text-[1.1rem] pb-5 md:pb-3 md:text-[1.5rem]">
                                    <?php echo esc_html($productHeading6); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if ($productDescription6): ?>
                                <p class="text-body md:text-[0.75rem]">
                                    <?php echo esc_html($productDescription6); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
?>