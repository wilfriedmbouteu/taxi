$(document).ready(function() {
        // add input listeners


        google.maps.event.addDomListener(window, 'load', function () {
            var from_places = new google.maps.places.Autocomplete(document.getElementById('from_places'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));

            google.maps.event.addListener(from_places, 'place_changed', function () {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                $('#origin').val(from_address);
                var from_wil_address = $("#addressme").val();
                console.log(from_address);
                
                console.log(from_place);
                console.log('destination');
            var dest = $("#addressme").val();
            console.log(dest);
            });
           
           /* google.maps.event.addListener(to_places, 'place_changed', function () {
                var to_place = to_places.getPlace();
                var to_address = to_place.formatted_address;
              //  $('#destination').val(to_address);

            });*/

        });
        // calculate distance
        function calculateDistance() {
            var origin = $('#origin').val();
        
            console.log('origin');
            console.log(origin);
            var destination = $("#addressme").val();
            console.log(destination);
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
        }
        // get distance results
        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                console.log('callback destination');
                console.log(destination);
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    console.log(response.rows[0].elements[0].distance);
                    var distance_in_kilo = distance.value / 1000; // the kilom
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    var duration_value = duration.value;
                    $('#in_mile').text(distance_in_mile.toFixed(2));
                    $('#in_kilo').text(distance_in_kilo.toFixed(2));
                    $('#duration_text').text(duration_text);
                    $('#duration_value').text(duration_value);
                    $('#from').text(origin);
                    $('#to').text(destination);
                    ///calculate the rates here:
                    
                    
                    var servicefee = $("#price").val();
                    console.log(servicefee);
                    $('#servicefee').text(servicefee);
                    var driverfee;
                    var totalfee;
                    if (distance_in_kilo >= 25) {
                        driverfee= 70;
                        $('#driverfee').text(driverfee);
                     }  else if (distance_in_kilo > 2 ) {
                        driverfee= 40;
                        $('#driverfee').text(driverfee);
                     }
                   

                    else
                    {
                      driverfee= 'free';
                    $('#driverfee').text(driverfee);
                           
                    }
                       

                     if (driverfee == 'free'){
                      totalfee = servicefee;  
                      $('#totalfee').text(totalfee);  
                     }
                     else {

                    var totalfee = parseInt(driverfee) + parseInt(servicefee);
                   // $('#totalfee').text(totalfee);
                   console.log(totalfee);
                    document.getElementById("totalfee").innerHTML = totalfee;
  
                     }

            document.getElementById("result").style.display = "block";
                }
            }
        }
        // print results on submit the form
        $('#distance_form').submit(function(e){
            e.preventDefault();
            calculateDistance();
        });

    });
