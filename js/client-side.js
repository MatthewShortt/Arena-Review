$(document).ready(function () {
    var data = "<?php echo $name?>";
    console.log(data);
    console.log("ihihihi!!!!");
    console.log("ready!!!!!!");
    var globalLat = -25.363;
    var globalLong = 131.044;

    var href = document.location.href;
    var lastPathSegment = href.substr(href.lastIndexOf('/') + 1); //to find which html page we are on
    console.log(lastPathSegment); //for testing purposes
    
    
    //event listener for click on button with class '.button-fill-coords' which triggers function
    //that call geolocation grabber
    $(".button-fill-coords").click(function () {
        $(".button-fill-coords").html("Grabbing Location...");
        getPosition();//call getPosition function
    });

    //getPosition uses geolocation and can return many values, of which we used longitude and latitude
    function getPosition() {
        if (navigator.geolocation) {
            $(".button-fill-coords").html("Fetching Values...");
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            test.html("Geolocation not supported on this browser.");
        }
//        console.log("bonjour..."); //fpr testing purposes
    }

    //display the coordinates or the city 
    function showPosition(position) {
        $(".button-fill-coords").html("Success...");
        //alert("Success, longitude and latitude of your present location obtained.");
        //$("#tester").html("Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude);
        
        //if else depending on which page we are on, filling input values based on present location
        if (lastPathSegment == 'submission.html') {
            $("#submit-lat").val(position.coords.latitude);
            $("#submit-long").val(position.coords.longitude);
            $(".button-fill-coords").html("Present Location used for Lat/Long");
        } else if (lastPathSegment == 'search.php') {
//            if (position.coords.latitude > 43.2 && position.coords.latitude < 43.3 && position.coords.longitude < -79.8 && position.coords.longitude > -79.9) {
//                $("#loc-city").val('Hamilton, Ontario');
//            }
//            else{
//                $("#loc-city").val('Outside of Hamilton');
//            }
            $("#input-lat").val(position.coords.latitude);
            //$("#input-lat").html(position.coords.latitude);
            $("#input-lon").val(position.coords.longitude);
            //$("#input-lon").html(position.coords.latitude);
            $(".button-fill-coords").html("Present Location used for Lat/Lon");
        }

        
    }

    function showError(error) {
        alert("Error Ocurred");
    }
});



/* ======================================================
--- Results Map Configuration
====================================================== */
//function is called from results_sample
function initMap() {
//    var data = "<?php echo $name?>";
//    console.log(data);
    console.log("WOOOOOO");
    //setting coordinates to center the map around (--> currently Whitby, Ontario)
    var center = {
        lat: 41.4925,
        lng: -99.9018
    };

    //initializing map inside div with ID '#map', setting zoom level and centering location
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4, //the higher the number, the more zoomed in you are
        center: center
    });


//     downloadUrl('http://localhost:8888/Arena-Review/php/results.php', function (data) {
//
//        var xml = data.responseXML;
//        
//        var markers = xml.documentElement.getElementsByTagName('marker');
////        Array.prototype.forEach.call(markers, function (markerElem) {
////            //var id = markerElem.getAttribute('id');
////            var name = markerElem.getAttribute('name');
////            //var address = markerElem.getAttribute('address');
////            //var type = markerElem.getAttribute('type');
////            var point = new google.maps.LatLng(
////                parseFloat(markerElem.getAttribute('lat')),
////                parseFloat(markerElem.getAttribute('lng')));
////
////            var infowincontent = document.createElement('div');
////            var strong = document.createElement('strong');
////            strong.textContent = name
////            infowincontent.appendChild(strong);
////            infowincontent.appendChild(document.createElement('br'));
////
////            var text = document.createElement('text');
////            text.textContent = address
////            infowincontent.appendChild(text);
////            var icon = customLabel[type] || {};
////            var marker = new google.maps.Marker({
////                map: map,
////                position: point,
////                label: icon.label
////            });
////        });
//    });
//    
    
