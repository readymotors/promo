// JavaScript Document

// cufon font replacement class/id
Cufon.replace('h1') ('h2') ('h3') ('h4') ('#header_top p') ('form#form label');
  
$(document).ready(function(){
$(".masked").mask("+7 (999) 999-9999");
//twitter feed
$(".twitter").tweet({
		username: "envato",
		count: 1,
		loading_text: "loading tweet...",
		join_text: "auto",
		auto_join_text_default: "",      
		auto_join_text_ed: "",                   
		auto_join_text_ing: "",               
		auto_join_text_reply: "",     
		auto_join_text_url: "", 
		modpath:'twitter/'
});

//Nivo slider
$('#slider').nivoSlider({
        effect:'random', // Specify sets like: 'fold,fade,sliceDown' or choose 'random' for mixed effects
        slices:15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed:500, // Slide transition speed
        pauseTime:5000, // How long each slide will show
		pauseOnHover:true,
       directionNav:true, // Next & Prev navigation
        directionNavHide:true, // Only show on hover
        controlNav:false // 1,2,3... navigation
	
});

//Fancybox for image gallery
$("a.simple_image").fancybox({
		'opacity'		: true,
		'overlayShow'	       : true,
		'overlayColor': '#000000',
		'overlayOpacity'     : 0.9,
		'titleShow':true,
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic'
});

//Slideshow for testimonial
$('.testimonial').cycle({
		fx: 'scrollUp', // choose your transition type, ex: fade, scrollUp, scrollLeft etc... 
   		speed: 1000,
		timeout: 7000,  // milliseconds between slide transitions (0 to disable auto advance)
		cleartypeNoBg:   true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides)
		pause:  1
});

//Contact form
$(function() {
		var v = $("#form").validate({
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					target: "#result",
					clearForm: true
				});
			}
		});
		
});	
$('#form #message').val('');

//Subscribe form
// $(function() {
// 		var v = $("#subform").validate({
// 			submitHandler: function(form) {
// 				$(form).ajaxSubmit({
// 					target: "#result_sub",
// 					clearForm: true
// 				});
// 			}
// 		});
		
// });	


//On Hover Event for gallery image
$('ul.gallery li img').hover(function(){
			$(this).animate({opacity: 0.5}, 300);
		}, function () {
			$(this).animate({opacity: 1}, 300);
});
	
}); // close document.ready

//rotate fot twitter
(function ($) {
    $.easy = {
       		
        rotate: function (_30) {
            var _31 = {
                selector: ".rotate",
                initPause: 0,
                pause: 7000,
                randomize: false,
                callback: function () {}
            };
            if (typeof _30 == "string") {
                _31.selector = _30;
            }
            var _30 = $.extend(_31, _30);
            return $(_30.selector).each(function () {
                var obj = $(this);
                var _32 = $(obj).children().length;
                var _33 = 0;

                function _34() {
                    var ran = Math.floor(Math.random() * _32) + 1;
                    return ran;
                };

                function _35() {
                    if (_30.randomize) {
                        var ran = _34();
                        while (ran == _33) {
                            ran = _34();
                        }
                        _33 = ran;
                    } else {
                        _33 = (_33 == _32) ? 1 : _33 + 1;
                    }
                    $(obj).children().hide();
                    $(obj).children(":nth-child(" + _33 + ")").fadeIn("slow", function () {
                        _30.callback();
                    });
                };

                function _36() {
                    _35();
                    setInterval(_35, _30.pause);
                };
                if (_32 > 1) {
                    setTimeout(_36, _30.initPause);
                }
            });
        },
    };
})(jQuery);

$(function(){	
	$.easy.rotate();
});
