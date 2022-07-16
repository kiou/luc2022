$( document ).ready(function() {

    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(scroll >= 50){
            $(".navigation").addClass("fixed");
        }

        if(scroll <= 50){
            $(".navigation").removeClass("fixed");
        }
    });


    $('button:not(".btnform"), .linknav').on('click', function(e){
        e.preventDefault();
        
        var button = $(this);
        var url = button.attr('data-url');
        var nav = button.attr('data-nav');

        if(url != undefined){
            window.open(url, '_blank');
        }

        if(nav != undefined){
            $('html, body').animate({
                scrollTop: $(nav).offset().top
            }, 1500); 
        }
    });

});

