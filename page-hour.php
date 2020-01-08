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
                        <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                                                              title="Перейти к «Офис 13»."
                                                                              href="http://infoffice13.pf.by/"
                                                                              class="home"><span property="name">«Офис 13»</span></a><meta
                                    property="position" content="1"></span> &gt; <span
                                class="post post-page current-item">Аренда офиса на час</span></div>
                    <div class="page-header  mb-2 w-100 order-first">
                        <h1 class="page-title">Аренда офиса на час</h1></div>
                </div>
            </div>
        </div>
    </div>

<?php

$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$section_5 = get_field('section_5');
$section_6 = get_field('section_6');
$section_7 = get_field('section_7');
$section_8 = get_field('section_8');
$section_9 = get_field('section_9');
$section_10 = get_field('section_10');
$section_11 = get_field('section_11');
$section_12 = get_field('section_12');


?>
    <div class="site-content-contain">
    <div id="content" class="site-content" style="padding: 0">
    <div data-elementor-type="wp-page" data-elementor-id="3100" class="elementor elementor-3100"
         data-elementor-settings="[]">
    <div class="elementor-inner">
    <div class="elementor-section-wrap">
    <div class="elementor-element elementor-element-74215fe3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
         data-id="74215fe3" data-element_type="section"
         data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-37f83de9 elementor-column elementor-col-100 elementor-top-column"
                     data-id="37f83de9" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-3dc9a5cf elementor-widget elementor-widget-heading"
                                 data-id="3dc9a5cf" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($section_1['page_title']); ?></h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5a10fbda elementor-widget elementor-widget-text-editor"
                                 data-id="5a10fbda" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p><?= $section_1['text_1']; ?></p></div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-62a33008 elementor-widget elementor-widget-text-editor"
                                 data-id="62a33008" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p><?= $section_1['text_2']; ?></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section
            class="elementor-element elementor-element-7aae25d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="7aae25d0" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-6723ca8 elementor-column elementor-col-100 elementor-top-column"
                     data-id="6723ca8" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-2795aac8 elementor-widget elementor-widget-image"
                                 data-id="2795aac8" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image">
                                        <img width="1280" height="853" src="<?= esc_url($section_2['img']['url']); ?>"
                                             class="attachment-full size-full" alt=""
                                             srcset="<?= esc_url($section_2['img']['url']); ?> 1280w, <?= esc_url($section_2['img']['url']); ?> 300w, <?= esc_url($section_2['img']['url']); ?> 768w, <?= esc_url($section_2['img']['url']); ?> 1024w"
                                             sizes="(max-width: 1280px) 100vw, 1280px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="elementor-element elementor-element-e336ce3 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="e336ce3" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-7eb645f elementor-column elementor-col-100 elementor-top-column"
                     data-id="7eb645f" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-b8a78da elementor-widget elementor-widget-text-editor"
                                 data-id="b8a78da" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p><?= $section_3['text']; ?></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="elementor-element elementor-element-639205e5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="639205e5" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-3bde3e6d elementor-column elementor-col-100 elementor-top-column"
                     data-id="3bde3e6d" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-2849e573 elementor-widget elementor-widget-heading"
                                 data-id="2849e573" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($section_4['text']); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="elementor-element elementor-element-1da77942 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="1da77942" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-21d86dc8 elementor-column elementor-col-100 elementor-top-column"
                     data-id="21d86dc8" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-2696bc47 elementor-widget elementor-widget-text-editor"
                                 data-id="2696bc47" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p><?= $section_5['text']; ?></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="elementor-element elementor-element-ddc873b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="ddc873b" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-55a8853 elementor-column elementor-col-100 elementor-top-column"
                     data-id="55a8853" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-f032fac elementor-widget elementor-widget-heading"
                                 data-id="f032fac" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($section_6['text']); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="elementor-element elementor-element-b555949 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="b555949" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-ac0c77d elementor-column elementor-col-100 elementor-top-column"
                     data-id="ac0c77d" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-7ff0920 elementor-widget elementor-widget-text-editor"
                                 data-id="7ff0920" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p><?= $section_7['text']; ?></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="elementor-element elementor-element-264e8337 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="264e8337" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-713ceeb2 elementor-column elementor-col-100 elementor-top-column"
                     data-id="713ceeb2" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-559ce748 elementor-widget elementor-widget-image"
                                 data-id="559ce748" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image">
                                        <img width="1280" height="853" src="<?= esc_url($section_8['img']['url']); ?>"
                                             class="attachment-full size-full" alt=""
                                             srcset="<?= esc_url($section_8['img']['url']); ?> 1280w, <?= esc_url($section_8['img']['url']); ?> 300w, <?= esc_url($section_8['img']['url']); ?> 768w, <?= esc_url($section_8['img']['url']); ?> 1024w"
                                             sizes="(max-width: 1280px) 100vw, 1280px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="elementor-element elementor-element-64861fa8 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="64861fa8" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-5b0d3f24 elementor-column elementor-col-100 elementor-top-column"
                     data-id="5b0d3f24" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-4810c4d1 elementor-widget elementor-widget-heading"
                                 data-id="4810c4d1" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($section_9['text']); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="elementor-element elementor-element-2c0152a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="2c0152a9" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-644cc011 elementor-column elementor-col-100 elementor-top-column"
                     data-id="644cc011" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-4ffc1eac elementor-widget elementor-widget-text-editor"
                                 data-id="4ffc1eac" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p><?= $section_10['text']; ?></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="elementor-element elementor-element-27abaf53 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="27abaf53" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-2ba84b33 elementor-column elementor-col-100 elementor-top-column"
                     data-id="2ba84b33" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-6deb17c2 elementor-widget elementor-widget-heading"
                                 data-id="6deb17c2" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($section_11['text']); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="elementor-element elementor-element-239977f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="239977f" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-282b812c elementor-column elementor-col-100 elementor-top-column"
                     data-id="282b812c" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-7a998494 elementor-widget elementor-widget-text-editor"
                                 data-id="7a998494" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p><?= $section_12['text']; ?></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $images = get_field('gallery');
