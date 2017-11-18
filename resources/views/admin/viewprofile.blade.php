<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
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
      <li class="active"><a href="#">ViewProfile</a></li>

    </ul>
  </div>
</nav>
<h1 style="text-align: center;"> VIEW PROFILE</h1>
<div style="text-align: center;">
  
  <div class="container" style="margin-top: 30px; ">
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr style="font-size:24px;">
        <th class="col-md-4">Category Id</th>
        <th class="col-md-4">Category Name</th>
        <th class="col-md-4 ">Category Size</th>
      </tr>

      @foreach($get_data as $get_datas)
      <tr>
        <th>{{ $get_datas -> profile_name }}</th>
        <th>{{ $get_datas -> profile_email }}</th>
        <th>{{ $get_datas -> profile_address }}</th>
      </tr>
      @endforeach 
    
    </thead>
    <tbody>     

    </tbody>
  </table>
</div>
</div>
</div>
</div>
</body>
</html>