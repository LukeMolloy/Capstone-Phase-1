function success() {
  
  
  var geocoder = new google.maps.Geocoder();
  var street = document.getElementById("add").innerHTML;
  var city = document.getElementById("city").innerHTML;
  var address = city.concat(street);


geocoder.geocode( { 'address': address}, function(results, status) {

  if (status == google.maps.GeocoderStatus.OK) {
    var latitude = results[0].geometry.location.lat();
    var longitude = results[0].geometry.location.lng();

  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcontainer';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '600px';

  document.querySelector('article').appendChild(mapcanvas);

  //var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  
  
  //var options = {
  //  zoom: 15,
    //center: coords,
    //mapTypeControl: false,
    //navigationControlOptions: {
    //	style: google.maps.NavigationControlStyle.SMALL
    //},
    //mapTypeId: google.maps.MapTypeId.ROADMAP
  //};
  
  var map = new google.maps.Map(document.getElementById('article');
  var coords = new google.maps.LatLng(latitude, longitude);
  zoom: 4,
  center: coords;
  

  
  var dummymarker = new google.maps.Marker({
      position: coords,
      map: map,
     // title:"Dummy safehaven!"
  });
  }
});
}


//if (navigator.geolocation) {
//  navigator.geolocation.getCurrentPosition(success);
//} else {
  //error('The map cannot be shown');
//}


/**var geocoder = new google.maps.Geocoder();
var address = "28 lorikeet drive thornlands";

document.getElementById("add").innerHTML

geocoder.geocode( { 'address': address}, function(results, status) {

  if (status == google.maps.GeocoderStatus.OK) {
    var latitude = results[0].geometry.location.lat();
    var longitude = results[0].geometry.location.lng();
    alert(latitude);
  } 
}); **/