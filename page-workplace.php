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
                                class="post post-page current-item">Рабочее место в аренду</span></div>
                    <div class="page-header  mb-2 w-100 order-first">
                        <h1 class="page-title">Рабочее место в аренду</h1></div>
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


?>
    <div class="site-content-contain">
        <div id="content" class="site-content">
            <div data-elementor-type="wp-page" data-elementor-id="3161" class="elementor elementor-3161"
                 data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <div class="elementor-element elementor-element-fa441e8 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                             data-id="fa441e8" data-element_type="section"
                             data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-c553077 elementor-column elementor-col-100 elementor-top-column"
                                         data-id="c553077" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-b30196e elementor-widget elementor-widget-text-editor"
                                                     data-id="b30196e" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><?= $section_1['text_1']; ?></p></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-13fe496 elementor-widget elementor-widget-text-editor"
                                                     data-id="13fe496" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
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
                                class="elementor-element elementor-element-433d1b4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="433d1b4" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-99a6165 elementor-column elementor-col-100 elementor-top-column"
                                         data-id="99a6165" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-d6704a1 elementor-widget elementor-widget-image"
                                                     data-id="d6704a1" data-element_type="widget"
                                                     data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="853"
                                                                 src="<?= esc_url($section_2['img']['url']); ?>"
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
                                class="elementor-element elementor-element-97f74f4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="97f74f4" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-4b7f4a7 elementor-column elementor-col-100 elementor-top-column"
                                         data-id="4b7f4a7" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-0b7a79a elementor-widget elementor-widget-heading"
                                                     data-id="0b7a79a" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default"><?= esc_html($section_3['text_1']); ?></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-0bbfe4b elementor-widget elementor-widget-text-editor"
                                                     data-id="0bbfe4b" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><?= $section_3['text_2']; ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <?
                        $icons = $section_4['icons'];
                            if ($icons) :

                                ?>


                                <section
                                        class="elementor-element elementor-element-78764c5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                        data-id="78764c5" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-b6adc32 elementor-column elementor-col-100 elementor-top-column"
                                                 data-id="b6adc32" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">


                                                        <div class="elementor-element elementor-element-186c9da elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-id="186c9da" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-row">
                                                                    <?

                                                                    foreach ($icons as $icon) :

                                                                        ?>
                                                                        <div class="elementor-element elementor-element-33f0f73 elementor-column elementor-col-33 elementor-inner-column"
                                                                             data-id="33f0f73"
                                                                             data-element_type="column">
                                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-9db8c93 animated-fast elementor-widget elementor-widget-featured-box"
                                                                                         data-id="9db8c93"
                                                                                         data-element_type="widget"
                                                                                         data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:0}"
                                                                                         data-widget_type="featured-box.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-image-box-wrapper">
                                                                                                <div class="elementor-image-framed">
                                                                                                    <figure class="elementor-image-box-img">
                                                                                                        <?= $icon['icon'] ?>
                                                                                                    </figure>
                                                                                                </div>
                                                                                                <div class="elementor-image-box-content">
                                                                                                    <h3 class="elementor-image-box-title"><?= $icon['icon_text'] ?></h3>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?
                                                                    endforeach;

                                                                    ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            <?
                            endif;


                                ?>
                        <section
                                class="elementor-element elementor-element-5f3a364 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="5f3a364" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-4e8c6fe elementor-column elementor-col-100 elementor-top-column"
                                         data-id="4e8c6fe" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-1528f7d elementor-widget elementor-widget-text-editor"
                                                     data-id="1528f7d" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p>
                                                                <?= $section_5['text_1']; ?></p></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-de6d304 elementor-widget elementor-widget-text-editor"
                                                     data-id="de6d304" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p><?= esc_html($section_5['text_2']); ?></p></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5bdb809 elementor-widget elementor-widget-heading"
                                                     data-id="5bdb809" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default">
                                                            <?= esc_html($section_5['text_3']); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                                class="elementor-element elementor-element-cfcce33 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="cfcce33" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-a3db69f elementor-column elementor-col-100 elementor-top-column"
                                         data-id="a3db69f" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-4e86fe4 elementor-widget elementor-widget-text-editor"
                                                     data-id="4e86fe4" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p><span
                                                                        style="font-size: 20px;"><?= $section_6['text']; ?></span>
                                                            </p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                                class="elementor-element elementor-element-d0dadbe elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="d0dadbe" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-82fb07a elementor-column elementor-col-100 elementor-top-column"
                                         data-id="82fb07a" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-037618a elementor-widget elementor-widget-image"
                                                     data-id="037618a" data-element_type="widget"
                                                     data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="853"
                                                                 src="<?= esc_url($section_7['img']['url']); ?>"
                                                                 class="attachment-full size-full" alt="<?= esc_attr($section_7['img']['alt']); ?>"
                                                                 srcset="<?= esc_url($section_7['img']['url']); ?> 1280w, <?= esc_url($section_7['img']['url']); ?> 300w, <?= esc_url($section_7['img']['url']); ?> 768w, <?= esc_url($section_7['img']['url']); ?> 1024w"
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
                                class="elementor-element elementor-element-08c9420 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="08c9420" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-7b88fef elementor-column elementor-col-100 elementor-top-column"
                                         data-id="7b88fef" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-03c96ae elementor-widget elementor-widget-heading"
                                                     data-id="03c96ae" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default"><?= esc_html($section_8['text']); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                                class="elementor-element elementor-element-d49049f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="d49049f" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-5ff07d4 elementor-column elementor-col-100 elementor-top-column"
                                         data-id="5ff07d4" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3a78456 elementor-widget elementor-widget-text-editor"
                                                     data-id="3a78456" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p>
                                                                <?= $section_9['text']; ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                                class="elementor-element elementor-element-f1dde36 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="f1dde36" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-be2158c elementor-column elementor-col-100 elementor-top-column"
                                         data-id="be2158c" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-adc973c elementor-widget elementor-widget-text-editor"
                                                     data-id="adc973c" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p>
                                                                <?= $section_10['text']; ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                                class="elementor-element elementor-element-452c201 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="452c201" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-cca0dc1 elementor-column elementor-col-100 elementor-top-column"
                                         data-id="cca0dc1" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-02eb611 elementor-widget elementor-widget-text-editor"
                                                     data-id="02eb611" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p>
                                                                <?= $section_11['text']; ?></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-db4c58d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                             data-id="db4c58d" data-element_type="section"
                             data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-0307f44 elementor-column elementor-col-50 elementor-top-column"
                                         data-id="0307f44" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-76aa515 elementor-widget elementor-widget-heading"
                                                     data-id="76aa515" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <? $contact_form = get_field('contact_form', 'options'); ?>
                                                        <h2 class="elementor-heading-title elementor-size-default"><?= esc_html($contact_form['left_label']); ?></h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-2c1a0cb add_social_icons elementor-widget elementor-widget-heading"
                                                     data-id="2c1a0cb" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            <?= esc_html($contact_form['title']); ?></h2></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3bde9cc elementor-column elementor-col-50 elementor-top-column"
                                         data-id="3bde9cc" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3ce2105 elementor-widget elementor-widget-heading"
                                                     data-id="3ce2105" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default">
                                                            <?= esc_html($contact_form['label']); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-e753ebc elementor-mobile-align-center elementor-widget elementor-widget-opal-contactform7"
                                                     data-id="e753ebc" data-element_type="widget"
                                                     data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                                     data-widget_type="opal-contactform7.default">
                                                    <div class="elementor-widget-container">
                                                        <div role="form" class="wpcf7" id="wpcf7-f6-p3161-o1"
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
                                class="elementor-element elementor-element-9fd8bca elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                data-id="9fd8bca" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-e26274a elementor-column elementor-col-100 elementor-top-column"
                                         data-id="e26274a" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-33efa09 elementor-widget elementor-widget-heading"
                                                     data-id="33efa09" data-element_type="widget"
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