$(function(){

	/* Scrolling navegation site */
	var scrollLink = $('.scroll');

	scrollLink.click(function(e){
		e.preventDefault();
		$('body,html').animate({//this.hash - pega o valor do atributo id
			scrollTop:$(this.hash).offset().top
		},220)
	});

	/* Active link switching */
	$(window).scroll(function(){
		var scrollbarLocation = $(this).scrollTop();
		scrollLink.each(function(){
			var sectionOffset = $(this.hash).offset().top - 20;
			if(sectionOffset <= scrollbarLocation){
				$(this).parent().addClass('active');
				$(this).parent().siblings().removeClass('active');
			}
		});
	});

	/* Fixed top menu */
	$(window).scroll(function(){  
		if ($(this).scrollTop() > $('#header-top').height()) {
			$('#navbar_top').addClass("fixed-top");
			$('body').css('padding-top', $('.navbar').outerHeight() + 'px');
		}else{
			$('#navbar_top').removeClass("fixed-top");
			$('body').css('padding-top', '0');
		}   
	});

	/* Slick Blog */
	$('.wrap-notices').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [
		{
			breakpoint: 1048,
			settings: {
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 2,
				arrows:false,
				dots:true
			}
		},
		{
			breakpoint: 868,
			settings: {
				centerPadding: '40px',
				slidesToShow: 1,
				arrows:false,
				dots:true
			}
		}
		]
	});

	/* Adiciona class active */
	// $('.nav-item a[href^="#"]').click(function(e) {
	// 	e.preventDefault();
	// 	$('.nav-item a[href^="#"]').parent().removeClass('active');
	// 	$(this).parent().addClass('active');
	// });

	/* Botão que surge no rodapé p/ levar até o topo.*/
	$(window).scroll(function (e) {
		if ($(this).scrollTop() > 4500) {
			$('.topo').fadeIn();
		} else {
			$('.topo').fadeOut();
		}
	});

	$('.topo').click(function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 500)
	});

});//End