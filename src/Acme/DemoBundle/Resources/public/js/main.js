$(document).ready(function(){




	/*  Hamburger Menu & Icon  */
	$('.hamburger').on('click', function(e){
		
		e.preventDefault();
		$(this).toggleClass('opned');
		$('header nav').toggleClass('active');
		
	});




	/*  Advanced search form & Icon  */
	$('#advanced_search_btn').on("click", function(e){
		e.preventDefault();

		var ads_box =$('.advanced_search');
		
		if(!ads_box.hasClass('advanced_displayed')){

			$(this).addClass('active');
			ads_box.stop().fadeIn(200).addClass('advanced_displayed');

		}else{

			$(this).removeClass('active');
			ads_box.stop().fadeOut(200).removeClass('advanced_displayed');

		}

	});

	$('#load-flats').click(function (e) {
		var roomobj = {'price': 111, 'caption': 'caption sfdlkjfslkfdjsldkf sldkfjs dlfk','description': 'sdlfkjsdlfk sdlfks dlfskd', 'size': 445, 'img': 'property_1.jpg'};

		var content = Twig.render(roomjs.html, {room: roomobj})
		$('.properties_list').html(content);


	});




});