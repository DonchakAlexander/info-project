<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package infoffice
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">


    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-87082ae elementor-column elementor-col-50 elementor-top-column"
                 data-id="87082ae" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-e548bd7 elementor-widget elementor-widget-opal-site-logo elementor-widget-image"
                             data-id="e548bd7" data-element_type="widget" data-widget_type="opal-site-logo.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-image">
                                    <a href="http://infoffice13.pf.by/">
                                        <?php
                                        the_custom_logo(); ?>                                               </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-fa92118 elementor-nav-menu__align-center elementor-nav-menu-tablet__align-justify elementor-nav-menu--indicator-classic elementor-widget elementor-widget-opal-nav-menu"
                             data-id="fa92118" data-element_type="widget"
                             data-settings="{&quot;layout&quot;:&quot;vertical&quot;}"
                             data-widget_type="opal-nav-menu.default">
                            <div class="elementor-widget-container">
                                <nav data-submenusminwidth="50" data-submenusmaxwidth="100"
                                     class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none">
                                    <ul id="menu-1-fa92118" class="elementor-nav-menu sm-vertical"
                                        data-smartmenus-id="15752826756537388">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-2998">
                                            <a href="http://infoffice13.pf.by/" aria-current="page"
                                               class="elementor-item  elementor-item-active">Места</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2896">
                                            <a href="http://infoffice13.pf.by/contact-us/" class="elementor-item">Контакты</a>
                                        </li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2898">
                                            <a href="http://infoffice13.pf.by/#" class="elementor-item">Услуги</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2899">
                                            <a href="http://infoffice13.pf.by/blog/" class="elementor-item">Блог</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3078">
                                            <a href="http://infoffice13.pf.by/partnery/"
                                               class="elementor-item">Партнеры</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2901">
                                            <a href="http://infoffice13.pf.by/gallery/"
                                               class="elementor-item">Галерея</a></li>
                                    </ul>
                                </nav>
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
    </div></div></footer>


<!-- #colophon -->
<script>
    jQuery(document).ready(function () {
        jQuery('.add_social_icons ').after('<div class="social_icon_block">\n' +
            '    <a href="#" target="_blank"><img src="http://infoffice13.pf.by/wp-content/themes/co-workshop/assets/images/icons8-gmail-50.svg" alt=""></a>\n' +
            '    <a href="#" target="_blank"><img src="http://infoffice13.pf.by/wp-content/themes/co-workshop/assets/images/icons8-undefined-50.svg" alt=""></a>\n' +
            '    <a href="#" target="_blank"><img src="http://infoffice13.pf.by/wp-content/themes/co-workshop/assets/images/icons8-viber-50.svg" alt=""></a>\n' +
            '    <a href="#" target="_blank"><img src="http://infoffice13.pf.by/wp-content/themes/co-workshop/assets/images/icons8-whatsapp-50.svg" alt=""></a>\n' +
            '</div>');
    });
</script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
