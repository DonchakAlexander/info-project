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
    <div class="wrap"><div data-elementor-type="wp-post" data-elementor-id="112" class="elementor elementor-112" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-bd20959 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="bd20959" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-1bf4eee elementor-column elementor-col-100 elementor-top-column" data-id="1bf4eee" data-element_type="column">
			<div class="elementor-column-wrap">
					<div class="elementor-widget-wrap">
						</div>
		</div>
						</div>
			</div>
		</section>
				<div class="elementor-element elementor-element-63c7271 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="63c7271" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-87082ae elementor-column elementor-col-50 elementor-top-column" data-id="87082ae" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-e548bd7 elementor-widget elementor-widget-opal-site-logo elementor-widget-image" data-id="e548bd7" data-element_type="widget" data-widget_type="opal-site-logo.default">
				<div class="elementor-widget-container">
			        <div class="elementor-image">
                                            <a href="http://infoffice13.pf.by/">
                                        <?php
			the_custom_logo(); ?>                                               </a>
                                                    </div>
        		</div>
				</div>
				<div class="elementor-element elementor-element-fa92118 elementor-nav-menu__align-center elementor-nav-menu-tablet__align-justify elementor-nav-menu--indicator-classic elementor-widget elementor-widget-opal-nav-menu" data-id="fa92118" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;}" data-widget_type="opal-nav-menu.default">
				<div class="elementor-widget-container">
			        <nav data-submenusminwidth="50" data-submenusmaxwidth="100" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none">
                        <?php

                        $rows = get_field('main_menu', 'options');
                        //print_r($rows);
                        if ($rows) : ?>

                        <ul id="menu-1-fa92118" class="elementor-nav-menu sm-vertical" data-smartmenus-id="15752826756537388">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-2998"><a href="http://infoffice13.pf.by/" aria-current="page" class="elementor-item  elementor-item-active">Коворкинг в центре Минск "Оффис 13"</a></li>

                            <?php foreach ($rows as $row) : ?>

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2896"><a href="<?= esc_url($row['link_menu']['url']); ?>" class="elementor-item elementor-nav-footer"><?= esc_html($row['menu_text']); ?></a></li>
                            <?php endforeach; ?>
</ul>
                    <?php endif; ?>
                    </nav>
        		</div>
				</div>
						</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-b21b164 elementor-column elementor-col-50 elementor-top-column" data-id="b21b164" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-97cbb06 elementor-widget elementor-widget-html" data-id="97cbb06" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
                    <!--<iframe src="https://yandex.by/map-widget/v1/-/CGS1YGnN" width="560" height="400" frameborder="1" allowfullscreen="true"></iframe>-->
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A900be24a4d984a6918087ba1258f8b1bfd64a2cf36a7c98c23a877a9b995864f&amp;source=constructor" width="610" height="300" frameborder="0"></iframe>
                </div>
				</div>

				<div class="elementor-element elementor-element-3ada016 elementor-widget elementor-widget-heading" data-id="3ada016" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<span class="elementor-heading-title elementor-size-default">Разработка - Webernetic</span>		</div>
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
    jQuery(document).ready(function(){
        jQuery('.add_social_icons ').after('<div class="social_icon_block">\n' +
            '    <a href="#" target="_blank"><img src="http://infoffice13.pf.by/wp-content/themes/co-workshop/assets/images/icons8-gmail-50.svg" alt=""></a>\n' +
            '    <a href="#" target="_blank"><img src="http://infoffice13.pf.by/wp-content/themes/co-workshop/assets/images/icons8-undefined-50.svg" alt=""></a>\n' +
            '    <a href="viber://add?number=+375447776699"" target="_blank"><img src="http://infoffice13.pf.by/wp-content/themes/co-workshop/assets/images/icons8-viber-50.svg" alt=""></a>\n' +
            '    <a href="https://wa.me/+375447776699" target="_blank"><img src="http://infoffice13.pf.by/wp-content/themes/co-workshop/assets/images/icons8-whatsapp-50.svg" alt=""></a>\n' +
            '</div>');
    });
</script>

</div>









<!--<nav id="menu-d68646f" class="elementor-nav-menu--canvas mp-menu mp-cover"><div class="mp-level" data-level="1">
        <?php
/*
        $rows = get_field('main_menu', 'options');
        //print_r($rows);
        if ($rows) : */?>


        <ul id="menu-2-d68646f" class="nav-menu--canvas">
            <?php /*foreach ($rows as $row) : */?>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1507"><a href="<?/*= esc_url($row['link_menu']['url']); */?>"><?/*= esc_html($row['menu_text']); */?></a></li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-has-children menu-item-2999"><a href="http://infoffice13.pf.by/" aria-current="page">Места<i class="fa fa-chevron-right trigger"></i></a>
                <div class="mp-level" data-level="2" style=""><a class="mp-back text-center" href="#"><i class="fa fa-arrow-left"></i></a><ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3006"><a href="http://infoffice13.pf.by/home-1/office-revolucionnaya-13/">Революционная 13</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3007"><a href="http://infoffice13.pf.by/home-1/office-svobody-2/">Свободы 2</a></li>
                    </ul></div>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3184"><a>Услуги<i class="fa fa-chevron-right trigger"></i></a>
                <div class="mp-level" data-level="2" style="transform: translate3d(-100%, 0px, 0px) translate3d(-40px, 0px, 0px);"><a class="mp-back text-center" href="#"><i class="fa fa-arrow-left"></i></a><ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2818"><a href="http://infoffice13.pf.by/french-club/">Французский разговорный клуб</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3183"><a href="http://infoffice13.pf.by/lets-talk/">Английский разговорный клуб</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3117"><a href="http://infoffice13.pf.by/arenda-ofisa-na-chas/">Аренда офиса на час</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3131"><a href="http://infoffice13.pf.by/arenda-konferenc-zala/">Аренда конференц-зала</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3142"><a href="http://infoffice13.pf.by/arenda-peregovornoy-komnaty/">Аренда переговорной комнаты</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3205"><a href="http://infoffice13.pf.by/arenda-zala-dlya-treninga/">Аренда зала для тренинга</a></li>
                    </ul></div>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2451"><a>Блог</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1507"><a href="http://infoffice13.pf.by/gallery/">Галерея</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3077"><a href="http://infoffice13.pf.by/partnery/">Партнеры</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1100"><a href="http://infoffice13.pf.by/contact-us/">Контакты</a></li>
        </ul></div></nav>-->

<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
