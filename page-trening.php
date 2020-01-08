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
                                class="post post-page current-item">Аренда зала для тренинга</span></div>
                    <div class="page-header  mb-2 w-100 order-first">
                        <h1 class="page-title">Аренда зала для тренинга</h1></div>
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


?>
    <div class="site-content-contain">
        <div id="content" class="site-content">
            <div class="wrap">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <article id="post-3163" class="post-3163 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div data-elementor-type="wp-page" data-elementor-id="3163"
                                     class="elementor elementor-3163" data-elementor-settings="[]">
                                    <div class="elementor-inner">
                                        <div class="elementor-section-wrap">
                                            <div class="elementor-element elementor-element-7ea0551 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                 data-id="7ea0551" data-element_type="section"
                                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-e44d5d4 elementor-column elementor-col-100 elementor-top-column"
                                                             data-id="e44d5d4" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-5427935 elementor-widget elementor-widget-text-editor"
                                                                         data-id="5427935" data-element_type="widget"
                                                                         data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p><?= esc_html($section_1['text']); ?></p>
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
                                                    class="elementor-element elementor-element-3b099f7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                    data-id="3b099f7" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-3027033 elementor-column elementor-col-100 elementor-top-column"
                                                             data-id="3027033" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-fe3dbbe elementor-widget elementor-widget-heading"
                                                                         data-id="fe3dbbe" data-element_type="widget"
                                                                         data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-heading-title elementor-size-default"><?= esc_html($section_2['text_1']); ?></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-c964820 elementor-widget elementor-widget-text-editor"
                                                                         data-id="c964820" data-element_type="widget"
                                                                         data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p><?= esc_html($section_2['text_2']); ?></p>
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

                                            $icons = $section_3['icons'];

                                            if ($icons) :

                                                ?>
                                                <section
                                                        class="elementor-element elementor-element-1caaeaa elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                        data-id="1caaeaa" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-88c21c2 elementor-column elementor-col-100 elementor-top-column"
                                                                 data-id="88c21c2" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-c8f82eb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                                             data-id="c8f82eb"
                                                                             data-element_type="section">
                                                                            <div class="elementor-container elementor-column-gap-no">
                                                                                <div class="elementor-row">

                                                                                    <?

                                                                                    foreach ($icons as $icon) :

                                                                                        ?>
                                                                                        <div class="elementor-element elementor-element-e5e9414 elementor-column elementor-col-33 elementor-inner-column"
                                                                                             data-id="e5e9414"
                                                                                             data-element_type="column">

                                                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-1f7f806 animated-fast elementor-widget elementor-widget-featured-box animated fadeInLeft"
                                                                                                         data-id="1f7f806"
                                                                                                         data-element_type="widget"
                                                                                                         data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:200}"
                                                                                                         data-widget_type="featured-box.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image-box-wrapper">
                                                                                                                <div class="elementor-image-framed">
                                                                                                                    <figure class="elementor-image-box-img">
                                                                                                                        <?= $icon['icon'] ?>
                                                                                                                    </figure>
                                                                                                                </div>
                                                                                                                <div class="elementor-image-box-content">
                                                                                                                    <h3 class="elementor-image-box-title">
                                                                                                                        <?= $icon['icon_text'] ?></h3>
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
                                                    class="elementor-element elementor-element-0dd8cec elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                    data-id="0dd8cec" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-702c604 elementor-column elementor-col-100 elementor-top-column"
                                                             data-id="702c604" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-185392c elementor-widget elementor-widget-text-editor"
                                                                         data-id="185392c" data-element_type="widget"
                                                                         data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p><?= esc_html($section_4['text']); ?></p>
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
                                                    class="elementor-element elementor-element-ddca07d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                    data-id="ddca07d" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-d9666c6 elementor-column elementor-col-100 elementor-top-column"
                                                             data-id="d9666c6" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-4b22dc9 elementor-widget elementor-widget-heading"
                                                                         data-id="4b22dc9" data-element_type="widget"
                                                                         data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-heading-title elementor-size-default">
                                                                                <?= esc_html($section_5['text_1']); ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-5f9f839 elementor-widget elementor-widget-text-editor"
                                                                         data-id="5f9f839" data-element_type="widget"
                                                                         data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p><?= esc_html($section_5['text_2']); ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-bf7a395 elementor-widget elementor-widget-text-editor"
                                                                         data-id="bf7a395" data-element_type="widget"
                                                                         data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p><?= esc_html($section_5['text_3']); ?></p>
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
                                                    class="elementor-element elementor-element-7bbad26 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                    data-id="7bbad26" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-1e80b3f elementor-column elementor-col-100 elementor-top-column"
                                                             data-id="1e80b3f" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-c893cd5 elementor-widget elementor-widget-image"
                                                                         data-id="c893cd5" data-element_type="widget"
                                                                         data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <img width="1280" height="853"
                                                                                     src="<?= esc_url($section_6['img']['url']); ?>"
                                                                                     class="attachment-full size-full"
                                                                                     alt="<?= esc_attr($section_6['img']['alt']); ?>"
                                                                                     srcset="<?= esc_url($section_6['img']['url']); ?> 1280w, <?= esc_url($section_6['img']['url']); ?> 300w, <?= esc_url($section_6['img']['url']); ?> 768w, <?= esc_url($section_6['img']['url']); ?> 1024w"
                                                                                     sizes="(max-width: 1280px) 100vw, 1280px">
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
                                                    class="elementor-element elementor-element-0e12530 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                    data-id="0e12530" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-99b15d9 elementor-column elementor-col-100 elementor-top-column"
                                                             data-id="99b15d9" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-1266a30 elementor-widget elementor-widget-heading"
                                                                         data-id="1266a30" data-element_type="widget"
                                                                         data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-heading-title elementor-size-default">
                                                                                <?= esc_html($section_7['text_1']); ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-dc211aa elementor-widget elementor-widget-text-editor"
                                                                         data-id="dc211aa" data-element_type="widget"
                                                                         data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p><?= esc_html($section_7['text_2']); ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <?
                                                                    $items = $section_7['list'];
                                                                    if ($items) :

                                                                        ?>

                                                                        <div class="elementor-element elementor-element-f3bb967 elementor-widget elementor-widget-text-editor"
                                                                             data-id="f3bb967"
                                                                             data-element_type="widget"
                                                                             data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                                    <ol>

                                                                                        <?

                                                                                        foreach ($items as $item) :

                                                                                            ?>

                                                                                            <li style="text-align: left;"><?= $item['text']; ?>
                                                                                            </li>
                                                                                        <?
                                                                                        endforeach;

                                                                                        ?>
                                                                                    </ol>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    <?
                                                                    endif;

                                                                    ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                    class="elementor-element elementor-element-6b55405 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                    data-id="6b55405" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-8cd748b elementor-column elementor-col-100 elementor-top-column"
                                                             data-id="8cd748b" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-93b2a8e elementor-widget elementor-widget-heading"
                                                                         data-id="93b2a8e" data-element_type="widget"
                                                                         data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-heading-title elementor-size-default">
                                                                                <?= esc_html($section_8['text']); ?>
                                                                            </div>
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
                                                <div class="elementor-element elementor-element-229e9a3 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                     data-id="229e9a3" data-element_type="section"
                                                     data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-1bb6a98 elementor-column elementor-col-100 elementor-top-column"
                                                                 data-id="1bb6a98" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-20e76a3 elementor-widget elementor-widget-opal-image-gallery"
                                                                             data-id="20e76a3"
                                                                             data-element_type="widget"
                                                                             data-settings="{&quot;gallery_animation&quot;:&quot;Nut&quot;}"
                                                                             data-widget_type="opal-image-gallery.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image-gallery">
                                                                                    <div class="row grid"
                                                                                         data-elementor-columns="3"
                                                                                         data-elementor-columns-tablet="2"
                                                                                         data-elementor-columns-mobile="1"
                                                                                         style="perspective: none;">
                                                                                        <?php foreach ($images as $image) : ?>
                                                                                            <div class="column-item grid__item"
                                                                                                 style="overflow: hidden;">
                                                                                                <a class="grid__link"
                                                                                                   data-elementor-lightbox-slideshow="20e76a3"
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
                                                    </div>
                                                </div>
                                            <?
                                            endif;

                                            ?>
                                            <div class="elementor-element elementor-element-5865772 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                 data-id="5865772" data-element_type="section"
                                                 data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-f4b8128 elementor-column elementor-col-50 elementor-top-column"
                                                             data-id="f4b8128" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-7390cbb elementor-widget elementor-widget-heading"
                                                                         data-id="7390cbb" data-element_type="widget"
                                                                         data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <? $contact_form = get_field('contact_form', 'options'); ?>
                                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                                <?= esc_html($contact_form['left_label']); ?></h2></div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-a599284 add_social_icons elementor-widget elementor-widget-heading"
                                                                         data-id="a599284" data-element_type="widget"
                                                                         data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                                <?= esc_html($contact_form['title']); ?></h2></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ad7292f elementor-column elementor-col-50 elementor-top-column"
                                                             data-id="ad7292f" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-9e163f2 elementor-widget elementor-widget-heading"
                                                                         data-id="9e163f2" data-element_type="widget"
                                                                         data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-heading-title elementor-size-default">
                                                                                <?= esc_html($contact_form['label']); ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-cca13bf elementor-mobile-align-center elementor-widget elementor-widget-opal-contactform7"
                                                                         data-id="cca13bf" data-element_type="widget"
                                                                         data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                                                         data-widget_type="opal-contactform7.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div role="form" class="wpcf7"
                                                                                 id="wpcf7-f6-p3163-o1" lang="ru-RU"
                                                                                 dir="ltr">
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
                                                    class="elementor-element elementor-element-15c4f91 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                    data-id="15c4f91" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-80b7178 elementor-column elementor-col-100 elementor-top-column"
                                                             data-id="80b7178" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-bd1a865 elementor-widget elementor-widget-heading"
                                                                         data-id="bd1a865" data-element_type="widget"
                                                                         data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <? $text_block_cf = get_field('text_block', 'options');  ?>
                                                                            <div class="elementor-heading-title elementor-size-default">
                                                                                <?= esc_html($text_block_cf['text']);
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
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- .wrap -->
        </div><!-- #content -->
    </div>

<?php
get_footer();