if ($images) :

    ?>
    <div class="elementor-element elementor-element-c31110e elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
         data-id="c31110e" data-element_type="section"
         data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-3708280 elementor-column elementor-col-100 elementor-top-column"
                     data-id="3708280" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-19ecdfd elementor-widget elementor-widget-opal-image-gallery"
                                 data-id="19ecdfd" data-element_type="widget"
                                 data-settings="{&quot;gallery_animation&quot;:&quot;Shu&quot;}"
                                 data-widget_type="opal-image-gallery.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image-gallery">
                                        <div class="row grid" data-elementor-columns="3"
                                             data-elementor-columns-tablet="2" style="perspective: none;">
                                            <?php foreach ($images as $image) : ?>
                                                <div class="column-item grid__item">
                                                    <a class="grid__link" data-elementor-lightbox-slideshow="19ecdfd"
                                                       href="<?= esc_url($image['url']); ?>"
                                                       style="opacity: 1; transform-origin: 50% 50%; transform: scale(1);">
                                                        <img class="" src="<?= esc_url($image['url']); ?>"
                                                             alt="<?= esc_attr($image['alt']); ?>">
                                                        <div class="gallery-item-overlay">
                                                            <i class="fa fa-image"></i>
                                                            <span>View Gallery</span>
                                                        </div>
                                                    </a>
                                                    <svg width="614px" height="403px" viewBox="0 0 614 403"
                                                         class="grid__deco">
                                                        <path d="M0,0 l614,0 0,403 -614,0 0,-403"
                                                              stroke-dasharray="2034" stroke-dashoffset="2034"
                                                              style="stroke-dashoffset: 0px; opacity: 0;"></path>
                                                    </svg>
                                                </div>
                                            <? endforeach; ?>
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
    <div class="elementor-element elementor-element-4ac778ff elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
         data-id="4ac778ff" data-element_type="section"
         data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-3f1188eb elementor-column elementor-col-50 elementor-top-column"
                     data-id="3f1188eb" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-7fd3d517 elementor-widget elementor-widget-heading"
                                 data-id="7fd3d517" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <? $contact_form = get_field('contact_form', 'options'); ?>
                                    <p class="elementor-heading-title elementor-size-default"><?= esc_html($contact_form['left_label']); ?></p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-79266bd6 add_social_icons elementor-widget elementor-widget-heading"
                                 data-id="79266bd6" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default"><?= esc_html($contact_form['title']); ?></p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-30a29680 elementor-column elementor-col-50 elementor-top-column"
                     data-id="30a29680" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-3e789357 elementor-widget elementor-widget-heading"
                                 data-id="3e789357" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-heading-title elementor-size-default"><?= esc_html($contact_form['label']); ?></div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7035c5c8 elementor-mobile-align-center elementor-widget elementor-widget-opal-contactform7"
                                 data-id="7035c5c8" data-element_type="widget"
                                 data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                 data-widget_type="opal-contactform7.default">
                                <div class="elementor-widget-container">
                                    <div role="form" class="wpcf7" id="wpcf7-f6-p3100-o1" lang="ru-RU" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="<?php echo site_url() ?>/wp-content/themes/infoffice/functions.php"
                                              method="post" class="js-form-send" novalidate="novalidate">
                                            <?

                                            $inputs = $contact_form['inputs'];

                                            foreach ($inputs as $input) :


                                                ?>
                                                <label><?= esc_html($input['label']);    ?><br>
                                                    <span class="wpcf7-form-control-wrap your-name"><input
                                                            type="text" name="<?=  esc_attr($input['input_name']);   ?>"
                                                            class="form-input"> </span></label>
                                            <?  endforeach;  ?>
                                            <p><label><?=  esc_html($contact_form['textarea']['label']);  ?><br>
                                                    <span class="wpcf7-form-control-wrap your-message"><textarea
                                                                name="<?=  esc_attr($contact_form['textarea']['name']);  ?>" cols="40" rows="3"
                                                                class="form-input"
                                                                aria-invalid="false"></textarea></span> </label><br>
                                                <input type="hidden" name="message1">
                                                <input id="form-submit" type="submit" value="<?= esc_attr($contact_form['submit']['text']);  ?>">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section
            class="elementor-element elementor-element-533bc13c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
            data-id="533bc13c" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-17e7cf82 elementor-column elementor-col-100 elementor-top-column"
                     data-id="17e7cf82" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-5da0db61 elementor-widget elementor-widget-heading"
                                 data-id="5da0db61" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <? $text_block_cf = get_field('text_block', 'options');  ?>
                                    <div class="elementor-heading-title elementor-size-default"><?= esc_html($text_block_cf['text']);
                                        ?>
                                        <a href="tel:<?= esc_url($text_block_cf['phone']); ?>"><?= esc_html($text_block_cf['phone']); ?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
    </div>
    </div><!-- #content -->
    </div>
    <?php
    get_footer();