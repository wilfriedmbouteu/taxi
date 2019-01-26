
var map;

var myLatLng;
var contentString;
var infowindow;
var age;
//var citylocation = $("#citylocation").val();

$(document).ready(function() {
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$("#pickup").keyup(function () {
   var pickuploc = $("#pickup").val();
//console.log(pickuploc);
});

geolocationInit();

function geolocationInit()
{
	if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(success, fail);
	}
	else { alert("Browser not supported");
	 }
}

function success(position)
{
	
	var latval = position.coords.latitude;
	var lngval = position.coords.longitude;
 

console.log([latval, lngval]);
	myLatLng = new google.maps.LatLng(latval, lngval);
 
 createMap(myLatLng);

 //nearbySearch(myLatLng, "school");
 searchGirls(latval, lngval);
}

function fail()
{
	alert("Loading fails");
}


function createMap(myLatLng)
{
  contentString= '<div id="iw-container">'+
      '<div class="iw-title">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      '</div>'+
      '</div>';

	 map = new google.maps.Map(document.getElementById('map'), {
  center: myLatLng,

  scrollwheel: false,
  zoom: 9
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

}
	
	//marker

function createMarker(latlng, icn,name,address, enseigne, speciality, price, idm)
{
//console.log(idm);
var url = '/' + idm;
//console.log(url);

 $(function(){
       $('#sendme').click(function() {
            alert("hello");
       });
    });  

   contentString = '<div id="iw-container">' +
                    '<div class="iw-title">'+enseigne+ '</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">History</div>' +
                      
                      '<p>Address:'+address+'</p>'+
                      '<br>speciality.' +speciality+ '</p>'+
                    '</div>' +
                    '<p>Price:'+price+'</p>'+
                    '<button type="button" id="sendme" class="btn btn-danger btn-sm">Select</button>'+ 
                    '<div class="iw-bottom-gradient"></div>' +
                  '<br></div>';
var marker = new google.maps.Marker({
    position: latlng,
    map: map,
    icon:icn,
    title: name,

  });
var infowindow = new google.maps.InfoWindow({
    content: contentString
  });
marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}

/*function nearbySearch(myLatLng, type)
{

var request = {
    location: myLatLng,
    radius: '150000',
    types: [type]
  };

service = new google.maps.places.PlacesService(map);
service.nearbySearch(request, callback);

function callback(results, status) {
 
//console.log(results);
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      var place = results[i];
      latlng = place.geometry.location;
      icn= 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
     name = place.name;
      createMarker(latlng, icn, name);
    }
  }
}

}
*/


function searchGirls(lat, lng, girln)
{
 
 
  //console.log($girls->id);
	$.post('http://localhost:8000/api/searchGirls', {lat:lat, lng:lng, girln:girln}, function(match) {
	//console.log(lat);
  
  $('#girlsResult').html('');
   $.each(match, function(i, val, girlnn) {
   	var glatval= val.lat;
   	var glngval = val.lng;
   	var gname = val.name;
    var idm = val.id;
    var enseigne = val.enseigne;
    var price = val.price;
    var speciality = val.speciality;
    var address = val.address2;
   	var Glatlng = new google.maps.LatLng(glatval, glngval);
    var gicn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
   	createMarker(Glatlng,gicn,gname, address, enseigne, speciality, price, idm);
console.log(idm);
 



    /*var html = '<h5><li>'+enseigne+'</li></h5>'+
    '<div class="col-lg-4 col-md-6">'+
          '<a id="getMe"  class="listing-item-container compact">'+
            '<div class="listing-item">'+
              '<img src="images/listing-item-01.jpg" alt="">'+

              '<div class="listing-badge now-open">Now Open</div>'+

              '<div class="listing-item-content">'+
                '<div class="numerical-rating" data-rating="3.5"></div>'+
                '<h3>'+gname+' <i class="verified-icon"></i></h3>'+
                '<strong>'+address+'</strong>'+
              '</div>'+
              '<strong>Specialite : ' +speciality+'</strong>'+
              '</div>'+
              '<strong> Price : '+price+' Euros</strong>'+
              '<span class="like-icon"></span>'+
            '</div>'+
          '</a>'+
        '</div>' ;*/

    //$('#girlsResult').append(html);

   });

});

}

 function loadGirls(lat, lng, girln)
 {
//  alert('load');
      //$("#girlsResult").html(match);
  
    $.post('http://localhost:8000/api/searchGirlsID', {lat: lat, lng:lng, girln:girln}, function(match) {
  
$("#girlsResult").html(match);
 });

}

$('#searchGirls').submit(function(e) {
  e.preventDefault();
  var distval = $('#district').val();
  var cityval = $('#citylocation').val();
  var girln = $('#sell').val();

//console.log(girln);
 $.post('http://localhost:8000/api/getLocationCoords',{distval:distval, cityval:cityval, girln:girln}, function(match) {
   //console.log(match[0]);

   myLatLng = new google.maps.LatLng(match[0], match[1], match[2]);
    createMap(myLatLng);
   searchGirls(match[0], match[1], match[2]);
   loadGirls(match[0], match[1], match[2]);

  });

});

//action call when district is selected

/*$("#district").click(function () {
   var distval = $("#district").val();
    $.post('http://localhost:8000/api/searchCity', {distval: distval}, function(match) {
      $("#city").html(match);

//relocate map here
var distval = $('#district').val();
  var cityval = $('#citylocation').val();
  
  $.post('http://localhost:8000/api/getLocationCoords',{distval:distval, cityval:cityval}, function(match) {
   //console.log(match[0]);

   myLatLng = new google.maps.LatLng(match[0], match[1]);
    createMap(myLatLng);
   searchGirls(match[0], match[1]);

  });

    });


});
*/
//action call when search of pickup is clicked


});
