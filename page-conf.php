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
$section_10 = get_field('section_10');
$section_11 = get_field('section_11');


?>
    <div id="page-title-bar" class="page-title-bar">
        <div class="container">
            <div class="wrap w-100 d-flex align-items-center">
                <div class="page-title-bar-inner d-flex align-self-center flex-column w-100 text-center">
                    <div class="breadcrumb mb-0 w-100 order-last">
                        <!-- Breadcrumb NavXT 6.3.0 -->
                        <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Перейти к «Офис 13»." href="http://infoffice13.pf.by/" class="home"><span property="name">«Офис 13»</span></a><meta property="position" content="1"></span> &gt; <span class="post post-page current-item">Аренда конференц-зала</span>				            </div>
                    <div class="page-header  mb-2 w-100 order-first">
                        <h1 class="page-title">Аренда конференц-зала</h1>                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-content-contain">
        <div id="content" class="site-content">
            <div data-elementor-type="wp-page" data-elementor-id="3127" class="elementor elementor-3127" data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <div class="elementor-element elementor-element-56c9b011 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="56c9b011" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-1e246b6d elementor-column elementor-col-100 elementor-top-column" data-id="1e246b6d" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-76cd0181 elementor-widget elementor-widget-text-editor" data-id="76cd0181" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p><?= esc_html($section_1['text_1']); ?></p></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6a6bbdc7 elementor-widget elementor-widget-heading" data-id="6a6bbdc7" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($section_1['text_2']); ?></h2>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-5b5e531d elementor-widget elementor-widget-text-editor" data-id="5b5e531d" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p><?= $section_1['text_3']; ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="elementor-element elementor-element-31f05935 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="31f05935" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-11a08970 elementor-column elementor-col-100 elementor-top-column" data-id="11a08970" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-14f97a63 elementor-widget elementor-widget-image" data-id="14f97a63" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="853" src="<?= esc_url($section_2['img']['url']); ?>" class="attachment-full size-full" alt="" srcset="<?= esc_url($section_2['img']['url']); ?> 1280w, <?= esc_url($section_2['img']['url']); ?> 300w, <?= esc_url($section_2['img']['url']); ?> 768w, <?= esc_url($section_2['img']['url']); ?> 1024w" sizes="(max-width: 1280px) 100vw, 1280px">											</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-element elementor-element-1f06755d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="1f06755d" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-dea9936 elementor-column elementor-col-100 elementor-top-column" data-id="dea9936" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-56c097c0 elementor-widget elementor-widget-heading" data-id="56c097c0" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($section_3['text']); ?></h2>		</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-element elementor-element-bf1a0c5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="bf1a0c5" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-014ee56 elementor-column elementor-col-100 elementor-top-column" data-id="014ee56" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-7c03098 elementor-widget elementor-widget-text-editor" data-id="7c03098" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p><?= esc_html($section_4['text']); ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-element elementor-element-42be95e8 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="42be95e8" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-4e76eae4 elementor-column elementor-col-100 elementor-top-column" data-id="4e76eae4" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-5a2f7d00 elementor-widget elementor-widget-heading" data-id="5a2f7d00" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($section_5['text']); ?></h2>		</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-element elementor-element-2d26c97c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="2d26c97c" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-706480e5 elementor-column elementor-col-100 elementor-top-column" data-id="706480e5" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-4af3ab5f elementor-widget elementor-widget-text-editor" data-id="4af3ab5f" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p><?= esc_html($section_5['text']); ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-element elementor-element-77e4769c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="77e4769c" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-18f31176 elementor-column elementor-col-100 elementor-top-column" data-id="18f31176" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-8f85a18 elementor-widget elementor-widget-image" data-id="8f85a18" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="853" src="<?= esc_url($section_6['img']['url']); ?>" class="attachment-full size-full" alt="" srcset="<?= esc_url($section_2['img']['url']); ?> 1280w, <?= esc_url($section_2['img']['url']); ?> 300w, <?= esc_url($section_2['img']['url']); ?> 768w, <?= esc_url($section_2['img']['url']); ?> 1024w" sizes="(max-width: 1280px) 100vw, 1280px">											</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-element elementor-element-9dcf65b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="9dcf65b" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-143554dd elementor-column elementor-col-100 elementor-top-column" data-id="143554dd" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-2c4c1cd6 elementor-widget elementor-widget-heading" data-id="2c4c1cd6" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($section_8['text']); ?></h2>		</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-element elementor-element-6cd9b05f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="6cd9b05f" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-1269df92 elementor-column elementor-col-100 elementor-top-column" data-id="1269df92" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3c351b75 elementor-widget elementor-widget-text-editor" data-id="3c351b75" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p><?= $section_9['text']; ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-element elementor-element-3af67b01 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="3af67b01" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-f38f1b3 elementor-column elementor-col-100 elementor-top-column" data-id="f38f1b3" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-36e78f1d elementor-widget elementor-widget-text-editor" data-id="36e78f1d" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p><?= esc_html($section_10['text']); ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-element elementor-element-18165139 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="18165139" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-44ba16ac elementor-column elementor-col-100 elementor-top-column" data-id="44ba16ac" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-2a19c65f elementor-widget elementor-widget-text-editor" data-id="2a19c65f" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p><?= $section_11['text']; ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-267b347 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="267b347" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-25b16886 elementor-column elementor-col-50 elementor-top-column" data-id="25b16886" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-77a6e7c3 elementor-widget elementor-widget-heading" data-id="77a6e7c3" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <? $contact_form = get_field('contact_form', 'options'); ?>
                                                        <p class="elementor-heading-title elementor-size-default"><?= esc_html($contact_form['left_label']); ?></p>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-7fbbfbcb add_social_icons elementor-widget elementor-widget-heading" data-id="7fbbfbcb" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><?= esc_html($contact_form['title']); ?></p>		</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-4f7c48c1 elementor-column elementor-col-50 elementor-top-column" data-id="4f7c48c1" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-35879f9b elementor-widget elementor-widget-heading" data-id="35879f9b" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default"><?= esc_html($contact_form['label']); ?></div>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-7946e398 elementor-mobile-align-center elementor-widget elementor-widget-opal-contactform7" data-id="7946e398" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="opal-contactform7.default">
                                                    <div class="elementor-widget-container">
                                                        <div role="form" class="wpcf7" id="wpcf7-f6-p3127-o1" lang="ru-RU" dir="ltr">
                                                            <div class="screen-reader-response"></div>
                                                            <form action="<?php echo site_url() ?>/wp-content/themes/infoffice/send.php" method="POST">
                                                                <?

                                                                $inputs = $contact_form['inputs'];

                                                                foreach ($inputs as $input) :


                                                                    ?>
                                                                    <label><?= esc_html($input['label']);    ?><br>
                                                                        <span class="wpcf7-form-control-wrap your-name"><input
                                                                                    type="text" name="<?=  esc_attr($input['input_name']);   ?>"
                                                                                    class="form-input"> </span></label>
                                                                <?  endforeach;  ?>
                                                                <label><?=  esc_html($contact_form['textarea']['label']);  ?><br>
                                                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="<?=  esc_attr($contact_form['textarea']['name']);  ?>" cols="40" rows="3"
                                                                                                                                 class="form-input"></textarea> </span></label>
                                                                <input type="hidden" name="message1"></input>
                                                                <input id="form-submit" type="submit" value="<?= esc_attr($contact_form['submit']['text']);  ?>">
                                                            </form></div>		</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="elementor-element elementor-element-3a7e443b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="3a7e443b" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-631a38e4 elementor-column elementor-col-100 elementor-top-column" data-id="631a38e4" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-4a141b43 elementor-widget elementor-widget-heading" data-id="4a141b43" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default">Или просто позвоните нам:
                                                            <a href="tel:+375447776699">+375 44 777-66-99</a></div>		</div>
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