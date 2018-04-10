$(document).ready(function(){


	$("#portfolio-contant-active").mixItUp();


	$("#testimonial-slider").owlCarousel({
	    paginationSpeed : 2000,      
	    singleItem:true,
	    autoPlay: 3000,
	});




	$("#clients-logo").owlCarousel({
		autoPlay: 3000,
		items : 5,
		itemsDesktop : [1199,5],
		itemsDesktopSmall : [979,5],
	});

	$("#works-logo").owlCarousel({
		autoPlay: 3000,
		items : 5,
		itemsDesktop : [1199,5],
		itemsDesktopSmall : [979,5],
	});


	// google map
//		var map;
//		function initMap() {
//		  map = new google.maps.Map(document.getElementById('map'), {
//		    center: {lat: 54.660509, lng: 25.274903},
//		    zoom: 8
//		  });
//		}


	// Counter

	$('.counter').counterUp({
        delay: 10,
        time: 1000
    });


});

