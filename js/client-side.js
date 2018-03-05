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



/* ======================================================
--- Results Map Configuration
====================================================== */
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

    
    /* ===========================
    --- Arena 1 (Iroquois)
    =========================== */
    
    //setting coordinates for arena 1 (Iroquois Park Sports Centre)
    var coords_iroquois = {
        lat: 43.8620,
        lng: -78.9428,
        title: 'Iroquois'
    };
    //infobox for arena 1 -- contents filled
    var infobox_iroquois = '<div class="infobox">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h1 id="firstHeading" class="firstHeading">Iroquois Park Sports Centre</h1>' +
        '<div id="bodyContent">' + '500 Victoria St W<br>' + '<a href="tel:905-668-7765">(905) 668-7765</a><br><br>' + '<a href="./individual_sample.html">Link: Individual Page</a>' + 
        '</div>' +
        '</div>';
    //setting contents to an Google Maps infowindow container
    var infowindow_iroquois = new google.maps.InfoWindow({
        content: infobox_iroquois
    });
    //placing marker on map for arena 1 (Iroquois Park Sports Centre)
    var marker_iroquois = new google.maps.Marker({
        position: coords_iroquois,
        map: map
    });
    //add listener for click function to pop infowindow up
    marker_iroquois.addListener('click', function () {
        infowindow_iroquois.open(map, marker_iroquois);
    });

            
    /* ===========================
    --- Arena 2 (McKinney)
    =========================== */
    //setting coordinates for arena 2 (McKinney Centre)
    var coords_mckinney = {
        lat: 43.9208,
        lng: -78.9553
    };
    //infobox for arena 2 -- contents filled
    var infobox_mckinney = '<div class="infobox">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h1 id="firstHeading" class="firstHeading">McKinney Centre</h1>' +
        '<div id="bodyContent">' + '222 McKinney Dr<br>' + '<a href="tel:905-655-2203">(905) 655-2203</a><br><br>' + '<a href="./individual_sample.html">Link: Individual Page</a>' + 
        '</div>' +
        '</div>';
    //setting contents to an Google Maps infowindow container
    var infowindow_mckinney = new google.maps.InfoWindow({
        content: infobox_mckinney
    });
    //placing marker on map for arena 2 (McKinney Centre)
    var marker_mckinney = new google.maps.Marker({
        position: coords_mckinney,
        map: map
    });
    //add listener for click function to pop infowindow up
    marker_mckinney.addListener('click', function () {
        infowindow_mckinney.open(map, marker_mckinney);
    });
    
    
    /* ===========================
    --- Arena 3 (Vipond)
    =========================== */
    //setting coordinates for arena 3 (Luther Vipond Memorial Arena)
    var coords_vipond = {
        lat: 43.9542,
        lng: -78.9558
    };
    //infobox for arena 3 -- contents filled
    var infobox_vipond = '<div class="infobox">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h1 id="firstHeading" class="firstHeading">Luther Vipond Memorial Arena</h1>' +
        '<div id="bodyContent">' + '67 Winchester Rd<br>' + '<a href="tel:905-655-4571">(905) 655-4571</a><br><br>' + '<a href="./individual_sample.html">Link: Individual Page</a>' + 
        '</div>' +
        '</div>';
    //setting contents to an Google Maps infowindow container
    var infowindow_vipond = new google.maps.InfoWindow({
        content: infobox_vipond
    });
    //placing marker on map for arena 3 (Luther Vipond Memorial Arena)
    var marker_vipond = new google.maps.Marker({
        position: coords_vipond,
        map: map
    });
    //add listener for click function to pop infowindow up
    marker_vipond.addListener('click', function () {
        infowindow_vipond.open(map, marker_vipond);
    });
}

/* ======================================================
--- Individual Sample Map Configuration
====================================================== */
function initMapInd() {
    //setting coordinates to center the map around (--> center about individual object in this case)
    var center = {
        lat: 43.8620,
        lng: -78.9428
    };
    //initializing map inside div with ID '#map-ind', setting zoom level and centering location
    var map = new google.maps.Map(document.getElementById('map-ind'), {
        zoom: 16, //the higher the number, the more zoomed in you are (--> in this case we zoom in a bit because we have narrowed our search)
        center: center
    });    
    //placing marker on individual result map
    var marker = new google.maps.Marker({
        position: center,
        map: map
    });
}
