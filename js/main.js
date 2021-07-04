$(window).on("load", (function () {
    TweenLite.to($(".loading .loading_text"), .4, {
        autoAlpha: 1,
        y: 0
    }), TweenLite.to($(".progress"), .5, {
        autoAlpha: 1,
        delay: .4
    }), TweenLite.to($(".bar_loading"), .7, {
        width: "100%",
        delay: 1
    }), TweenLite.to($(".loading"), .7, {
        y: -100,
        autoAlpha: 0,
        delay: 1.7
    }), TweenLite.to($("#loader"), 3, {
        y: -3e3,
        delay: 2,
        ease: "easeOutExpo"
    }), TweenLite.from($(".hero"), 1, {
        y: 100,
        delay: 2,
        ease: "easeOutExpo"
    }), setTimeout((function () {
        window.scrollTo(0, 0)
    }), 2e3), setTimeout((function () {
        $("#loader").remove()
    }), 3e3), $(document).bind("contextmenu", (function (e) {
        return !1
    }))
})), $(document).ready((function () {
    function e() {
        ! function () {
            if ($(".event_grid").length) {
                $(".event_grid").isotope({
                    layoutMode: "packery",
                    itemSelector: ".grid_item",
                    gutter: 0,
                    transitionDuration: "0.5s",
                    columnWidth: ".grid_item"
                })
            }
        }(), t(),
            function () {
                var e = $("#cursor");

                function t(t) {
                    function a() {
                        e.find(".cursor_label").text("")
                    }
                    TweenMax.to(e, 0, {
                        left: t.clientX - e.width() / 2,
                        top: t.clientY - e.height() / 2
                    }), "medium" == $(t.target).data("cursor-type") ? (e.removeClass().addClass("is-medium"), a()) : "big" == $(t.target).data("cursor-type") ? "btn-play" == $(t.target).data("cursor-text") ? (e.removeClass().addClass("is-play").addClass("is-big"), a()) : "btn-pause" == $(t.target).data("cursor-text") ? (e.removeClass().addClass("is-pause").addClass("is-big"), a()) : (e.removeClass().addClass("is-view").addClass("is-big"), e.find(".cursor_label").text($(t.target).data("cursor-text"))) : (e.removeClass(), a())
                }
                $("body, main, a").css("cursor", "none");
                var a = function () {
                    $(window).on("mousemove", t)
                };
                a(), $(window).resize(a)
            }(), $(window).resize(t)
    }

    function t() {

        if ($(".scroll_top").on("click", (function () {
            $("html, body").animate({
                scrollTop: 0
            })
        })), $(".scroll_down").on("click", (function () {
            $("html, body").animate({
                scrollTop: $(window).height()
            }, 1e3)
        })), $(".dark").length || ($(".hero.full_image").length ? $("header").addClass("bg-image-version") : $("header").removeClass("bg-image-version")), $("#wave").length) {
            var a = new SiriWave({
                container: document.getElementById("wave"),
                speed: .02,
                color: "#ffffff",
                frequency: 4,
                autostart: !0,
                amplitude: 0
            });
            setTimeout((function () {
                a.setAmplitude(1)
            }), 1e3)
        }
        $(".element-rotate").length && $(".element-rotate").textrotator({
            animation: "fade",
            speed: 2e3
        }), setTimeout((function () {
            new WOW({
                boxClass: "box-animate",
                animateClass: "animated",
                offset: 300,
                mobile: !0,
                live: !0,
                callback: function (e) { },
                scrollContainer: null
            }).init()
        }), 2e3)
    } ! function () {
        $(".menu_right").length && ($('<div class="plus" data-cursor-type="medium"><span data-cursor-type="medium"></span><span data-cursor-type="medium"></span></div>').insertAfter('.menu_right nav ul li.hassub a:not("ul li ul li a")'), $(".hassub .plus").on("click", (function () {
            $(this).toggleClass("active"), $(this).next("ul").slideToggle()
        })), $("header.my_menu .nav_icon, .background_overlay").on("click", (function () {
            $(".menu_right, header, .background_overlay").toggleClass("menu_right-active"), setTimeout((function () {
                $("header:not(.dark header)").toggleClass("active")
            }), 200)
        })));
        var e = 0;
        $(window).scroll((function (t) {
            var a = $(this).scrollTop();
            a > 500 ? ($("header").addClass("sticky"), $("header").addClass("hide"), $("header").addClass("addbg")) : ($("header").removeClass("sticky"), $("header").removeClass("hide"), $("header").removeClass("addbg")), a > e ? $("header").removeClass("animate") : ($("header").addClass("animate"), $("header").removeClass("hide")), e = a
        }))
    }(),
        function () {
            if ($(window).width() >= 1024) {
                $(document).on("mousemove touch", (function (e) {
                    $(".visible").each((function () {
                        ! function (e, t) {
                            var a = t.pageX,
                                i = t.pageY;
                            const o = $(e),
                                l = 20 * o.data("dist") || 120,
                                n = o.offset().left + o.width() / 2,
                                s = o.offset().top + o.height() / 2;
                            var r = -.45 * Math.floor(n - a),
                                d = -.45 * Math.floor(s - i);
                            c = o, u = a, m = i, Math.floor(Math.sqrt(Math.pow(u - (c.offset().left + c.width() / 2), 2) + Math.pow(m - (c.offset().top + c.height() / 2), 2))) < l ? (TweenMax.to(o, .5, {
                                y: d,
                                x: r
                            }), o.addClass("magnet")) : (TweenMax.to(o, .6, {
                                y: 0,
                                x: 0,
                                scale: 1
                            }), o.removeClass("magnet"));
                            var c, u, m
                        }(this, e)
                    }))
                }))
            }
        }(), e(), $("body").on("click", '[data-type="ajax-load"]', (function (t) {
            $(".page_overlay").addClass("from-bottom"), setTimeout((function () {
                $(".menu_right, header, .background_overlay").removeClass("menu_right-active")
            }), 2e3), $(".menu_right ul ul").slideUp(), $(".hassub .plus").removeClass("active"), $("header").removeClass("active");
            var a = $(this).attr("href");
            setTimeout((function () {
                var t;
                t = a, $.get(t, (function (t) {
                    var a = $("<main>" + t + "</main>"),
                        i = a.find("main").html(),
                        o = a.find("event_title").html();
                    $("head event_title").html(o), $("main").html(i), e(), window.scrollTo(0, 0), $(".page_overlay").addClass("from-bottom"), setTimeout((function () {
                        $(".page_overlay").addClass("from-bottom-end"), setTimeout((function () {
                            $(".page_overlay").removeClass("from-bottom"), $(".page_overlay").removeClass("from-bottom-end")
                        }), 800)
                    }), 500)
                })), history.pushState("", "new URL: " + a, a)
            }), 1e3)
        }))
}));
window.onload = function () {
    function e(e) {
        return e.stopPropagation ? e.stopPropagation() : window.event && (window.event.cancelBubble = !0), e.preventDefault(), !1
    }
    document.addEventListener("contextmenu", function (e) {
        e.preventDefault()
    }, !1), document.addEventListener("keydown", function (t) {
        t.ctrlKey && t.shiftKey && 73 == t.keyCode && e(t), t.ctrlKey && t.shiftKey && 74 == t.keyCode && e(t), 83 == t.keyCode && (navigator.platform.match("Mac") ? t.metaKey : t.ctrlKey) && e(t), t.ctrlKey && 85 == t.keyCode && e(t), 123 == event.keyCode && e(t)
    }, !1)
};