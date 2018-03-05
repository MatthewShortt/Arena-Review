$(document).ready(function () {
    console.log("ready!");
    var globalLat = -25.363;
    var globalLong = 131.044;
    $(".button-submit").click(function () {
        var test = $("#tester");
        test.html("Handler for .click() called.");
        hello();
    });

    function hello() {
        if (navigator.geolocation) {
            alert("hello1");
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            test.html("Geolocation not supported on this browser.");
        }
        console.log("bonjour...");
    }

    function showPosition(position) {
        alert("Success!!");
        $("#tester").html("Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude);
        if (position.coords.latitude > 43.2 && position.coords.latitude < 43.3 && position.coords.longitude < -79.8 && position.coords.longitude > -79.9) {
            alert("Hamilton!");
        }
    }

    function showError(error) {
        alert("Error Ocurres");
    }
});

/* ===========================
--- Results Map Configuration
=========================== */

//function is called from results_sample
function initMap() {

    //setting coordinates to center the map around (--> currently Whitby, Ontario)
    var center = {
        lat: 43.898,
        lng: -78.943
    };

    //initializing map inside div with ID '#map', setting zoom level and centering location
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11, //the higher the number, the more zoomed in you are
        center: center
    });


    var contentString = '<div class="infobox">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h1 id="firstHeading" class="firstHeading">Iroquois Park Sports Centre</h1>' +
        '<div id="bodyContent">' + '500 Victoria St W<br>' + '<a href="tel:905-668-7765">(905) 668-7765</a><br><br>' + '<a href="./individual_sample.html">Link: Individual Page</a>' + 
        '</div>' +
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    //setting coordinates for arena 1 (Iroquois Park Sports Centre)
    var coords_iroquois = {
        lat: 43.8620,
        lng: -78.9428,
        title: 'Iroquois'
    };
    //setting coordinates for arena 2 (McKinney Centre)
    var coords_mckinney = {
        lat: 43.9208,
        lng: -78.9553
    };
    //setting coordinates for arena 3 (Luther Vipond Memorial Arena)
    var coords_vipond = {
        lat: 43.9542,
        lng: -78.9558
    };
    //placing marker on map for arena 1 (Iroquois Park Sports Centre)
    var marker_iroquois = new google.maps.Marker({
        position: coords_iroquois,
        map: map
    });
    
    marker_iroquois.addListener('click', function () {
        infowindow.open(map, marker_iroquois);
    });
    //placing marker on map for arena 2 (McKinney Centre)
    var marker_mckinney = new google.maps.Marker({
        position: coords_mckinney,
        map: map
    });
    //placing marker on map for arena 3 (Luther Vipond Memorial Arena)
    var marker_vipond = new google.maps.Marker({
        position: coords_vipond,
        map: map
    });
}
