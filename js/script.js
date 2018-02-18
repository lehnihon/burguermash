( function( $ ) {
	if(typeof $('#header').offset() ==='undefined'){
		var offset = $('#headerb').offset().top;
    	var $meuMenu = $('#headerb'); // guardar o elemento na memoria para melhorar performance
        $(document).on('scroll', function () {
            if (offset <= $(window).scrollTop()-100) {
                $meuMenu.addClass('fixar');
                $meuMenu.find('a').css('color','white');
            } else {
                $meuMenu.find('a').css('color','black');
                $meuMenu.removeClass('fixar animated fadeInDown');
            }

        });
	}else{
		var offset = $('#header').offset().top;
    	var $meuMenu = $('#header'); // guardar o elemento na memoria para melhorar performance
        $(document).on('scroll', function () {
            console.log(offset);
            if (offset <= $(window).scrollTop()-100) {
                $meuMenu.addClass('fixar');
            } else {
                $meuMenu.removeClass('fixar animated fadeInDown');
            }

        });
	}

    $(window).on('load', function() { // makes sure the whole site is loaded 
        $('#status').fadeOut(); // will first fade out the loading animation 
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(400).queue(function (next) { 
            $(this).css({'overflow':'visible'}); next(); 
        });

    })
} )( jQuery );