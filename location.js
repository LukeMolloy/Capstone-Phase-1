function success(position) {
    var long = position.coords.longitude - 0.005;
    var lat = position.coords.latitude - 0.005;
    
    var longtwo = position.coords.longitude + 0.008;
    var lattwo = position.coords.latitude + 0.008;
  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcontainer';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '600px';

  document.querySelector('article').appendChild(mapcanvas);

  var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  var safehaven = new google.maps.LatLng(lat, long);
    var safehaventwo = new google.maps.LatLng(lattwo, longtwo);
  
  var options = {
    zoom: 14,
    center: coords,
    mapTypeControl: false,
    navigationControlOptions: {
    	style: google.maps.NavigationControlStyle.SMALL
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("mapcontainer"), options);

  var marker = new google.maps.Marker({
      position: coords,
      map: map,
      title:"You are here!"
  });
  
  var dummymarker = new google.maps.Marker({
      position: safehaven,
      map: map,
      title:"Dummy safehaven!"
  });
  
    var dummymarkertwo = new google.maps.Marker({
      position: safehaventwo,
      map: map,
      title:"Dummy safehaven!"
  });
  
  
}

if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success);
} else {
  error('The map cannot be shown');
}