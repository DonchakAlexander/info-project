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

            <div id="page-title-bar" class="page-title-bar">
                <div class="container">
                    <div class="wrap w-100 d-flex align-items-center">
                        <div class="page-title-bar-inner d-flex align-self-center flex-column w-100 text-center">
                            <div class="breadcrumb mb-0 w-100 order-last">
                                <!-- Breadcrumb NavXT 6.3.0 -->
                                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                                                                      title="Перейти к infoffice."
                                                                                      href="http://infoffice13.pf.by/"
                                                                                      class="home"><span
                                                property="name">infoffice</span></a><meta property="position"
                                                                                          content="1"></span> &gt; <span
                                        class="post post-page current-item">Контакты</span></div>
                            <div class="page-header  mb-2 w-100 order-first">
                                <h1 class="page-title">Контакты</h1></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-content-contain">
                <div id="content" class="site-content">
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


                                    <div class="elementor-element elementor-element-bf6c32a elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                         data-id="bf6c32a" data-element_type="section"
                                         data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <?php
                                                    $adres = get_field('positions');
                                                if ($adres) :
                                                    foreach ($adres as $row) :
                                                        ?>


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
                                                                                        <span><?= $row['title'] ?></span>
                                                                                    </h3>
                                                                                    <p class="elementor-icon-box-description">
                                                                                        <?= $row['adres'] ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <? endforeach;
                                                endif; ?>
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
