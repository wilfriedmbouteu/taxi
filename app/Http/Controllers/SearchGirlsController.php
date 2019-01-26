<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Girls;
use App\Location;
use JavaScript;


class SearchGirlsController extends Controller
{
    //

    public function show($id)
    {
       $girl = Girls::findOrFail($id);

        return view('show.enseigne', compact('girl'));
    }


    public function searchGirls(Request $request)
    {

        $lat = $request->lat;
        $lng = $request->lng;
        $girlnn = $request->girln;
        $girls = Girls::wherebetween('lat', [$lat - 0.8, $lat + 0.8])->wherebetween('lng', [$lng - 0.8, $lng + 0.9])->where('speciality', $girlnn)->get();


        return $girls;


    }

    public function searchCity(Request $request)
    {
    	$distval = $request->distval;
    	$matchedCities = Location::where('district', $distval)->pluck('city','city');

    	return view('ajaxresult', compact('matchedCities'));

    }

    public function locationCoords(Request $request)
    {
        $cityval = $request->cityval;
        $distval = $request->distval;
        $girln = $request->girln;
        $col = Location::where('district', $distval)->where('city', $cityval)->first();

        $lat = $col->lat;
        $lng = $col->lng;
      
        return [$lat, $lng, $girln];

    }
    
      public function searchGirlsID(Request $request)
 {
   $lat = $request->lat;
        $lng = $request->lng;
        $girlnn = $request->girln;
        $girls = Girls::wherebetween('lat', [$lat - 0.8, $lat + 0.8])->wherebetween('lng', [$lng - 0.8, $lng + 0.9])->where('speciality', $girlnn)->get();

   return view('girlsresult', compact('girls'));
 }

}
