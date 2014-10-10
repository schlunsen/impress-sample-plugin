/**
 * Created by rasmusschlunsen on 10/10/14.
 */
function ipGoogleMapsLoadedCallback() {
    var mapOptions = {
        center: { lat: -34.397, lng: 150.644},
        zoom: 12
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
}


