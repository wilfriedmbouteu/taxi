<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="">
	<title>{{$girl->enseigne}}, {{$girl->speciality}} </title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	 <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="/ico/favicon.ico">
        <!-- CSS Global -->
        <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">       
        <link href="/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">    
        <link href="/plugins/OwlCarousel2/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">   
        <link href="/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css">       
        <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="/css/media.css" rel="stylesheet" type="text/css"> 
     
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="/css/main2.css">

        <link rel="stylesheet" href="css/colors/main.css" id="colors">
        
</head>
<body>
<div class="container">
  <h2 class="heading" style="margin-top: 20px; margin-bottom: 15px; text-align: center;">Welcome to our Garage</h2>
  
  <div class="row">

  <div class="col-md-6">
  <div>{{$girl->name}}</div>  
  
<p></p>
<div > <input type="text" name="address1" id="addressme" value="{{ $girl->address1 }}" disabled></div>
 
 
  <p> Address :{{$girl->address1}}</p>
  <p>Speciality : {{$girl->speciality}}</p>
  <p>Contact No :{{$girl->price}}"  </p>

  <input id="price" name="price"  type="hidden" value="{{$girl->price}}" />
  <input id="destination" name="destination" required type="hidden" />
  <input id="destination" name="destination" required type="hidden" />

   
<hr>
<form id="distance_form">
<div class="form-group"><label>Origin: </label> <input class="form-control" id="from_places" placeholder="Enter Pickup location" required /> <input id="origin" name="origin" required="" type="hidden" /></div>

<div class="form-group"><label>Destination: </label> <input class="form-control" id="to_places" value="{{ $girl->address1 }}" disabled /> <input id="destination" name="destination" required type="hidden" /></div>
<input class="btn btn-primary" type="submit" value="Calculate" /></form>

<div id="result">
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">Distance In Mile :
    <span id="in_mile" class="badge badge-primary badge-pill"></span></li>

  <li class="list-group-item d-flex justify-content-between align-items-center">Distance is Kilo:
  <span id="in_kilo" class="badge badge-primary badge-pill"></span></li>

  <li class="list-group-item d-flex justify-content-between align-items-center">IN TEXT:
  <span id="duration_text" class="badge badge-primary badge-pill"></span></li>

  <li class="list-group-item d-flex justify-content-between align-items-center">IN MINUTES:
    <span id="duration_value" class="badge badge-primary badge-pill"></span></li>

  <li class="list-group-item d-flex justify-content-between align-items-center">FROM:
  <span id="from" class="badge badge-primary badge-pill"></span></li>

  <li class="list-group-item d-flex justify-content-between align-items-center">TO:
  <span id="to" class="badge badge-primary badge-pill"></span></li>


<li class="list-group-item d-flex justify-content-between align-items-center">Service Fee:
<span id="servicefee" class="badge badge-primary badge-pill"></span></li>

<li class="list-group-item d-flex justify-content-between align-items-center">Driver fee:
<span id="driverfee" class="badge badge-primary badge-pill"></span></li>


<li class="list-group-item d-flex justify-content-between align-items-center">Total Fee:
<span id="totalfee" class="badge badge-primary badge-pill"></span></li>


</ul>

 <button class="btn btn-success btn-large" type="submit">Place Order</button>
</div>




  </div>
  <div class="col-md-6">
   <div id="mapMe">
    
   </div> 
  </div>
     
  </div>
  
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>


<script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgNfwFbR2XCAo9I1oUjyHluZIeeHQoPnc&libraries=places&language=fr"></script>

<script>

  $(document).ready(function() {

  var contentString;
  var myLatLng;
  var centlat;
var centlng;
var name;
var address;


   //centlat = $('#lat').val();
   centlat = {{ $girl->lat }};
   centlng = {{ $girl->lng }};
   
   
   
   myLatLng = new google.maps.LatLng(centlat, centlng);
 console.log('hello');
  
contentString= '<div id="iw-container">'+
      '<div class="iw-title">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      '</div>'+
      '</div>';

	var map = new google.maps.Map(document.getElementById('mapMe'), {
  center: myLatLng,

  scrollwheel: false,
  zoom: 12
});
var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

var marker = new google.maps.Marker({
   position: myLatLng,
    map: map
});
marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

});


</script>
<script type="text/javascript" src="/js/distance.js"></script>
</body>
</html>