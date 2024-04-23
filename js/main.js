$(document).ready(function(){

	AOS.init();

	
	$(this).scroll(function(){
		var scroll_position = $(this).scrollTop();
		if (scroll_position > 70) {
			$('#top_header').css('top', '-50px')
			$('#second_header').css('top', '-50px')
		}else{
			$('#top_header').css('top', '0')
			$('#second_header').css('top', '0')
		}


		if (scroll_position > 450) {
			$('#to_top').css('display', 'flex').fadeIn()
		}else{
			$('#to_top').css('display', 'none')
		}
	})


	//top nav bar
	$('#toggler').click(function(){
		$('#second_right').toggleClass('show_nav')
	})

	//side nav 
	$('#nav_btn').click(function(){
		$('#dash_left').toggleClass('show_side_nav');

		if ($('#dash_left').css('width') === '180px') {
			$('#left_icon').css('display', 'flex')
			$('.span_right').css('display', 'flex')
			$('#nav_btn_icon').addClass('fa-arrow-left')
		}else{
			$('#left_icon').css('display', 'none')
			$('.span_right').css('display', 'none')
			$('#nav_btn_icon').addClass('fa-arrow-right')
		}
	})


	//sliders nivo slider
	$('#slider').nivoSlider()

	//owl carousel
	$('.owl-carousel').owlCarousel({
		autoplay:true,
		loop: true,
		responsive:{
		        0:{
		            items:1,
		        },
		        600:{
		            items:1,
		        },
		        1000:{
		            items:2,
		        }
		}
	})



	// all click function
	$('.my_card').click(function(){
		$('.my_card').css('border', 'none')
		$(this).css('border', '2px solid #7b4bcb')
	})


	//view payment details
	$('#view_payment').click(function(){
		$('#payment_modal').css('display', 'flex')
	})

	//close modal
	$('#close_modal').click(function(){
		$('#payment_modal').css('display', 'none')
	})


	//view notification
	$('#notification').click(function(){
		$('#notify_modal').toggleClass('show_notify_modal')
	})



	//login form for student to be done after registration from admin side


})