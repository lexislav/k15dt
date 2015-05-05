
// run foundation
jQuery(document).foundation();


//
jQuery(function () {

    //
    jQuery('[slick]').each(function () {
        var SlickWrapper = jQuery(this);
        var carousel = SlickWrapper.find('[carousel]');
        var oldActive = null;
        var nav = SlickWrapper.find('[carouselnav]');

        if (carousel) {
            carousel.slick({
                dots: false,
                infinite: true,
                //fade: true,
                //cssEase: 'linear',
                draggable: false,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true
            })
        }

        if (nav) {
            console.log("nav");
            var count = 0;
            var items = nav.find('[slick-to]');
            for (var i = 0; i < items.length; i++) {
                var item = jQuery(items[i]);

                if (nav.attr("slick-method") == "mouseenter") {
                    item.mouseenter(function (e) {

                        if (oldActive) {
                            oldActive.removeClass("active");
                        }

                        e.preventDefault();
                        carousel.slick('slickGoTo', jQuery(this).attr('slick-to'));
                        jQuery(this).addClass("active");
                        oldActive = jQuery(this);
                    });
                } else {
                    item.click(function (e) {

                        if (oldActive) {
                            oldActive.removeClass("active");
                        }

                        e.preventDefault();
                        carousel.slick('slickGoTo', jQuery(this).attr('slick-to'));
                        jQuery(this).addClass("active");
                        oldActive = jQuery(this);
                    });
                }


            }
        }

    });

    // mega menu

    var lastMegaTab = null;

    jQuery('[mega-open]').each(function () {
        var item = jQuery(this);
        var mega = jQuery("#mega");
        var tabName = item.attr("mega-open");
        var tab = jQuery(tabName);

        item.click(function (e) {
            e.preventDefault();

            if (lastMegaTab) {
                lastMegaTab.removeClass("is-active");
                jQuery('body').removeClass("scroll-lock");
            }

            mega.addClass("is-open");
            tab.addClass("is-active");
            jQuery('body').addClass("scroll-lock");
            lastMegaTab = tab;
        });

    });

    jQuery('[mega-close]').each(function () {
        var item = jQuery(this);
        var mega = jQuery("#mega");

        item.hover(
            function (e) {
                //e.preventDefault();
                if (lastMegaTab) {
                    lastMegaTab.removeClass("is-active");
                    jQuery('body').removeClass("scroll-lock");
                }

                mega.addClass("is-open");
                tab.addClass("is-active");
                jQuery('body').addClass("scroll-lock");
                lastMegaTab = tab;
            },
            function(e) {
                console.log("hover");
            }
        );

    });

    // end mega menu

    // resize Navbar

    var navbarPrimary = jQuery('#navbarPrimary');
    var navbarSecondary = jQuery('#navbarSecondary');
    var scrollDriver = jQuery(window);

    var currentTop = function () {
        return scrollDriver.scrollTop();
    }

    jQuery(window).scroll(function () {
        if (currentTop() > 40) {
            if (!navbarPrimary.hasClass("is-collapsed")) {
                navbarPrimary.addClass("is-collapsed");
            }
            if (!navbarSecondary.hasClass("is-hidden")) {
                navbarSecondary.addClass("is-hidden");
            }
        } else {
            navbarPrimary.removeClass("is-collapsed");
            navbarSecondary.removeClass("is-hidden");
        }
    });



// hack megamenu, prehazení DOM kuli Safari
    var submenucounter = 0;
    var tabs = Array();
    var menuroot = jQuery("#mega");

    function closeTabs() {
        for(var i=0; i<tabs.length; i++) {
            tabs[i].removeClass("is-opened");
        }
    }
    function closeMega() {
        closeTabs();
        menuroot.removeClass('is-opened');
    }

    jQuery(".megacleaned > .nav > .item > .item-submenu").each(function () {
        var idGen = "mega-id-"+ submenucounter;

        var sub = jQuery(this);
        var par = sub.parent();

        sub.attr("id",idGen);
        par.attr("open-mega",idGen);

        jQuery(".m-mega--sub").append(sub);
        tabs.push(sub);

        submenucounter++;

        par.hover(
            function() {
                console.log("openMega" + idGen );
                closeTabs();
                sub.addClass("is-opened");
                menuroot.addClass("is-opened");
            },
            function() {
            }
        );
    });

    menuroot.hover(
        function(){},
        function(){
            closeMega();
        }
    );

// pocita sloupce na mega
    jQuery(".m-mega .columns").each(function () {
        var el = jQuery(this);
        var cols = el.find("> .column");
        console.log(cols.length);
        el.attr("cols",cols.length);
    });





});


// block feed JS

var blogSlick = jQuery('.block-feed-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 2,
    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 960,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

// full size carousel

var blogSlick = jQuery('.full-carousel').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true
});


// script


jQuery('[collapsible]').each(function () {
    var el = jQuery(this);

    if (el.data('target') == "parent") {
        el.click(function () {
            el.parent().toggleClass("is-open");
        });
    } else if (el.data('target')) {
        el.click(function () {
            var tgt = jQuery(el.data('target'));
            tgt.toggleClass("is-open");
        });
    } else {
        el.click(function () {
            el.toggleClass("is-open");
        });
    }

});

// close section

jQuery('[close-section]').each(function () {
    var el = jQuery(this);
    el.click(function () {
        el.parent().css("display", "none");
    });
});


// chosen filters - select boxes


jQuery("#edit-field-zpravodaj-publikace-value-value-year, .chosen-yes .form-select").chosen({
    width: "95%",
    inherit_select_classes:true,
    create_option: true,
    persistent_create_option: true,
    create_option_text: 'add',
    disable_search_threshold: 40,
    //allow_single_deselect: true
});

