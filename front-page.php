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

    <div id="primary" class="content-area" xmlns:http="http://www.w3.org/1999/xhtml">
        <main id="main" class="site-main">

            <?php
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', 'page');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>


            <?php

            $about = get_field('about');
            $image_about = $about['image_about'];
            $services = get_field('services');
            $offices = get_field('offices');
            $revolution = $offices['revolution'];






            ?>






            <div class="owl-carousel owl-theme">
                <div class="owl-slide d-flex align-items-center cover"
                     style="background-image: url('/wp-content/themes/infoffice/assets/img/night-3.jpg');">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <div class="home-slide-title owl-slide-animated owl-slide-subtitle mb-3">
                                        Коворкинг в центре Минска
                                    </div>
                                    <h2 class="home-slide-title owl-slide-animated owl-slide-title">Офис 13</h2>
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-4d701e3 elementor-align-right elementor-hidden-phone elementor-button-primary elementor-widget elementor-widget-button"
                                                 data-id="4d701e3" data-element_type="widget"
                                                 data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="http://infoffice13.pf.by/booking/"
                                                           class="btn-on-slider"
                                                           role="button">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Оставить заявку</span>
                                </span>
                                                        </a>
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
                <div class="owl-slide d-flex align-items-center cover"
                     style="background-image: url('/wp-content/themes/infoffice/assets/img/night-7.jpg');">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <div class="home-slide-title owl-slide-animated owl-slide-subtitle mb-3">
                                        Коворкинг в центре Минска
                                    </div>
                                    <h2 class="home-slide-title owl-slide-animated owl-slide-title">Офис 13</h2>
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-4d701e3 elementor-align-right elementor-hidden-phone elementor-button-primary elementor-widget elementor-widget-button"
                                                 data-id="4d701e3" data-element_type="widget"
                                                 data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="http://infoffice13.pf.by/booking/"
                                                           class="btn-on-slider"
                                                           role="button">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Оставить заявку</span>
                                </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/owl-slide-->


            </div>


            <div id="page-title-bar" class="page-title-bar">
            </div>
            <div class="site-content-contain">
                <div id="content" class="site-content" style="padding: 0;">
                    <div data-elementor-type="wp-post" data-elementor-id="10" class="elementor elementor-10"
                         data-elementor-settings="[]">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <div class="elementor-element elementor-element-a54ff18 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                     data-id="a54ff18" data-element_type="section"
                                     data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-8dc69c7 elementor-column elementor-col-100 elementor-top-column"
                                                 data-id="8dc69c7" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-0594a65 elementor-widget elementor-widget-opal-revslider"
                                                             data-id="0594a65" data-element_type="widget"
                                                             data-widget_type="opal-revslider.default">
                                                            <div class="elementor-widget-container">
                                                                <link href="/wp-content/themes/infoffice/assets/css/bold.css"
                                                                      rel="stylesheet" property="stylesheet"
                                                                      type="text/css" media="all">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-element elementor-element-15bf9fa elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                         data-id="15bf9fa" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-b1d7c28 elementor-column elementor-col-100 elementor-top-column"
                                                     data-id="b1d7c28" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-0f9d0e2 elementor-widget elementor-widget-text-editor"
                                                                 data-id="0f9d0e2" data-element_type="widget"
                                                                 data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <p><?= $about['about_title']; ?></p></div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-dc83ec5 elementor-widget elementor-widget-heading"
                                                                 data-id="dc83ec5" data-element_type="widget"
                                                                 data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-heading-title elementor-size-default">
                                                                        <?= $about['office13']; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-94fb7f3 elementor-widget elementor-widget-image"
                                                                 data-id="94fb7f3" data-element_type="widget"
                                                                 data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="29" height="29"
                                                                             src="/wp-content/themes/infoffice/assets/img/rectangle1.png"
                                                                             class="attachment-large size-large" alt="">
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
                                            class="elementor-element elementor-element-16352fc elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                            data-id="16352fc" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-f092d59 elementor-column elementor-col-100 elementor-top-column"
                                                     data-id="f092d59" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-32e34f2 elementor-widget elementor-widget-text-editor"
                                                                 data-id="32e34f2" data-element_type="widget"
                                                                 data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <p><?= $about['text_office']; ?></p>
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
                                            class="elementor-element elementor-element-568d5f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                            data-id="568d5f6" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-cf31322 elementor-column elementor-col-100 elementor-top-column"
                                                     data-id="cf31322" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-676599f elementor-widget elementor-widget-image"
                                                                 data-id="676599f" data-element_type="widget"
                                                                 data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <?php



                                                                        if( !empty( $image_about ) ): ?>

                                                                        <img width="1280" height="853"
                                                                             src="<?php echo esc_url($image_about['url']); ?>"
                                                                             class="attachment-full size-full" alt="<?php echo esc_attr($image_about['alt']); ?>"
                                                                             srcset="<?php echo esc_url($image_about['url']); ?> 1280w, <?php echo esc_url($image_about['url']); ?> 300w, <?php echo esc_url($image_about['url']); ?> 768w, <?php echo esc_url($image_about['url']); ?> 1024w"
                                                                             sizes="(max-width: 1280px) 100vw, 1280px">

                                                                         <? endif; ?>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="elementor-element elementor-element-83ae017 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                         data-id="83ae017" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-3e3653a elementor-column elementor-col-100 elementor-top-column"
                                                     data-id="3e3653a" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-dbdf7c6 elementor-widget elementor-widget-heading"
                                                                 data-id="dbdf7c6" data-element_type="widget"
                                                                 data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-heading-title elementor-size-default">
                                                                        <?= $services['services_title']; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-86bf537 elementor-widget elementor-widget-image"
                                                                 data-id="86bf537" data-element_type="widget"
                                                                 data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="29" height="29"
                                                                             src="/wp-content/themes/infoffice/assets/img/rectangle1.png"
                                                                             class="attachment-large size-large" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-eab1a44 elementor-widget elementor-widget-text-editor"
                                                                 data-id="eab1a44" data-element_type="widget"
                                                                 data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <p><?= $services['services_text']; ?></p></div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-68b6ca1 elementor-align-center elementor-button-primary elementor-widget elementor-widget-button"
                                                                 data-id="68b6ca1" data-element_type="widget"
                                                                 data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a href="http://infoffice13.pf.by/contact-us/"
                                                                           class="elementor-button-link elementor-button elementor-size-lg"
                                                                           role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Оставить заявку</span>
		</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ced1d93 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                         data-id="ced1d93" data-element_type="section"
                                         data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-8f5e675 elementor-column elementor-col-100 elementor-top-column"
                                                     data-id="8f5e675" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-129bc8a elementor-widget elementor-widget-heading"
                                                                 data-id="129bc8a" data-element_type="widget"
                                                                 data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                        <?= $offices['title_offices']; ?></h2></div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-35dbbf4 elementor-widget elementor-widget-image"
                                                                 data-id="35dbbf4" data-element_type="widget"
                                                                 data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="29" height="29"
                                                                             src="/wp-content/themes/infoffice/assets/img/rectangle1.png"
                                                                             class="attachment-large size-large" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-31d2ac9 elementor-widget elementor-widget-text-editor"
                                                                 data-id="31d2ac9" data-element_type="widget"
                                                                 data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <p><?= $offices['text_offices']; ?></p></div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-f8b334c elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                                 data-id="f8b334c" data-element_type="section">
                                                                <div class="elementor-container elementor-column-gap-no">
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-element elementor-element-57f62f2 elementor-column elementor-col-50 elementor-inner-column"
                                                                             data-id="57f62f2"
                                                                             data-element_type="column"
                                                                             data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                                <div class="elementor-background-overlay"></div>
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="animated-thumb elementor-element elementor-element-1198645 pricing_element-align-center elementor-price-table__footer-alignment-center elementor-button-primary elementor-widget elementor-widget-opal-price-table"
                                                                                         data-id="1198645"
                                                                                         data-element_type="widget"
                                                                                         data-widget_type="opal-price-table.default">
                                                                                        <div class="elementor-widget-container">

                                                                                            <div class="elementor-price-table">
                                                                                                <div class="elementor-price-table__header">

                                                                                                    <img width="300"
                                                                                                         height="200"
                                                                                                         src="/wp-content/themes/infoffice/assets/img/0003-IMG_7652-1-300x200.jpg"
                                                                                                         class="attachment-medium size-medium"
                                                                                                         alt=""
                                                                                                         srcset="/wp-content/themes/infoffice/assets/img/0003-IMG_7652-1-300x200.jpg 300w, /wp-content/themes/infoffice/assets/img/0003-IMG_7652-1-768x512.jpg 768w, /wp-content/themes/infoffice/assets/img/0003-IMG_7652-1-1024x682.jpg 1024w, /wp-content/themes/infoffice/assets/img/0003-IMG_7652-1.jpg 1280w"
                                                                                                         sizes="(max-width: 300px) 100vw, 300px">
                                                                                                    <h3 class="elementor-price-table__heading">
                                                                                                        <?= $revolution['rev_title'];  ?></h3>

                                                                                                </div>

                                                                                                <div class="elementor-price-table__price">

                                                                                                    <div class="elementor-price-table__allprice">
                                                                                                        <span class="elementor-price-table__integer-part"><?= $revolution['reva_price'];  ?></span>

                                                                                                        <span class="elementor-price-table__fractional-part"></span>
                                                                                                        <div class="elementor-price-table__period elementor-typo-excluded">
                                                                                                            / час
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="elementor-price-table__description">
                                                                                                        <?= $revolution['reva_text'];  ?>
                                                                                                    </div>

                                                                                                </div>
    <?php $list = $revolution['list'];
          $list_item = $list['list_item'];
    ?>
                                                                                                <ul class="elementor-price-table__features-list">
                                                                                                    <?

                                                                                                    foreach ($list as $row) :

                                                                                                    ?>
                                                                                                    <li class="elementor-repeater-item-c4fd334">
                                                                                                        <div class="elementor-price-table__feature-inner">
								                                    <span>
										<?= $row['list_items'];  ?>									</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <!--<li class="elementor-repeater-item-5b4809b">
                                                                                                        <div class="elementor-price-table__feature-inner">
								                                    <span>
										Доступность 24/7									</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="elementor-repeater-item-0d3916d">
                                                                                                        <div class="elementor-price-table__feature-inner">
								                                    <span>
										Собственная парковка									</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="elementor-repeater-item-553b0be">
                                                                                                        <div class="elementor-price-table__feature-inner">
								                                    <span>
										Бесплатный трансфер из аэропорта									</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="elementor-repeater-item-db3670a">
                                                                                                        <div class="elementor-price-table__feature-inner">
								                                    <span>
										Бонусы при долгосрочной аренде									</span>
                                                                                                        </div>
                                                                                                    </li>-->
                                                                                                    <? endforeach; ?>
                                                                                                </ul>

                                                                                                <div class="elementor-price-table__footer">
                                                                                                    <a class="elementor-price-table__button elementor-button elementor-size-md"
                                                                                                       href="http://infoffice13.pf.by/home-1/revolucionnaya-13/">Перейти</a>

                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-23e3d2a elementor-column elementor-col-50 elementor-inner-column"
                                                                             data-id="23e3d2a"
                                                                             data-element_type="column">
                                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-c0cbb79 pricing_element-align-center elementor-price-table__footer-alignment-center elementor-button-primary elementor-widget elementor-widget-opal-price-table"
                                                                                         data-id="c0cbb79"
                                                                                         data-element_type="widget"
                                                                                         data-widget_type="opal-price-table.default">
                                                                                        <div class="elementor-widget-container">

                                                                                            <div class="elementor-price-table">
                                                                                                <div class="elementor-price-table__header">

                                                                                                    <img width="300"
                                                                                                         height="200"
                                                                                                         src="/wp-content/themes/infoffice/assets/img/office-1-300x200.jpg"
                                                                                                         class="attachment-medium size-medium"
                                                                                                         alt=""
                                                                                                         srcset="/wp-content/themes/infoffice/assets/img/office-1-300x200.jpg 300w, /wp-content/themes/infoffice/assets/img/office-1-768x512.jpg 768w, /wp-content/themes/infoffice/assets/img/office-1-1024x682.jpg 1024w, /wp-content/themes/infoffice/assets/img/office-1.jpg 1280w"
                                                                                                         sizes="(max-width: 300px) 100vw, 300px">
                                                                                                    <h3 class="elementor-price-table__heading">
                                                                                                        Свободы 2</h3>

                                                                                                </div>

                                                                                                <div class="elementor-price-table__price">

                                                                                                    <div class="elementor-price-table__allprice">
                                                                                                        <span class="elementor-price-table__integer-part">от 8 BYN</span>

                                                                                                        <span class="elementor-price-table__fractional-part"></span>
                                                                                                        <div class="elementor-price-table__period elementor-typo-excluded">
                                                                                                            / час
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="elementor-price-table__description">
                                                                                                        Приятная,
                                                                                                        продуктивная и
                                                                                                        творческая
                                                                                                        атмосфера среди
                                                                                                        круга активных,
                                                                                                        вдохновляющих
                                                                                                        единомышленников
                                                                                                        и друзей.
                                                                                                    </div>

                                                                                                </div>

                                                                                                <ul class="elementor-price-table__features-list">
                                                                                                    <li class="elementor-repeater-item-c4fd334">
                                                                                                        <div class="elementor-price-table__feature-inner">
								                                    <span>
										Маркерная доска и оборудование									</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="elementor-repeater-item-5b4809b">
                                                                                                        <div class="elementor-price-table__feature-inner">
								                                    <span>
										Горячие напитки и безлимитный WiFi									</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="elementor-repeater-item-0d3916d">
                                                                                                        <div class="elementor-price-table__feature-inner">
								                                    <span>
										Индивидуальная расстановка мебели									</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="elementor-repeater-item-553b0be">
                                                                                                        <div class="elementor-price-table__feature-inner">
								                                    <span>
										Платная парковка									</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="elementor-repeater-item-db3670a">
                                                                                                        <div class="elementor-price-table__feature-inner">
								                                    <span>
										Время работы с 8:00 до 22:00									</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                </ul>

                                                                                                <div class="elementor-price-table__footer">
                                                                                                    <a class="elementor-price-table__button elementor-button elementor-size-md"
                                                                                                       href="http://infoffice13.pf.by/home-1/svobody-2/">Перейти</a>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="elementor-price-table__ribbon elementor-ribbon-right">
                                                                                                <div class="elementor-price-table__ribbon-inner">
                                                                                                    BEST
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
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6cf06ab elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                         data-id="6cf06ab" data-element_type="section"
                                         data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-5bf541b elementor-column elementor-col-50 elementor-top-column"
                                                     data-id="5bf541b" data-element_type="column"
                                                     data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-ccbcbac elementor-widget elementor-widget-text-editor"
                                                                 data-id="ccbcbac" data-element_type="widget"
                                                                 data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <p>Наши достоинства</p></div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-321b3f0 elementor-widget elementor-widget-heading"
                                                                 data-id="321b3f0" data-element_type="widget"
                                                                 data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <span class="elementor-heading-title elementor-size-default">Интересные места рядом с нами</span>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-afa0dcb elementor-widget elementor-widget-text-editor"
                                                                 data-id="afa0dcb" data-element_type="widget"
                                                                 data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <p>Мы находимся в историческом центре города
                                                                            Минска, поэтому рядом с нами множество
                                                                            интересных мест для посещения, среди
                                                                            которых:</p></div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-16f071b elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                                                 data-id="16f071b" data-element_type="widget"
                                                                 data-widget_type="icon-list.default">
                                                                <div class="elementor-widget-container">
                                                                    <ul class="elementor-icon-list-items">
                                                                        <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                                                                            <span class="elementor-icon-list-text">Верхний город</span>
                                                                        </li>
                                                                        <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                                                                            <span class="elementor-icon-list-text">Минская ратуша - главное украшение площади Свободы</span>
                                                                        </li>
                                                                        <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                                                                            <span class="elementor-icon-list-text">Грузинское и Французское посольство</span>
                                                                        </li>
                                                                        <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                                                                            <span class="elementor-icon-list-text">Троицкое предместье</span>
                                                                        </li>
                                                                        <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                                                                            <span class="elementor-icon-list-text">Дворец Республики</span>
                                                                        </li>
                                                                        <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                                                                            <span class="elementor-icon-list-text">Большой театр оперы и балета</span>
                                                                        </li>
                                                                        <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                                                                            <span class="elementor-icon-list-text">Театр имени Янки Купалы</span>
                                                                        </li>
                                                                        <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                                                                            <span class="elementor-icon-list-text">Собор Пресвятой Девы Марии</span>
                                                                        </li>
                                                                        <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                                                                            <span class="elementor-icon-list-text">Кафедральный собор Сошествия Святого Духа</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-ea7fad1 elementor-align-left elementor-button-primary elementor-widget elementor-widget-button"
                                                                 data-id="ea7fad1" data-element_type="widget"
                                                                 data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a href="http://infoffice13.pf.by/contact-us/"
                                                                           class="elementor-button-link elementor-button elementor-size-lg"
                                                                           role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Оставить заявку</span>
		</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1df434f elementor-column elementor-col-50 elementor-top-column"
                                                     data-id="1df434f" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-83bbbe0 elementor-widget elementor-widget-image"
                                                                 data-id="83bbbe0" data-element_type="widget"
                                                                 data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="853" height="1280"
                                                                             src="/wp-content/themes/infoffice/assets/img/square-4.jpg"
                                                                             class="attachment-full size-full" alt=""
                                                                             srcset="/wp-content/themes/infoffice/assets/img/square-4.jpg 853w, /wp-content/themes/infoffice/assets/img/square-4-200x300.jpg 200w, /wp-content/themes/infoffice/assets/img/square-4-768x1152.jpg 768w, /wp-content/themes/infoffice/assets/img/square-4-682x1024.jpg 682w"
                                                                             sizes="(max-width: 853px) 100vw, 853px">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-dc4a715 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                         data-id="dc4a715" data-element_type="section"
                                         data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-10fdc0e elementor-column elementor-col-100 elementor-top-column"
                                                     data-id="10fdc0e" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-d94db97 elementor-widget elementor-widget-opal-image-gallery"
                                                                 data-id="d94db97" data-element_type="widget"
                                                                 data-settings="{&quot;gallery_animation&quot;:&quot;Shu&quot;}"
                                                                 data-widget_type="opal-image-gallery.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image-gallery">
                                                                        <div class="row grid" data-elementor-columns="3"
                                                                             data-elementor-columns-tablet="2"
                                                                             data-elementor-columns-mobile="1">
                                                                            <div class="column-item grid__item">
                                                                                <a class="grid__link"
                                                                                   data-elementor-lightbox-slideshow="d94db97"
                                                                                   href="/wp-content/themes/infoffice/assets/img/night-10.jpg">
                                                                                    <img class=""
                                                                                         src="/wp-content/themes/infoffice/assets/img/night-10.jpg"
                                                                                         alt="night (10)">
                                                                                    <div class="gallery-item-overlay">
                                                                                        <i class="fa fa-image"></i>
                                                                                        <span>View Gallery</span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="column-item grid__item">
                                                                                <a class="grid__link"
                                                                                   data-elementor-lightbox-slideshow="d94db97"
                                                                                   href="/wp-content/themes/infoffice/assets/img/night-8.jpg">
                                                                                    <img class=""
                                                                                         src="/wp-content/themes/infoffice/assets/img/night-8.jpg"
                                                                                         alt="night (8)">
                                                                                    <div class="gallery-item-overlay">
                                                                                        <i class="fa fa-image"></i>
                                                                                        <span>View Gallery</span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="column-item grid__item">
                                                                                <a class="grid__link"
                                                                                   data-elementor-lightbox-slideshow="d94db97"
                                                                                   href="/wp-content/themes/infoffice/assets/img/night-7.jpg">
                                                                                    <img class=""
                                                                                         src="/wp-content/themes/infoffice/assets/img/night-7.jpg"
                                                                                         alt="night (7)">
                                                                                    <div class="gallery-item-overlay">
                                                                                        <i class="fa fa-image"></i>
                                                                                        <span>View Gallery</span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="column-item grid__item">
                                                                                <a class="grid__link"
                                                                                   data-elementor-lightbox-slideshow="d94db97"
                                                                                   href="/wp-content/themes/infoffice/assets/img/night-6.jpg">
                                                                                    <img class=""
                                                                                         src="/wp-content/themes/infoffice/assets/img/night-6.jpg"
                                                                                         alt="night (6)">
                                                                                    <div class="gallery-item-overlay">
                                                                                        <i class="fa fa-image"></i>
                                                                                        <span>View Gallery</span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="column-item grid__item">
                                                                                <a class="grid__link"
                                                                                   data-elementor-lightbox-slideshow="d94db97"
                                                                                   href="/wp-content/themes/infoffice/assets/img/night-5.jpg">
                                                                                    <img class=""
                                                                                         src="/wp-content/themes/infoffice/assets/img/night-5.jpg"
                                                                                         alt="night (5)">
                                                                                    <div class="gallery-item-overlay">
                                                                                        <i class="fa fa-image"></i>
                                                                                        <span>View Gallery</span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="column-item grid__item">
                                                                                <a class="grid__link"
                                                                                   data-elementor-lightbox-slideshow="d94db97"
                                                                                   href="/wp-content/themes/infoffice/assets/img/night-3.jpg">
                                                                                    <img class=""
                                                                                         src="/wp-content/themes/infoffice/assets/img/night-3.jpg"
                                                                                         alt="night (3)">
                                                                                    <div class="gallery-item-overlay">
                                                                                        <i class="fa fa-image"></i>
                                                                                        <span>View Gallery</span>
                                                                                    </div>
                                                                                </a>
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
                                    <div class="elementor-element elementor-element-bf6c32a elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                         data-id="bf6c32a" data-element_type="section"
                                         data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-8066d59 elementor-column elementor-col-50 elementor-top-column"
                                                     data-id="8066d59" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-630336b elementor-widget elementor-widget-spacer"
                                                                 data-id="630336b" data-element_type="widget"
                                                                 data-widget_type="spacer.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-spacer">
                                                                        <div class="elementor-spacer-inner"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-94e6b0e elementor-widget elementor-widget-spacer"
                                                                 data-id="94e6b0e" data-element_type="widget"
                                                                 data-widget_type="spacer.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-spacer">
                                                                        <div class="elementor-spacer-inner"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-076027e elementor-view-stacked elementor-position-left elementor-shape-circle elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                 data-id="076027e" data-element_type="widget"
                                                                 data-widget_type="icon-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
            <span class="elementor-icon elementor-animation-">
            <i class="fa fa-map" aria-hidden="true"></i>
            </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span>Адрес</span>
                                                                            </h3>
                                                                            <p class="elementor-icon-box-description">
                                                                                г.Минск, ул. Революционная 13</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-18d4d11 elementor-column elementor-col-50 elementor-top-column"
                                                     data-id="18d4d11" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-3a0f3c4 elementor-widget elementor-widget-spacer"
                                                                 data-id="3a0f3c4" data-element_type="widget"
                                                                 data-widget_type="spacer.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-spacer">
                                                                        <div class="elementor-spacer-inner"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-71b49ea elementor-widget elementor-widget-spacer"
                                                                 data-id="71b49ea" data-element_type="widget"
                                                                 data-widget_type="spacer.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-spacer">
                                                                        <div class="elementor-spacer-inner"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-4b5af80 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                 data-id="4b5af80" data-element_type="widget"
                                                                 data-widget_type="icon-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
            <span class="elementor-icon elementor-animation-">
            <i class="fa fa-map" aria-hidden="true"></i>
            </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span>Адрес</span>
                                                                            </h3>
                                                                            <p class="elementor-icon-box-description">
                                                                                г.Минск, Пл. Свободы 2</p>
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
                                    <div class="elementor-element elementor-element-3836b76 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                         data-id="3836b76" data-element_type="section"
                                         data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-abb795d elementor-column elementor-col-50 elementor-top-column"
                                                     data-id="abb795d" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-2d62817 elementor-widget elementor-widget-heading"
                                                                 data-id="2d62817" data-element_type="widget"
                                                                 data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                        Форма обратной связи</h2></div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-1269f32 add_social_icons elementor-widget elementor-widget-heading"
                                                                 data-id="1269f32" data-element_type="widget"
                                                                 data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                        Оставьте свою заявку и мы с вами свяжемся</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3240281 elementor-column elementor-col-50 elementor-top-column"
                                                     data-id="3240281" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-d602a5e elementor-widget elementor-widget-heading"
                                                                 data-id="d602a5e" data-element_type="widget"
                                                                 data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-heading-title elementor-size-default">
                                                                        Сообщение:
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-881df8d elementor-mobile-align-center elementor-widget elementor-widget-opal-contactform7"
                                                                 data-id="881df8d" data-element_type="widget"
                                                                 data-widget_type="opal-contactform7.default">
                                                                <div class="elementor-widget-container">
                                                                    <div role="form" class="wpcf7" id="wpcf7-f6-p10-o1"
                                                                         lang="ru-RU" dir="ltr">
                                                                        <div class="screen-reader-response"></div>
                                                                        <?php
                                                                        if (isset($_GET['msg'])) {
                                                                            if ($_GET['msg'] == 'success')
                                                                                echo '<span>Сообщение успешно отправлено</span>';

                                                                            if ($_GET['msg'] == 'error')
                                                                                echo '<span><strong>Ошибка:<strong> Проверьте правильность введённых вами данных.</span>';
                                                                            // EEEEEEEEEERRRRRRRRRRRRRRRRRROOOOOOOOOOOORRRRRRRRRRRRR

                                                                        };

                                                                        echo '<style>textarea[name="comment"],textarea[name="message1"]{display:none}</style>';
                                                                        ?>

                                                                        <form action="<?php echo site_url() ?>/wp-content/themes/infoffice/send.php"
                                                                              method="POST">
                                                                            <label>Ваше имя (Обязательно)<br>
                                                                                <span class="wpcf7-form-control-wrap your-name"><input
                                                                                            type="text" name="name"
                                                                                            class="form-input"> </span></label>
                                                                            <label>Ваш телефон (Обязательно) <br>
                                                                                <span class="wpcf7-form-control-wrap your-phone"><input
                                                                                            type="tel" name="phone"
                                                                                            class="form-input"> </span></label>
                                                                            <label>Ваше сообщение<br>
                                                                                <span class="wpcf7-form-control-wrap your-message"><textarea
                                                                                            name="message" cols="40"
                                                                                            rows="3"
                                                                                            class="form-input"></textarea> </span></label>
                                                                            <textarea name="message1"></textarea>
                                                                            <textarea name="comment"></textarea>
                                                                            <input id="form-submit" type="submit">
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
                                            class="elementor-element elementor-element-39be8ce elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                            data-id="39be8ce" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-c3b2c30 elementor-column elementor-col-100 elementor-top-column"
                                                     data-id="c3b2c30" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-feb1100 elementor-widget elementor-widget-heading"
                                                                 data-id="feb1100" data-element_type="widget"
                                                                 data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-heading-title elementor-size-default">
                                                                        Или просто позвоните нам:
                                                                        <a href="tel:+375447776699">+375 44
                                                                            777-66-99</a></div>
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
                    </div>
        </main><!-- #main -->
    </div>
    <!-- #primary -->

<?php
get_footer();