//http://localhost:8888/Arena-Review/php/results.xml
downloadUrl('http://localhost:8888/Arena-Review/php/results.xml', function (data) {
    var xml = data.responseXML;
    var markers = xml.documentElement.getElementsByTagName('marker');
    var count = 1;
    Array.prototype.forEach.call(markers, function (markerElem) {
        var id = markerElem.getAttribute('id');
        var name = markerElem.getAttribute('name');
        var address = markerElem.getAttribute('address');
        var phone = markerElem.getAttribute('phone');
        var point = new google.maps.LatLng(
            parseFloat(markerElem.getAttribute('lat')),
            parseFloat(markerElem.getAttribute('lon')));

        var infowincontent = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = name
        infowincontent.appendChild(strong);
        infowincontent.appendChild(document.createElement('br'));

        var text = document.createElement('text');
        text.textContent = address
        infowincontent.appendChild(text);
        
        var label_num = count.toString();
        
        var marker = new google.maps.Marker({
            map: map,
            position: point,
            label: label_num
        }); 
        var markerInfoWindow = new google.maps.InfoWindow({
            content: infowincontent
        });   
        count+=1;
        marker.addListener('click', function () {
            markerInfoWindow.open(map, marker);
        });
    });
});

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
//    /* ===========================
//    --- Arena 1 (Iroquois)
//    =========================== */
//
//    //setting coordinates for arena 1 (Iroquois Park Sports Centre)
//    var coords_iroquois = {
//        lat: 43.8620,
//        lng: -78.9428,
//        title: 'Iroquois'
//    };
//    //infobox for arena 1 -- contents filled
//    var infobox_iroquois = '<div class="infobox">' +
//        '<div id="siteNotice">' +
//        '</div>' +
//        '<h1 id="firstHeading" class="firstHeading">Iroquois Park Sports Centre</h1>' +
//        '<div id="bodyContent">' + '500 Victoria St W<br>' + '<a href="tel:905-668-7765">(905) 668-7765</a><br><br>' + '<a href="./individual_sample.html">Link: Individual Page</a>' +
//        '</div>' +
//        '</div>';
//    //setting contents to an Google Maps infowindow container
//    var infowindow_iroquois = new google.maps.InfoWindow({
//        content: infobox_iroquois
//    });
//    //placing marker on map for arena 1 (Iroquois Park Sports Centre)
//    var marker_iroquois = new google.maps.Marker({
//        position: coords_iroquois,
//        map: map
//    });
//    //add listener for click function to pop infowindow up
//    marker_iroquois.addListener('click', function () {
//        infowindow_iroquois.open(map, marker_iroquois);
//    });


//    /* ===========================
//    --- Arena 2 (McKinney)
//    =========================== */
//    //setting coordinates for arena 2 (McKinney Centre)
//    var coords_mckinney = {
//        lat: 43.9208,
//        lng: -78.9553
//    };
//    //infobox for arena 2 -- contents filled
//    var infobox_mckinney = '<div class="infobox">' +
//        '<div id="siteNotice">' +
//        '</div>' +
//        '<h1 id="firstHeading" class="firstHeading">McKinney Centre</h1>' +
//        '<div id="bodyContent">' + '222 McKinney Dr<br>' + '<a href="tel:905-655-2203">(905) 655-2203</a><br><br>' + '<a href="./individual_sample.html">Link: Individual Page</a>' +
//        '</div>' +
//        '</div>';
//    //setting contents to an Google Maps infowindow container
//    var infowindow_mckinney = new google.maps.InfoWindow({
//        content: infobox_mckinney
//    });
//    //placing marker on map for arena 2 (McKinney Centre)
//    var marker_mckinney = new google.maps.Marker({
//        position: coords_mckinney,
//        map: map
//    });
//    //add listener for click function to pop infowindow up
//    marker_mckinney.addListener('click', function () {
//        infowindow_mckinney.open(map, marker_mckinney);
//    });


//    /* ===========================
//    --- Arena 3 (Vipond)
//    =========================== */
//    //setting coordinates for arena 3 (Luther Vipond Memorial Arena)
//    var coords_vipond = {
//        lat: 43.9542,
//        lng: -78.9558
//    };
//    //infobox for arena 3 -- contents filled
//    var infobox_vipond = '<div class="infobox">' +
//        '<div id="siteNotice">' +
//        '</div>' +
//        '<h1 id="firstHeading" class="firstHeading">Luther Vipond Memorial Arena</h1>' +
//        '<div id="bodyContent">' + '67 Winchester Rd<br>' + '<a href="tel:905-655-4571">(905) 655-4571</a><br><br>' + '<a href="./individual_sample.html">Link: Individual Page</a>' +
//        '</div>' +
//        '</div>';
//    //setting contents to an Google Maps infowindow container
//    var infowindow_vipond = new google.maps.InfoWindow({
//        content: infobox_vipond
//    });
//    //placing marker on map for arena 3 (Luther Vipond Memorial Arena)
//    var marker_vipond = new google.maps.Marker({
//        position: coords_vipond,
//        map: map
//    });
//    //add listener for click function to pop infowindow up
//    marker_vipond.addListener('click', function () {
//        infowindow_vipond.open(map, marker_vipond);
//    });
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

function downloadUrl(url,callback) {
 var request = window.ActiveXObject ?
     new ActiveXObject('Microsoft.XMLHTTP') :
     new XMLHttpRequest;

 request.onreadystatechange = function() {
   if (request.readyState == 4) {
     request.onreadystatechange = doNothing;
     callback(request, request.status);
   }
 };

 request.open('GET', url, true);
 request.send(null);
}

 function doNothing() {console.log("doing nothing...");}
