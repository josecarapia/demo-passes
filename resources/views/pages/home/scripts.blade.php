
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="{{ asset('js/site/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/site/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/site/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/site/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('js/site/jquery.localScroll.min.js') }}"></script>
    <script src="{{ asset('js/site/jquery.nav.js') }}"></script>
    <script src="{{ asset('js/site/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/site/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/site/jquery.parallax.js') }}"></script>
    <script src="{{ asset('js/site/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('js/site/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/site/matchMedia.js') }}"></script>
    <script src="{{ asset('js/site/script.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="{{ asset('js/site/wow.js') }}"></script>
    <script src="{{ asset('js/site/easing.js') }}"></script>
    
    <script>
    	$(document).ready(function() {
		//"use strict";
        $('#banner').parallax("50%", 0.5, true);
    		$('#feature').parallax("50%", 0.5, true);
    		$('#subscription').parallax("50%", 0.5, true);
    		$('#review').parallax("50%", 0.5, true);
    		$('#download').parallax("50%", 0.5, true);
        $('#footer').parallax("50%", 0.5, true);
    	});

    </script>

    <script>
    // --------Google map---------------
		 var map;
		 function initialize() {  
		  // Create an array of styles.
		  var styles = [
			{
			  stylers: [
				{ hue: "#0AABE1" },
				{ saturation: 0 }
			  ]
			},
			{
			  featureType: 'water',
			  stylers: [
			   { visibility: "on" },
			   { color: "#9a9efd" },
			   { weight: 2.2 },
			   { gamma: 2.54 }
			  ] 
			},
			{
			  featureType: "road",
			  elementType: "geometry",
			  stylers: [
				{ lightness: 100 },
				{ visibility: "simplified" }
			  ]
			},{
			  featureType: "road",
			  elementType: "labels",
			  stylers: [
				{ visibility: "off" }
			  ]
			}
		  ];

		  // Create a new StyledMapType object, passing it the array of styles,
		  // as well as the name to be displayed on the map type control.
		  var styledMap = new google.maps.StyledMapType(styles,
			{name: "Styled Map"});

		  // Create a map object, and include the MapTypeId to add
		  // to the map type control.
		  var mcAllen = new google.maps.LatLng(26.2034, -98.2300);
		  var mapOptions = {
			zoom: 13,
			center: mcAllen,
			mapTypeControlOptions: {
			  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
			},
			scrollwheel: false,
		  };
		  var map = new google.maps.Map(document.getElementById('map'),
			mapOptions);
		  

		  //Associate the styled map with the MapTypeId and set it to display.
		  map.mapTypes.set('map_style', styledMap);
		  map.setMapTypeId('map_style');

		  // To add the marker to the map, use the 'map' property
		  var image = '{{ asset("images/site/map_icon_3.png") }}';
		  var marker = new google.maps.Marker({
			  position: mcAllen,
			  map: map,
			  title:"Operation BOT",
			  icon: image
		  });

		 }

    </script>