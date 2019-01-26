

	<div id="map" class="row">



</div>
{!! Form::label('city', 'Cities') !!}
    
     
     {!! Form::select('city', $matchedCities, null, ['id' => 'citylocation' ], ['placeholder' => 'Type de Services'] ); !!}
      
      