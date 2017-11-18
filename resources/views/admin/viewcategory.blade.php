<!DOCTYPE html>
<html>
<head>
	<title>View Category</title>
	<link href="{{ URL::asset('public/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
  	<link href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">ViewCategory</a></li>
<!--       <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>
</div>

<h1 style="text-align: center;font-variant: small-caps;">View Category</h1>

<div class="container" style="margin-top: 30px; ">
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr style="font-size:24px;">
				<th class="col-md-4">Category Id</th>
				<th class="col-md-4">Category Name</th>
				<th class="col-md-4	">Category Size</th>
			</tr>

			@foreach($get_data as $get_datas)
			<tr>
				<th>{{ $get_datas -> category_id }}</th>
				<th>{{ $get_datas -> category_name }}</th>
				<th>{{ $get_datas -> category_size }}</th>
			</tr>
			@endforeach	
		
		</thead>
		<tbody>			

		</tbody>
	</table>
</div>
</div>
</body>
</html>