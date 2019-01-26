@extends('partials.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 ">

   <div class="profile" style=" border-spacing: 2px; " >         
 <img src="/uploads/avatars/{{ auth()->user()->avatar  }}" style="width:130px; height:130px; float:left; border-radius:50%; margin-right:25px; border-color: transparent;">
		<h2>{{auth()->user()->name }} </h2>
	
       <form enctype="multipart/form-data" action="/profile" method="Post">
       	{{ csrf_field() }}
       	<label>Update Profile Image</label>
       	<input type="file" name="avatar">
        <br>
        <input type="submit" class="btn  btn-primary" style="font: white; margin-left: 80px; ">
    </form>
</div>
    <br>

 <strong>User Details</strong>
 <hr>
 <br>
 <p>Full Name : <strong>{{ auth()->user()->name }} </strong></p> 
<p>Email id  : <strong>{{ auth()->user()->email }} </strong> </p>


</div>
</div>
<div class="row">
	<div class="col-md-3">
	
 <p>Address : <strong>{{ auth()->user()->address }} </strong> &nbsp &nbsp &nbsp <button class="btn btn-default" >edit</button> </p> 
  <p>Phone Number       : <strong>{{ auth()->user()->phone }} </strong> </p>

  <p>Registered on  : <strong>{{ auth()->user()->created_at->toFormattedDateString() }} </strong> </p>
 

	
   <br>
  
   
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Profile
</button>

</div>

</div>
</div>



@endsection