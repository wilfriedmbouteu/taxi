<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">


<script>window.Laravel= { csrfToken: '{{ csrf_token() }}' } </script>

</head>
<body>
	<div class="container-fluid">
		<div class="row" >
			<div class="col-md-3" style="position: absolute; background-color: brown; height: 100%">
				<div class="heading" style="margin-top: 10px; margin-left: 20px;">
				<h2>Admin Panel</h2>
			</div>
				<hr>
           <li>
           	<ul >
           		<a href="/users" class="active"> Manage Users</a>
           	</ul>
           	<ul>
           		<a href="#">Recent Activities</a>
           	</ul>
           </li>

			</div>

			<div class="col-md-9 offset-3">



				<div class="table" style="margin-top: 140px; margin-left: 50px;">
					<!-- Search form -->				
     <div class="container-box">
     	<h3 align="center">Live Search</h3>
     <br>
     <div class="panel panel-default">
     	<div class="panel-heading">
     		Search Customer Data
     	</div>
     	<div class="panel-body">
     		<input type="text" name="search" id="search" class="form-control" placeholder="search customer">
     	</div>
     	<div class="table-responsive">
     		<h3 align="center">Total Data : <span id="total_records"></span></h3>
     		<table class="table table-striped table-bordered">
				<thead>
					<tr>
							<th>SR</th>
							<th>Username</th>
							<th>Email id</th>
						</tr>
						</thead>
						<tbody>
							
						</tbody>
						</table>
     	</div>
     </div>
     </div>
  <!-- end search form -->
					
				</div>
			
			</div>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){

		//fetch_customer_data();
console.log('hello');
		function fetch_customer_data(query = '')
		{
          $.ajax({
          	url: "{{ route('live_search.action') }}" ,
          	method: 'GET',
          	data:{query:query},
          	dataType: 'json',
          	success:function(data)
          	{
          		$('tbody').html(data.table_data);
          		$('#total_records').text(data.total_data);
          	}
          });
		}
		$(document).on('keyup', '#search', function(){
        var query = $(".search").val();
        	fetch_customer_data(query);
		console.log(query);
		});
	});
	
</script>

</body>
</html>