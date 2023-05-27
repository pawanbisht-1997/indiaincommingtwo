$(".owl-carousel").owlCarousel({
    loop: !0,
    margin: 10,
    nav: !0,
    dots: !1,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1e3: {
            items: 1
        }
    }
});
var action = "click",
    speed = "500";
$(document).ready(function () {
    $("li.q").on(action, function () {
        $("li.q").removeClass("q_active")
        $(this).next().slideToggle(speed).siblings("li.a").slideUp()
        $("li.q").removeClass("q_active")
   
        $(this).addClass("q_active")
    })

})


    , $(document).ready(function () {
        $(".inclusion-tab").click(function () {
            $("#inclusion").addClass("active"),
                $("#exclusion").removeClass("active"),
                $(".inclusion").css("display", "block"),
                $(".exclusion").css("display", "none")
        })
            , $(".exclusion-tab").click(function () {
                $("#exclusion").addClass("active"),
                    $("#inclusion").removeClass("active"),
                    $(".inclusion").css("display", "none"),
                    $(".exclusion").css("display", "block")
            })

    });



