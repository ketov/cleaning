$(document).ready(function () {

    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 9,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(55.755826, 37.6172999), // New York
            scrollwheel: false,
            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            //styles: [{"featureType": "all", "elementType": "labels", "stylers": [{"visibility": "off"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"visibility": "on"}, {"color": "#f3f4f4"}]}, {"featureType": "landscape.man_made", "elementType": "geometry", "stylers": [{"weight": 0.9}, {"visibility": "off"}]}, {"featureType": "poi.park", "elementType": "geometry.fill", "stylers": [{"visibility": "on"}, {"color": "#83cead"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"visibility": "on"}, {"color": "#ffffff"}]}, {"featureType": "road", "elementType": "labels", "stylers": [{"visibility": "off"}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "on"}, {"color": "#fee379"}]}, {"featureType": "road.arterial", "elementType": "all", "stylers": [{"visibility": "on"}, {"color": "#fee379"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"visibility": "on"}, {"color": "#7fc8ed"}]}]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        /*var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            title: 'Snazzy!'
        });*/
    }

});