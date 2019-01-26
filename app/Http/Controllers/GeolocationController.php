<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeneaLabs\LaravelMaps\Facades\Map;

class GeolocationController extends Controller
{
    //
  public function index(Request $request)

  { 
  	$this->validate(request(), [
      'start' => 'required|string',
      'end' => 'required|string'
  	]);

    $startpt = request('start');
    $endpt = request('end');
   

   $config['center'] = '37.4419, -122.1419';
$config['zoom'] = 'auto';
$config['directions'] = TRUE;
$config['directionsStart'] = $startpt;
$config['directionsEnd'] = $endpt;
$config['directionsDivID'] = 'directionsDiv';
app('map')->initialize($config);

$map = app('map')->create_map();

  return back()->with('map', $map);
  }

}
