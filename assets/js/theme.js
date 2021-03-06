'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

(function ($) {
    var OpalThemeBacktop = function () {
        function OpalThemeBacktop() {
            _classCallCheck(this, OpalThemeBacktop);

            this.initBacktotop();
        }

        _createClass(OpalThemeBacktop, [{
            key: 'initBacktotop',
            value: function initBacktotop() {
                jQuery(window).scroll(function () {
                    if (jQuery(this).scrollTop() > 200) {
                        jQuery('.scrollup').fadeIn().addClass('active');
                    } else {
                        jQuery('.scrollup').fadeOut().removeClass('active');
                    }
                });
                jQuery('.scrollup').on('click', function () {
                    jQuery("html, body").animate({ scrollTop: 0 }, 600);
                    return false;
                });
            }
        }]);

        return OpalThemeBacktop;
    }();

    new OpalThemeBacktop();
    jQuery('html').removeClass('no-js').addClass('js yes-js js_active');

    var OpalThemeFooter = function () {
        function OpalThemeFooter() {
            _classCallCheck(this, OpalThemeFooter);

            this.init();
        }

        _createClass(OpalThemeFooter, [{
            key: 'init',
            value: function init() {
                var _this = this;

                if (jQuery('body').hasClass('footer-fixed')) {
                    this.$footer = jQuery('#colophon');
                    this.$content = jQuery('#page');
                    this.$footer.css({
                        position: 'fixed',
                        left: 0,
                        bottom: 0,
                        zIndex: 0
                    });

                    this.setup();

                    $(window).resize(function () {
                        _this.setup();
                    });
                }
            }
        }, {
            key: 'setup',
            value: function setup() {
                this.$content.css({
                    marginBottom: this.getFooterHeight()
                });
            }
        }, {
            key: 'getFooterHeight',
            value: function getFooterHeight() {
                return this.$footer.outerHeight();
            }
        }]);

        return OpalThemeFooter;
    }();

    new OpalThemeFooter();

    var OpalTheme_Main_Menu = function () {
        function OpalTheme_Main_Menu() {
            _classCallCheck(this, OpalTheme_Main_Menu);

            this.initSubmenuHover();
            this.initLogoInMenu();
            this.responsiveMenu();
        }

        _createClass(OpalTheme_Main_Menu, [{
            key: 'initLogoInMenu',
            value: function initLogoInMenu() {
                var $menu = jQuery(".navigation-has-logo");
                if ($menu.length > 0) {
                    var $item = $menu.find('.mainmenu-container > ul > li'),
                        length = $item.length,
                        half = Math.ceil(length / 2),
                        left = 0,
                        right = 0;
                    $item.each(function (index, element) {
                        if (index < half) {
                            left += $(element).outerWidth();
                        } else {
                            right += $(element).outerWidth();
                        }
                    });
                    var widthLogo = $menu.find('.site-branding').outerWidth();
                    var redundancy = right - left;
                    var marginRight = widthLogo;
                    $menu.find('.mainmenu-container > ul').css('marginRight', -redundancy);
                    $($item.get(half - 1)).css('marginRight', marginRight);
                    $menu.addClass('menu-calculated');
                }
            }
        }, {
            key: 'initSubmenuHover',
            value: function initSubmenuHover() {
                var _this2 = this;

                var $item = jQuery('li.megamenu-item');
                if ($item.hasClass('aligned-fullwidth')) {
                    var $parent = $item.closest('.custom-header > div , .site-header-desktop > div'),
                        Width = $parent.outerWidth();
                    $item.find('.submenu-fullwidth').css({
                        //width: Width
                    });
                }
                jQuery(document).on('hover', 'li.megamenu-item', function (event) {
                    event.preventDefault();
                    var $item = $(event.currentTarget);
                    var level = $item.data('level');
                    if (!$item.hasClass('aligned-fullwidth')) {
                        if (level <= 0) {
                            _this2.setPositionLv1($item);
                        } else {
                            _this2.setPositionLvN($item);
                        }
                    } else {
                        if ($item.closest('.otf-vertical-menu').length > 0) {
                            _this2.setWidthVertical($item);
                        } else {
                            var _$parent = $item.closest('.container > div , .container-fluid > div'),

                            //Width          = $parent.outerWidth(),
                            position = $item.offset(),

                            //parentPosition = $parent.offset(),
                            left = -position.left;
                            $item.find('.submenu-fullwidth').css({
                                //width: Width,
                                left: left
                            });
                        }
                    }
                });
                jQuery('.sub-menu-inner .menu-item-has-children').hover(function (event) {
                    var $item = $(event.currentTarget);
                    var level = $item.data('level');
                    if (!$item.hasClass('aligned-fullwidth')) {
                        _this2.setPositionLvN($item);
                    }
                }, function (event) {
                    $(event.currentTarget).children('.sub-menu').css({
                        left: '',
                        right: ''
                    });
                });
            }
        }, {
            key: 'setPositionLv1',
            value: function setPositionLv1($item) {
                var sub = $item.children('.sub-menu'),
                    offset = $item.offset(),
                    screen_width = $(window).width(),
                    sub_width = sub.outerWidth();
                var align_delta = offset.left + sub_width - screen_width;
                if (align_delta > 0) {
                    sub.css({ left: align_delta * -1 });
                }
            }
        }, {
            key: 'setPositionLvN',
            value: function setPositionLvN($item) {
                var sub = $item.children('.sub-menu'),
                    offset = $item.offset(),
                    width = $item.outerWidth(),
                    screen_width = $(window).width(),
                    sub_width = sub.outerWidth();
                var align_delta = offset.left + width + sub_width - screen_width;
                if (align_delta > 0) {
                    sub.css({ left: 'auto', right: '100%' });
                }
            }
        }, {
            key: 'setWidthVertical',
            value: function setWidthVertical($item) {
                var sub = $item.children('.sub-menu'),
                    width = $(window).width() - ($item.offset().left + $item.outerWidth());
                sub.css('width', width);
            }
        }, {
            key: 'responsiveMenu',
            value: function responsiveMenu() {
                jQuery(window).resize(function () {
                    var $menu = jQuery('.subcat-hoziontal');
                    $menu.each(function (index, element) {
                        var width = $(element).outerWidth() - 20;
                        var $items = $(element).find(' > li');
                        var itemWidth = 0;
                        var count = $items.length;
                        var clonehtml = '';
                        $items.each(function (a, b) {
                            itemWidth = itemWidth + $(b).outerWidth();
                            $(b).show();
                            if (itemWidth > width) {
                                clonehtml = clonehtml + '<li>' + $(b).clone().html() + '</li>';
                                $(b).hide();
                            }
                            if (clonehtml == '') {
                                $(element).find('.toggle-subcat').remove();
                                $(element).find('.subcat-child').remove();
                                $(element).removeClass('has-child');
                            }
                            if (clonehtml != '' & ! --count) {
                                $(element).find('.toggle-subcat').remove();
                                $(element).find('.subcat-child').remove();
                                $(element).removeClass('has-child');
                                $(element).append('<span class="toggle-subcat closed icon icon-559"></span><ul class="subcat-child">' + clonehtml + '</ul>');
                                $(element).addClass('has-child');
                                $('.subcat-child').hide();
                            }
                        });
                    });
                });
                jQuery('.subcat-child').hide();
                jQuery("body").on("click", '.toggle-subcat.closed', function () {
                    $(this).parent().find('ul.subcat-child').first().show(400);
                    $(this).parent().addClass('open');
                    $(this).removeClass('closed').removeClass('icon-559').addClass('opened').addClass('icon-558');
                });
                jQuery("body").on("click", '.toggle-subcat.opened', function () {
                    $(this).parent().find('ul.subcat-child').first().hide(400);
                    $(this).parent().addClass('close').removeClass('open');
                    $(this).removeClass('opened').removeClass('icon-558').addClass('closed').addClass('icon-559');
                });
            }
        }]);

        return OpalTheme_Main_Menu;
    }();

    new OpalTheme_Main_Menu();

    var OpalThemeOwlCarousel = function OpalThemeOwlCarousel() {
        _classCallCheck(this, OpalThemeOwlCarousel);
    };

    new OpalThemeOwlCarousel();

    var OpalThemePortfolio = function () {
        function OpalThemePortfolio() {
            _classCallCheck(this, OpalThemePortfolio);

            if (jQuery('body.tax-portfolio_cat .isotope-grid.default').length > 0) {
                this.init();
            }
        }

        _createClass(OpalThemePortfolio, [{
            key: 'init',
            value: function init() {
                var $container = jQuery('body.tax-portfolio_cat .isotope-grid.default');
                var currentIsotope = $container.isotope({ filter: '*' });

                currentIsotope.imagesLoaded(function () {
                    currentIsotope.isotope('layout');
                });
            }
        }]);

        return OpalThemePortfolio;
    }();

    new OpalThemePortfolio();

    function opalAddQuantityBoxes() {
        var $quantitySelector = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '.qty';


        var $quantityBoxes = void 0;

        $quantityBoxes = jQuery('div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)').find($quantitySelector);

        if ($quantityBoxes && 'date' != $quantityBoxes.prop('type')) {

            // Add plus and minus boxes
            $quantityBoxes.parent().addClass('buttons_added').prepend('<input type="button" value="-" class="minus" />');
            $quantityBoxes.addClass('input-text').after('<input type="button" value="+" class="plus" />');

            // Target quantity inputs on product pages
            jQuery('input' + $quantitySelector + ':not(.product-quantity input' + $quantitySelector + ')').each(function () {
                var $min = parseFloat(jQuery(this).attr('min'));

                if ($min && $min > 0 && parseFloat(jQuery(this).val()) < $min) {
                    $(this).val($min);
                }
            });

            jQuery('.plus, .minus').unbind('click');

            jQuery('.plus, .minus').on('click', function () {

                // Get values
                var $quantityBox = $(this).parent().find($quantitySelector),
                    $currentQuantity = parseFloat($quantityBox.val()),
                    $maxQuantity = parseFloat($quantityBox.attr('max')),
                    $minQuantity = parseFloat($quantityBox.attr('min')),
                    $step = $quantityBox.attr('step');

                // Fallback default values
                if (!$currentQuantity || '' === $currentQuantity || 'NaN' === $currentQuantity) {
                    $currentQuantity = 0;
                }
                if ('' === $maxQuantity || 'NaN' === $maxQuantity) {
                    $maxQuantity = '';
                }

                if ('' === $minQuantity || 'NaN' === $minQuantity) {
                    $minQuantity = 0;
                }
                if ('any' === $step || '' === $step || undefined === $step || 'NaN' === parseFloat($step)) {
                    $step = 1;
                }

                // Change the value
                if ($(this).is('.plus')) {

                    if ($maxQuantity && ($maxQuantity == $currentQuantity || $currentQuantity > $maxQuantity)) {
                        $quantityBox.val($maxQuantity);
                    } else {
                        $quantityBox.val($currentQuantity + parseFloat($step));
                    }
                } else {

                    if ($minQuantity && ($minQuantity == $currentQuantity || $currentQuantity < $minQuantity)) {
                        $quantityBox.val($minQuantity);
                    } else if ($currentQuantity > 0) {
                        $quantityBox.val($currentQuantity - parseFloat($step));
                    }
                }

                // Trigger change event
                $quantityBox.trigger('change');
            });
        }
    }


    var $form = $('.js-form-send');

    $(document).on('submit', '.js-form-send', function (e) {

        e.preventDefault();

        var form = $(e.target);

        var url = form.attr('action');

        $.ajax({

            type: 'POST',

            url: url,

            data: form.serialize(),

            success: function success(data) {

                console.log(response);
            }

        });

    });











    $('.menu-item-has-children').hover(function () {
        var _self = $(this);
        _self.find('.sub-menu').fadeIn(300);

    }, function(){
        var _self = $(this);
        _self.find('.sub-menu').fadeOut(800);
    });



    $('.elementor-element-a75275f').hover(function () {
        var _self = $(this);
        _self.find('.sub-menu-contact').fadeIn(300);
    }, function(){
        var _self = $(this);
        _self.find('.sub-menu-contact').fadeOut(800);
    });




    $(".owl-carousel").on("initialized.owl.carousel", () => {
        setTimeout(() => {
            $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
            $("section").show();
        }, 200);
    });

    const $owlCarousel = $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false

    });

    $owlCarousel.on("changed.owl.carousel", e => {
        $(".owl-slide-animated").removeClass("is-transitioned");

        const $currentOwlItem = $(".owl-item").eq(e.item.index);
        $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");
    });


    $('div.elementor-tabs-wrapper').on('click', 'div:not(.elementor-active)', function() {
        $(this)
            .addClass('elementor-active').siblings().removeClass('elementor-active')
            .closest('div.elementor-tabs').find('div.elementor-tab-content').css('display', 'none').removeClass('elementor-active').eq($(this).index()).css('display', 'block').addClass('elementor-active');
    });

    $('div.owl-nav').hide();




    $('.owl-carousel').hover(function(){
        var _self = $(this);

        $('div.owl-nav').fadeIn(300);


    }, function () {

        $('div.owl-nav').fadeOut(300);

    });



    $('.for-equal-heights').equalHeights();



    jQuery(document).ready(function ($) {
        opalAddQuantityBoxes();



    });
    jQuery(document).ajaxComplete(function ($) {
        opalAddQuantityBoxes();
    });

    var OpalThemeSmoothMenu = function () {
        function OpalThemeSmoothMenu() {
            var _this3 = this;

            _classCallCheck(this, OpalThemeSmoothMenu);

/*            poemeJS.smoothCallback = function (selector) {
                jQuery('.opal-smooth-menu a[href^="' + selector + '"]').trigger('click');
            };*/

            jQuery('body').on('click', '.opal-smooth-menu a[href^="#"]', function (e) {
                e.preventDefault();
                _this3.menuActiveClass(e);
                var target = e.currentTarget.hash;
                var $target = $(target);
                if ($target.length > 0) {
                    jQuery('html, body').animate({
                        'scrollTop': $target.offset().top - _this3.getOffset()
                    }, 600, 'swing');
                }
            });
        }

        _createClass(OpalThemeSmoothMenu, [{
            key: 'menuActiveClass',
            value: function menuActiveClass(e) {
                var $this = $(e.currentTarget);
                jQuery('.opal-smooth-menu').find('li.menu-item').removeClass('current-menu-item current_page_item');
                var selector = $this.closest('li').attr('id');
                jQuery('.opal-smooth-menu [id="' + selector + '"]').addClass('current-menu-item');
            }
        }, {
            key: 'getOffset',
            value: function getOffset() {
                var offset = 0;
                var $adminBar = jQuery('#wpadminbar');
                var $stickyHeader = jQuery('#opal-header-sticky');

                if ($adminBar.length > 0) {
                    offset += $adminBar.outerHeight();
                }

                if ($stickyHeader.length > 0) {
                    offset += $stickyHeader.outerHeight();
                }

                return offset;
            }
        }]);

        return OpalThemeSmoothMenu;
    }();

    new OpalThemeSmoothMenu();

    var OpalThemeStickyHeader = function () {
        function OpalThemeStickyHeader() {
            _classCallCheck(this, OpalThemeStickyHeader);

            this.sticky();
        }

        _createClass(OpalThemeStickyHeader, [{
            key: 'sticky',
            value: function sticky() {
                var $scope = $('#opal-header-content');
                if ($scope.length > 0) {
                    var section_offset = $scope.offset().top,
                        section_top = $('#wpadminbar').height(),
                        section_height = $scope.outerHeight();
                    if ($(window).width() < 601) {
                        section_top = 0;
                    }
                    $(window).resize(function () {
                        $scope.removeClass('sticky-show');
                        $scope.css({
                            top: 0
                        });
                        var $h_animate = $scope.next('.h-animate');
                        $h_animate.remove();
                        if (!$scope.hasClass('sticky-show')) {
                            section_offset = $scope.offset().top;
                        }
                        section_top = $('#wpadminbar').height();
                        if ($(window).width() < 601) {
                            section_top = 0;
                        }
                    });
                    $(window).scroll(function () {
                        if ($(window).width() > 768) {
                            if ($(window).scrollTop() >= section_offset + section_height - section_top) {
                                if (!$scope.hasClass('sticky-show')) {
                                    $scope.addClass('sticky-show');
                                    $scope.css({
                                        top: section_top
                                    });
                                    $("<div class='h-animate'></div>").insertAfter($scope).css({
                                        height: section_height
                                    });
                                }
                            } else {
                                $scope.removeClass('sticky-show');
                                $scope.css({
                                    top: 0
                                });
                                var $h_animate = $scope.next('.h-animate');
                                $h_animate.remove();
                            }
                        }
                    });
                }
            }
        }]);

        return OpalThemeStickyHeader;
    }();

    jQuery(document).ready(function ($) {
        new OpalThemeStickyHeader();
    });

    var OpalThemeToogle = function () {
        function OpalThemeToogle() {
            _classCallCheck(this, OpalThemeToogle);

            this.setupHeader();
            this.toggleCollapse();
            this.ToggleCanvasFilter();
            this.PositionAccount();
            this.toggleCollapseSearchFooter();
        }

        _createClass(OpalThemeToogle, [{
            key: 'setupHeader',
            value: function setupHeader() {
                jQuery('#masthead .search-button[data-search-toggle]').each(function (index, element) {
                    var $button = $(element);
                    if ($button.hasClass('top-to-bottom') || $button.hasClass('popup')) {
                        var $searchform = $($button.data('target'));
                        $searchform.data('height', $searchform.outerHeight()).prependTo('#page').addClass('loaded');
                    } else if ($button.hasClass('bottom-to-top')) {
                        var _$searchform = $($button.data('target'));
                        _$searchform.data('height', _$searchform.outerHeight()).prependTo('#page');
                    }
                });
            }
        }, {
            key: 'toggleCollapse',
            value: function toggleCollapse() {
                var _this4 = this;

                jQuery('body').on('click', '[data-search-toggle="toggle"]', function (e) {
                    e.preventDefault();
                    var $button = $(e.currentTarget);
                    var $searchForm = $($button.data('target'));
                    var $buttonClose = $searchForm.find('[data-search-toggle="close"]');
                    $buttonClose.on('click', function (e) {
                        $button.removeClass('active');
                        $searchForm.removeClass('active');
                        jQuery('body').removeClass('over-hidden');
                        if ($buttonClose.closest('.bottom-to-top')) {
                            $searchForm.css('top', '100%');
                        }
                    });
                    if ($button.is('.top-to-bottom, .bottom-to-top, .popup')) {
                        $searchForm.toggleClass('active');
                        $button.toggleClass('active');
                    }
                    if ($button.hasClass('top-to-bottom')) {
                        _this4.setupTopToBottom($button, $searchForm);
                    } else if ($button.hasClass('bottom-to-top')) {
                        _this4.setupBottomToTop($button, $searchForm);
                    } else if ($button.hasClass('popup')) {
                        _this4.setupFullScreen($button, $searchForm);
                    } else {
                        $button.toggleClass('active');
                        $button.siblings($searchForm).toggleClass('active');
                        $(document.createElement('div')).addClass('dropdown-backdrop').insertAfter($button.siblings($searchForm)).on('click', function () {
                            jQuery(this).siblings().removeClass("active");
                            jQuery(this).remove();
                        });
                    }
                });
            }
        }, {
            key: 'toggleCollapseSearchFooter',
            value: function toggleCollapseSearchFooter() {
                jQuery('body').on('click', '.search-footer', function (e) {
                    e.preventDefault();
                    $('.handheld-footer-bar .search').toggleClass('active');
                });
            }
        }, {
            key: 'checkScroll',
            value: function checkScroll($object) {
                var element = $object.get(0);
                return element.scrollHeight > $(window).height();
            }
        }, {
            key: 'setupFullScreen',
            value: function setupFullScreen($button, $searchForm) {
                var $body = jQuery('body');
                if (this.checkScroll($body)) {
                    $body.toggleClass('over-hidden');
                }
            }
        }, {
            key: 'setupTopToBottom',
            value: function setupTopToBottom($button, $searchForm) {
                jQuery('body').animate({ scrollTop: 0 }, 600);
            }
        }, {
            key: 'setupBottomToTop',
            value: function setupBottomToTop($button, $searchForm) {
                var $header = jQuery('.site-header'),
                    $sticky = jQuery('.sticky-show'),
                    stickyHeight = $sticky.outerHeight(),
                    adminbarHeight = jQuery('#wpadminbar').height(),
                    position = $header.height() + adminbarHeight;
                if (stickyHeight > 1) {
                    position = stickyHeight + adminbarHeight;
                }
                if ($searchForm.hasClass('active')) {
                    $searchForm.css('top', position);
                } else {
                    $searchForm.css('top', '100%');
                }
                var $body = $('body');
                if (this.checkScroll($body)) {
                    $body.toggleClass('over-hidden');
                }
            }
        }, {
            key: 'ToggleCanvasFilter',
            value: function ToggleCanvasFilter() {
                jQuery('body').on('click', '.opal-overlay-filter , .filter-close', function () {
                    jQuery('body').removeClass('opal-canvas-filter-open');
                    jQuery('.filter-toggle').removeClass('active');
                }).on('click', '.filter-toggle', function (event) {
                    var $body = jQuery('body');
                    var filterToggle = $(event.currentTarget);
                    if ($body.hasClass('opal-canvas-filter-open')) {
                        filterToggle.removeClass('active');
                        $body.removeClass('opal-canvas-filter-open');
                        $body.find('.opal-canvas-filter.top').slideToggle(1000);
                    } else {
                        filterToggle.addClass('active');
                        $body.addClass('opal-canvas-filter-open');
                        $body.find('.opal-canvas-filter.top').slideToggle(1000);
                    }
                });
            }
        }, {
            key: 'PositionAccount',
            value: function PositionAccount() {
                jQuery('body').on('hover', '.site-header-account', function () {
                    var $drop = jQuery(this).find('.account-dropdown');
                    if ($drop.length > 0) {
                        var position = $drop.offset().top - $(window).scrollTop() + $drop.outerHeight(true),
                            top = position - jQuery(window).height();
                        if (top > 0) {
                            $drop.css({
                                'transform': 'translateY( -' + top + 'px)'
                            });
                        }
                    }
                });
            }
        }]);

        return OpalThemeToogle;
    }();

    $(document).ready(function ($) {

        new OpalThemeToogle();
    });



    
})(jQuery);
//# sourceMappingURL=theme.js.map

