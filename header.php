<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package infoffice
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<div id="wptime-plugin-preloader"></div>
	<div class="opal-wrapper">
		<div class="mp-pusher" id="mp-pusher"><div id="page" class="site scroller">
			<header id="masthead" class="site-header">
				<div class="site-header">
					<div data-elementor-type="wp-post" data-elementor-id="322" class="elementor elementor-322" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
								<div class="elementor-element elementor-element-fcfa777 elementor-section-stretched elementor-section-content-middle elementor-section-full_width osf-sticky-active elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="fcfa777" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;}" style="left: 0px;">
									<div class="elementor-container elementor-column-gap-no">
										<div class="elementor-row">
											<div class="elementor-element elementor-element-e0cf961 elementor-column elementor-col-33 elementor-top-column" data-id="e0cf961" data-element_type="column">
												<div class="elementor-column-wrap  elementor-element-populated">
													<div class="elementor-widget-wrap">
														<div class="elementor-element elementor-element-dd0f900 elementor-widget elementor-widget-opal-site-logo elementor-widget-image" data-id="dd0f900" data-element_type="widget" data-widget_type="opal-site-logo.default">
															<div class="elementor-widget-container">
																<div class="elementor-image">
																	<a href="http://infoffice13.pf.by/">
																		<?php
																		the_custom_logo(); ?>                                    </a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-336cd12 elementor-column elementor-col-33 elementor-top-column" data-id="336cd12" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<div class="elementor-element elementor-element-d68646f elementor-nav-menu--indicator-angle elementor-nav-menu--dropdown-mobile elementor-menu-toggle__align-right elementor-menu-toggle-mobile__align-right elementor-nav-menu__align-center elementor-nav-menu-tablet__align-left elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-opal-nav-menu" data-id="d68646f" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="opal-nav-menu.default">
																<div class="elementor-widget-container">
																	<nav class="elementor-nav-menu--mobile-enable elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none" data-submenusminwidth="270" data-submenusmaxwidth="500">


																		<?php 

																		$rows = get_field('main_menu', 'options');
																		if($rows) : ?>

																			<ul class="elementor-nav-menu">
																				<?php

																				foreach($rows as $row) : ?>

																					<li><a class="elementor-item" href="<?= esc_url($row['link_menu']) ?>">  <?php echo $row['menu_text']; if ($row['sub_menu'] != '0') : ?>
																					<span class="sub-arrow"></span></a>
																						<ul class="sub-menu elementor-nav-menu--dropdown sm-nowrap">
																								<li><a class="elementor-sub-item" href="<?= esc_url($row['submenu_link']) ?>"> <?php echo $row['submenu_text'] . '</a></li>'; ?>
																							<?php 
																							echo '</ul>';
																						else : 
																							echo '<span></span></a>'; endif; ?>


																						</li>

																					<?php endforeach; // end foreach rows
																					echo '</ul>'; 
																				endif; ?>


<!-- 																		<ul class="sub-menu elementor-nav-menu--dropdown sm-nowrap">
	<?php 
	foreach ($rows as $row) : ?>
		<li><a class="elementor-sub-item" href="<?= $row['submenu_link']?>"> <?php $row['submenu_text'] . '</a></li>';
	endforeach ?>
</ul> -->

</nav>

<div class="elementor-menu-toggle" data-target="#menu-d68646f">
	<i class="eicon" aria-hidden="true"></i>
	<span class="menu-toggle-title"></span>
</div>

</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-a75275f elementor-column elementor-col-33 elementor-top-column" data-id="a75275f" data-element_type="column">
	<div class="elementor-column-wrap  elementor-element-populated">
		<div class="elementor-widget-wrap">
			<div class="elementor-element elementor-element-4d701e3 elementor-align-right elementor-hidden-phone elementor-button-primary elementor-widget elementor-widget-button" data-id="4d701e3" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
						<a href="http://infoffice13.pf.by/booking/" class="elementor-button-link elementor-button elementor-size-lg" role="button">
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
</div>
</div>
</div>
</header><!-- #masthead -->

<div id="content" class="site-content">
