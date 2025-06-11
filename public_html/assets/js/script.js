$(document).ready(function (){
	//GERAL
		$('.sessao06Bg').zoom();

	//MENU RESPONSIVO
		funcHeader();
		var menu = 1;

		$('#menuMobile').click(function(){
			$("#menu").toggle();
			
			if(menu == 2){
				$('#menuMobile p').text('☰ MENU');
				menu = 1;
			}else{
				$('#menuMobile p').text('☰ MENU');
				menu = 2;
			}
		});

		$('#menu').click(function(){
			if($(window).width() < 767){
				$("#menu").toggle();
			}
		});

	//SCROLL
		$('a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			var id = $(this).attr('href'),
				targetOffset = $(id).offset().top - 150;
			$('html, body').animate({
				scrollTop: targetOffset
			}, 1000);
		});

	//COOKIES
		$('#cookiesMais').click(function(){
			$(".cookiesPopUp").show();
		});
		$('.cookiesPopUpFechar').click(function(){
			$(".cookiesPopUp").hide();
		});
		$('#cookiesAceito').click(function(){
			$(".cookies").hide();
			funcCreateCookie('politica', 'aceito', 1);
		});
		if(funcGetCookie('politica') == 'aceito'){
			$(".cookies").hide();
		}
});

$(window).scroll(function(){
	var scrollTop = $('html, body').scrollTop();
	
	//HEADER FIXO
		if($(window).width() > 767){
			if(scrollTop <= $('section').offset().top + 65){
				$('header').removeClass('header');
			}else{
				$('header').addClass('header');
			}
		}
});

$(window).resize(function(){
	//MENU RESPONSIVO
		funcHeader();
});


//MENU RESPONSIVO
	function funcHeader(){
		if($(window).width() < 767){
			$("#menu").hide();
		}else{
			$("#menu").show();
		}
	}


//COOKIES
	function funcCreateCookie(name, value, days){
	    var expires;
	    if (days) {
	        var date = new Date();
	        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
	        expires = "; expires=" + date.toGMTString();
	    }
	    else {
	        expires = "";
	    }
	    document.cookie = name + "=" + value + expires + "; path=/";
	}
	function funcGetCookie(c_name) {
	    if (document.cookie.length > 0) {
	        c_start = document.cookie.indexOf(c_name + "=");
	        if (c_start != -1) {
	            c_start = c_start + c_name.length + 1;
	            c_end = document.cookie.indexOf(";", c_start);
	            if (c_end == -1) {
	                c_end = document.cookie.length;
	            }
	            return unescape(document.cookie.substring(c_start, c_end));
	        }
	    }
	    return "";
	}


//ANIMACAO
	debounce = function (func, wait, immediate) {
		var timeout;
		return function () {
			var context = this,
				args = arguments;
			var later = function () {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	};
	(function () {
		var offset = $(window).height() * 9 / 10;

		function animeScroll() {
			var documentTop = $(document).scrollTop();
			$('.animacao01').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated bounceIn');
				}
			});
			$('.animacao02').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated bounceInLeft');
				}
			});
			$('.animacao03').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated bounceInRight');
				}
			});
			$('.animacao04').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated bounceInUp');
				}
			});
			$('.animacao05').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated bounceInDown');
				}
			});
			$('.animacao06').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated zoomIn');
				}
			});
			$('.animacao07').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated fadeIn');
				}
			});
			$('.animacao08').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated slideInLeft');
				}
			});
			$('.animacao09').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated slideInRight');
				}
			});
			$('.animacao10').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated slideInUp');
				}
			});
			$('.animacao11').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated slideInDown');
				}
			});
			$('.animacao12').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated pulse');
				}
			});
			$('.animacao13').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated shakeX');
				}
			});
			$('.animacao14').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated shakeY');
				}
			});
			$('.animacao15').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated flipInX');
				}
			});
			$('.animacao16').each(function () {
				var itemTop = $(this).offset().top;
				if (documentTop > itemTop - offset) {
					$(this).addClass('animated flipInY');
				}
			});
		}
		animeScroll();
		$(document).scroll(debounce(function () {
			animeScroll();
		}, 50));
	})()