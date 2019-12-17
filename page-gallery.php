<?php
/**
 * The template for displaying all pages
 * Template name: Главная
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package infoffice
 */

get_header();
?>
            <div id="page-title-bar" class="page-title-bar">
                <div class="container">
                    <div class="wrap w-100 d-flex align-items-center">
                        <div class="page-title-bar-inner d-flex align-self-center flex-column w-100 text-center">
                            <div class="breadcrumb mb-0 w-100 order-last">
                                <!-- Breadcrumb NavXT 6.3.0 -->
                                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Перейти к infoffice." href="http://infoffice13.pf.by/" class="home"><span property="name">infoffice</span></a><meta property="position" content="1"></span> &gt; <span class="post post-page current-item">Галерея</span>				            </div>
                            <div class="page-header  mb-2 w-100 order-first">
                                <h1 class="page-title">Галерея</h1>                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-content-contain">
                <div id="content" class="site-content" style="padding: 0;">

                                        <div class="wrap">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <article id="post-1405" class="post-1405 page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div data-elementor-type="wp-post" data-elementor-id="1405" class="elementor elementor-1405" data-elementor-settings="[]">
                                            <div class="elementor-inner">
                                                <div class="elementor-section-wrap">
                                                    <div class="elementor-element elementor-element-80a2e43 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="80a2e43" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                        <div class="elementor-container elementor-column-gap-no">
                                                            <div class="elementor-row">
                                                                <div class="elementor-element elementor-element-04d9949 elementor-column elementor-col-100 elementor-top-column" data-id="04d9949" data-element_type="column">
                                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-7f82ba7 elementor-tabs-view-horizontal elementor-widget elementor-widget-opal-tabs elementor-widget-tabs" data-id="7f82ba7" data-element_type="widget" data-widget_type="opal-tabs.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-tabs" role="tablist">
                                                                                        <div class="elementor-tabs-wrapper">
                                                                                            <div id="elementor-tab-title-1331" class="elementor-tab-title elementor-tab-desktop-title elementor-active" data-tab="1" tabindex="1331" role="tab" aria-controls="elementor-tab-content-1331">Свободы 2</div>
                                                                                            <div id="elementor-tab-title-1332" class="elementor-tab-title elementor-tab-desktop-title" data-tab="2" tabindex="1332" role="tab" aria-controls="elementor-tab-content-1332">Офисы на Свободы 2</div>
                                                                                        </div>

                                                                                        <div class="elementor-tabs-content-wrapper">


                                                                                            <?php  $images = get_field('gallery_svobody')    ;

                                                                                            if ($images) :
                                                                                            ?>
                                                                                            <div id="elementor-tab-content-1331" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-1331" style="display: block;">
                                                                                                <div data-elementor-type="section" data-elementor-id="1453" class="elementor elementor-1453" data-elementor-settings="[]">
                                                                                                    <div class="elementor-inner">
                                                                                                        <div class="elementor-section-wrap">
                                                                                                            <div class="elementor-element elementor-element-e38b697 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e38b697" data-element_type="section">
                                                                                                                <div class="elementor-container elementor-column-gap-no">
                                                                                                                    <div class="elementor-row">
                                                                                                                        <div class="elementor-element elementor-element-27b810a elementor-column elementor-col-100 elementor-top-column" data-id="27b810a" data-element_type="column">
                                                                                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                                                <div class="elementor-widget-wrap">
                                                                                                                                    <div class="elementor-element elementor-element-4b4036d elementor-widget elementor-widget-opal-image-gallery" data-id="4b4036d" data-element_type="widget" data-settings="{&quot;gallery_animation&quot;:&quot;Shu&quot;}" data-widget_type="opal-image-gallery.default">
                                                                                                                                        <div class="elementor-widget-container">

                                                                                                                                            <div class="elementor-image-gallery">
                                                                                                                                                <div class="row grid" data-elementor-columns="3" data-elementor-columns-tablet="2" style="perspective: none;">

                                                                                                                                                  <?

                                                                                                                                                  foreach ($images as $image) :

                                                                                                                                                  ?>

                                                                                                                                                    <div class="column-item grid__item">
                                                                                                                                                        <a class="grid__link" data-elementor-lightbox-slideshow="4b4036d" href="<?= esc_url($image['url']); ?>" style="opacity: 1; transform-origin: 50% 50%; transform: scale(1);">
                                                                                                                                                            <img class="" src="<?= esc_url($image['url']); ?>" alt="square (2)">
                                                                                                                                                            <div class="gallery-item-overlay" style="display: flex; left: 100%; top: 0px;">
                                                                                                                                                                <i class="fa fa-image"></i>
                                                                                                                                                                <span>View Gallery</span>
                                                                                                                                                            </div>
                                                                                                                                                        </a>
                                                                                                                                                        <svg width="428px" height="278px" viewBox="0 0 428 278" class="grid__deco"><path d="M0,0 l428,0 0,278 -428,0 0,-278" stroke-dasharray="1412" stroke-dashoffset="1412" style="stroke-dashoffset: 0px; opacity: 0;"></path></svg></div>

