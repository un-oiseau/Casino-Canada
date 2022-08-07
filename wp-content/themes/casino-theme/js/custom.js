jQuery(document).ready(function($) {
    $(".navbar-toggler").on('click', function(event) {
        $('header nav').fadeToggle();
    });
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 350) {
            $("#to-top").fadeIn();
        } else {
            $("#to-top").fadeOut();
        }
    });
    $("#to-top").click(function () {
        $('html, body').animate({
            scrollTop: 0
        });
    })
    $('.toggller').click(function () {
        var c = $(this).closest('.collapse-box').find('.collapsed');
        $(this).toggleClass('open');
        c.slideToggle();
    });
    if ($(window).width() < 992) {
        $('.menu-item-has-children').prepend('<span onclick="toggleSub(this)"></span>');
    } else {
        $('.menu-item-has-children').mouseover(function () {
            $(this).find('.sub-menu').fadeIn();
        }).mouseleave(function () {
            $(this).find('.sub-menu').fadeOut();
        })
    }
    $("body").on('click', '[href*="#"]', function(e){
        if ($(this.hash).length != 0) {
            e.preventDefault();
            $(this).closest('li').addClass('active').siblings().removeClass('active');
            $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top }, 700);
        }
	})
    let toc = $('.wp-block-gutenberg-blocks-toc');
	let position;
	if (toc.length) {
		position = toc.position().top
	}
    $(window).resize(function() {
		if (toc.length) {
			position = toc.position().top
		}
        if ($(window).width() < 992) {
            $('.menu-item-has-children').prepend('<span onclick="toggleSub(this)"></span>');
        }
	})

    // content links js
    $(":header").each(function(){
        var t = $(this).text();
        if (t.length === 0) {
            t = "?";
        }

        text = $.trim(t);
        text = text.replace(/[^ A-Za-z\d]/g, '').toLowerCase();
        var baseId = text.replace(/\s+/g, "-"), suffix = "", count = 1;

        while (document.getElementById(baseId + suffix) !== null) {
            suffix = "_" + count++;
        }
        $(this).attr('id',baseId + suffix);

        $('.c-link').each(function() {
            if ($(this).text() == t) {
                $(this).attr('href','#'+baseId + suffix);
            }
        })
    })
})
function toggleSub(el) {
    jQuery(el).closest('.menu-item-has-children').find('.sub-menu').fadeToggle();
    jQuery(el).closest('.menu-item-has-children').toggleClass('opened');
}
