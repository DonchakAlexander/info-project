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
                                class="post post-page current-item">Аренда переговорной комнаты</span></div>
                    <div class="page-header  mb-2 w-100 order-first">
                        <h1 class="page-title">Аренда переговорной комнаты</h1></div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-content-contain">
        <div id="content" class="site-content" style="padding: 0;">
            <div data-elementor-type="wp-page" data-elementor-id="3138" class="elementor elementor-3138"
                 data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <div class="elementor-element elementor-element-174b0451 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                             data-id="174b0451" data-element_type="section"
                             data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-28a89f5d elementor-column elementor-col-100 elementor-top-column"
                                         data-id="28a89f5d" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-7894634 elementor-widget elementor-widget-text-editor"
                                                     data-id="7894634" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><?= $section_1['text_1']; ?></p></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-76225971 elementor-widget elementor-widget-heading"
                                                     data-id="76225971" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($section_1['text_2']); ?></h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-10eafe5b elementor-widget elementor-widget-text-editor"
                                                     data-id="10eafe5b" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><?= $section_1['text_3']; ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section
                                class="elementor-element elementor-element-213a044e elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="213a044e" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-105f5f22 elementor-column elementor-col-100 elementor-top-column"
                                         data-id="105f5f22" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-5b557b65 elementor-widget elementor-widget-image"
                                                     data-id="5b557b65" data-element_type="widget"
                                                     data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="853"
                                                                 src="<?= esc_url($section_2['img']['url']); ?>"
                                                                 class="attachment-full size-full"
                                                                 alt="<?= esc_attr($section_2['img']['alt']); ?>"
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
                                class="elementor-element elementor-element-d7cc3e4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="d7cc3e4" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-0673bb3 elementor-column elementor-col-100 elementor-top-column"
                                         data-id="0673bb3" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-b5bf097 elementor-widget elementor-widget-text-editor"
                                                     data-id="b5bf097" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
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
                                class="elementor-element elementor-element-6135fdb4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="6135fdb4" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-560149e4 elementor-column elementor-col-100 elementor-top-column"
                                         data-id="560149e4" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3e82db45 elementor-widget elementor-widget-text-editor"
                                                     data-id="3e82db45" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><?= $section_4['text_1']; ?></p></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2cd6c9d elementor-widget elementor-widget-text-editor"
                                                     data-id="2cd6c9d" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><?= $section_4['text_2']; ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                                class="elementor-element elementor-element-6a230a85 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="6a230a85" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-31cdcaec elementor-column elementor-col-100 elementor-top-column"
                                         data-id="31cdcaec" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-1086d9d8 elementor-widget elementor-widget-image"
                                                     data-id="1086d9d8" data-element_type="widget"
                                                     data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="853"
                                                                 src="<?= esc_url($section_5['img']['url']); ?>"
                                                                 class="attachment-full size-full"
                                                                 alt="<?= esc_attr($section_2['img']['alt']); ?>"
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
                                class="elementor-element elementor-element-2a7f8621 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="2a7f8621" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-3e5e68d6 elementor-column elementor-col-100 elementor-top-column"
                                         data-id="3e5e68d6" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-36fc0736 elementor-widget elementor-widget-heading"
                                                     data-id="36fc0736" data-element_type="widget"
                                                     data-widget_type="heading.default">
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
                                class="elementor-element elementor-element-37fa9f7c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="37fa9f7c" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-4296d49d elementor-column elementor-col-100 elementor-top-column"
                                         data-id="4296d49d" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-41a2947d elementor-widget elementor-widget-text-editor"
                                                     data-id="41a2947d" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
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
                                class="elementor-element elementor-element-1fcc9b17 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="1fcc9b17" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-5111f3db elementor-column elementor-col-100 elementor-top-column"
                                         data-id="5111f3db" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-70c492fe elementor-widget elementor-widget-heading"
                                                     data-id="70c492fe" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($section_8['text']); ?></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                                class="elementor-element elementor-element-17357e79 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="17357e79" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-1b271f2a elementor-column elementor-col-100 elementor-top-column"
                                         data-id="1b271f2a" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-2fab752b elementor-widget elementor-widget-text-editor"
                                                     data-id="2fab752b" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><?= $section_9['text']; ?></p></div>
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
                            <div class="elementor-element elementor-element-3238693d elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                 data-id="3238693d" data-element_type="section"
                                 data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-element elementor-element-31d9ea88 elementor-column elementor-col-100 elementor-top-column"
                                             data-id="31d9ea88" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-793ed6e2 elementor-widget elementor-widget-opal-image-gallery"
                                                         data-id="793ed6e2" data-element_type="widget"
                                                         data-settings="{&quot;gallery_animation&quot;:&quot;Nut&quot;}"
                                                         data-widget_type="opal-image-gallery.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image-gallery">
                                                                <div class="row grid" data-elementor-columns="3"
                                                                     data-elementor-columns-tablet="2"
                                                                     data-elementor-columns-mobile="1"
                                                                     style="perspective: none;">
                                                                    <?php foreach ($images as $image) : ?>
                                                                        <div class="column-item grid__item"
                                                                             style="overflow: hidden;">
                                                                            <a class="grid__link"
                                                                               data-elementor-lightbox-slideshow="793ed6e2"
                                                                               href="<?= esc_url($image['url']); ?>"
                                                                               style="opacity: 1; transform-origin: 50% 50%; transform: scale(1);">
                                                                                <img class=""
                                                                                     src="<?= esc_url($image['url']); ?>"
                                                                                     alt="<?= esc_attr($image['alt']); ?>">
                                                                                <div class="gallery-item-overlay">
                                                                                    <i class="fa fa-image"></i>
                                                                                    <span>View Gallery</span>
                                                                                </div>
                                                                            </a>
                                                                            <span class="grid__reveal"
                                                                                  style="background-color: rgb(29, 29, 29); transform: translateX(-101%); opacity: 1;"></span>
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
                        <?
                        endif;
                        ?>
                        <div class="elementor-element elementor-element-55fb9285 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                             data-id="55fb9285" data-element_type="section"
                             data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-63366075 elementor-column elementor-col-50 elementor-top-column"
                                         data-id="63366075" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-5efc4bd5 elementor-widget elementor-widget-heading"
                                                     data-id="5efc4bd5" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <? $contact_form = get_field('contact_form', 'options'); ?>
                                                        <p class="elementor-heading-title elementor-size-default"><?= esc_html($contact_form['left_label']); ?></p></div>
                                                </div>
                                                <div class="elementor-element elementor-element-54cdc340 add_social_icons elementor-widget elementor-widget-heading"
                                                     data-id="54cdc340" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <?= esc_html($contact_form['title']); ?></p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7b569b elementor-column elementor-col-50 elementor-top-column"
                                         data-id="7b569b" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3018f7c2 elementor-widget elementor-widget-heading"
                                                     data-id="3018f7c2" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default">
                                                            <?= esc_html($contact_form['label']); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-336aca3c elementor-mobile-align-center elementor-widget elementor-widget-opal-contactform7"
                                                     data-id="336aca3c" data-element_type="widget"
                                                     data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                                     data-widget_type="opal-contactform7.default">
                                                    <div class="elementor-widget-container">
                                                        <div role="form" class="wpcf7" id="wpcf7-f6-p3138-o1"
                                                             lang="ru-RU" dir="ltr">
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
                                class="elementor-element elementor-element-4f95c917 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="4f95c917" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-5d59b2b2 elementor-column elementor-col-100 elementor-top-column"
                                         data-id="5d59b2b2" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-5ec9efe5 elementor-widget elementor-widget-heading"
                                                     data-id="5ec9efe5" data-element_type="widget"
                                                     data-widget_type="heading.default">
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