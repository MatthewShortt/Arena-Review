downloadUrl('http://localhost:8888/Arena-Review/php/outline.php', function(data) {
  var xml = data.responseXML;
  var markers = xml.documentElement.getElementsByTagName('marker');
  Array.prototype.forEach.call(markers, function(markerElem) {
    //var id = markerElem.getAttribute('id');
    var name = markerElem.getAttribute('name');
    //var address = markerElem.getAttribute('address');
    //var type = markerElem.getAttribute('type');
    var point = new google.maps.LatLng(
        parseFloat(markerElem.getAttribute('lat')),
        parseFloat(markerElem.getAttribute('lng')));

    var infowincontent = document.createElement('div');
    var strong = document.createElement('strong');
    strong.textContent = name
    infowincontent.appendChild(strong);
    infowincontent.appendChild(document.createElement('br'));

    var text = document.createElement('text');
    text.textContent = address
    infowincontent.appendChild(text);
    var icon = customLabel[type] || {};
    var marker = new google.maps.Marker({
      map: map,
      position: point,
      label: icon.label
    });
      <script src="../js/client-side.js"></script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApMRmb_Fdi3xbnlz8K_P65LvNPbWXnRBc&callback=initMap"></script>
            