<? endforeach;   ?>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <? endif;  ?>

<?php  $images = get_field('gallery_office')    ;

                                                                                            if ($images) :
                                                                                            ?>
                                                                                            <div id="elementor-tab-content-1332" class="elementor-tab-content elementor-clearfix" data-tab="2" role="tabpanel" aria-labelledby="elementor-tab-title-1332" style="display: none;">
                                                                                                <div data-elementor-type="section" data-elementor-id="1456" class="elementor elementor-1456" data-elementor-settings="[]">
                                                                                                    <div class="elementor-inner">
                                                                                                        <div class="elementor-section-wrap">
                                                                                                            <div class="elementor-element elementor-element-e38b697 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e38b697" data-element_type="section">
                                                                                                                <div class="elementor-container elementor-column-gap-no">
                                                                                                                    <div class="elementor-row">
                                                                                                                        <div class="elementor-element elementor-element-27b810a elementor-column elementor-col-100 elementor-top-column" data-id="27b810a" data-element_type="column">
                                                                                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                                                <div class="elementor-widget-wrap">
                                                                                                                                    <div class="elementor-element elementor-element-4b4036d elementor-widget elementor-widget-opal-image-gallery" data-id="4b4036d" data-element_type="widget" data-settings="{&quot;gallery_animation&quot;:&quot;Shu&quot;}" data-widget_type="opal-image-gallery.default">
                                                                                                                                        <div class="elementor-widget-container">




                                                                                                                                            <div class="elementor-image-gallery">
                                                                                                                                                <div class="row grid" data-elementor-columns="3" data-elementor-columns-tablet="2" style="perspective: none;">

                                                                                                                                                                                  <?

                                                                                                                                                  foreach ($images as $image) :

                                                                                                                                                  ?>

                                                                                                                                                    <div class="column-item grid__item">
                                                                                                                                                        <a class="grid__link" data-elementor-lightbox-slideshow="4b4036d" href="<?= esc_url($image['url']); ?>" style="opacity: 1; transform-origin: 50% 50%; transform: scale(1);">
                                                                                                                                                            <img class="" src="<?= esc_url($image['url']); ?>" alt="office (1)">
                                                                                                                                                            <div class="gallery-item-overlay" style="display: flex; left: 0px; top: -100%;">
                                                                                                                                                                <i class="fa fa-image"></i>
                                                                                                                                                                <span>View Gallery</span>
                                                                                                                                                            </div>
                                                                                                                                                        </a>
                                                                                                                                                        <svg width="20px" height="20px" viewBox="0 0 20 20" class="grid__deco"><path d="M0,0 l20,0 0,20 -20,0 0,-20" stroke-dasharray="40" stroke-dashoffset="40" style="stroke-dashoffset: 0px; opacity: 0;"></path></svg></div><?  endforeach; ?>

                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <? endif;  ?>


                                                                                        </div>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .entry-content
                                </article><!-- #post-## -->
                            </main><!-- #main -->
                        </div><!-- #primary -->
                    </div><!-- .wrap -->
                </div><!-- #content -->
            </div><!-- .site-content-contain -->

<?php
get_footer();