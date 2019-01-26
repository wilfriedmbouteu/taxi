@extends('master11')


@section('content')
<div class="container=fluid">
	<h2>Front Map </h2>
	<br>
	<div id="map" class="row">


	</div>
  <div class="col-md-4 md-offset-2">

</div>
 <form >
    <div class="form-group">
      <label for="sel1">Pick up location:</label>
     <input type="text" name="pickup" id="pickup" placeholder="pickup">
      <br>
      <button type="submit" class="btn btn-success">search</button>
      
    </div>
  </form>
</div>


<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sell" placeholder="Select Speciality">
    @foreach($girlname as $city)
    <option> {{$city}} </option>
    @endforeach
  </select>
</div>


<div class="well">

	 {!! Form::open([ 'url' => '/getLocationCoords', 'id'=> 'searchGirls']) !!}
       <br>
       <div class="form-group">
        {!! Form::label('district', 'District') !!}
      
       
       {!! Form::select('district', $districts, null, ['id' => 'district', 'class' => 'form-control' ] ); !!}
          
        
        </div>
        <div id="city">
          
        </div>
  
       {!! Form::submit('Find', ['class' => 'btn btn-success btn-sm']) !!}
  
  {!! Form::close() !!} 
</div>
</div>
<br>
<h4>Girl's List</h4>
<hr>


<ul id="girlsResult">
	
</ul>

</div>


@endsection