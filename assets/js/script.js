
 $(document).ready(function() {
    /* ================================================
       SIDE BAR AND RESPONSIVE WHEN TOGGLE MENU BAR
    ================================================ */
    $("#menuIcon").on('click', function() {
        if ($(".fa-bars").hasClass('fa-bars')) {
            $(".side-bar").toggleClass('toggle');
            $(".content").toggleClass('toggle');
        }
    });

    // function toggleClassBasedOnWindowSize() {
    //     if (window.innerWidth < 900) {
    //         $(".side-bar").addClass('toggle');
    //         $(".content").addClass('toggle');
    //     } else {
    //         $(".side-bar").removeClass('toggle');
    //         $(".content").removeClass('toggle');
    //     }
    // }

    // toggleClassBasedOnWindowSize();

    // $(window).on('resize', toggleClassBasedOnWindowSize);


    /*=====================================
            ACTIVE INDICATOR
    ======================================*/
    var currentPageUrl = window.location.href;

    for (var i = 0; i < $('.menu .nav-item').length; i++) {
        var link = $('.menu .nav-item a')[i];

        if (link.href === currentPageUrl) {
            link.parentElement.classList.add('active');

        }
    }

    /*=====================================
            ASSISTANCE BUTTON INDICATOR
    ======================================*/
        $('.btnClass').on('click', function() {
            $('.btnClass').removeClass('actives');
            $(this).addClass('actives');
        });
    
});


