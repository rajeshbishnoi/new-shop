<!DOCTYPE html>
<html>
<head>
  <title>Admin | Login</title>
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
      <li class="active"><a href="#">Change Password</a></li>

    </ul>
  </div>
</nav>
</div>
<div class="" style="text-align: center;margin-top:20% ">


{!! Form::open(['url' => '/changepasswordadmin']) !!}

      

      {!! Form::label('Old Password','', array('class' => '','placeholder' => '' )) !!}<br>

      
      {!! Form::text('oldpassword','', array('class' => ' center','placeholder' => '' )) !!}<br><br>
    
     
      {!! Form::label('New Password','', array('class' => '','placeholder' => '' )) !!}<br>
      
      {!! Form::password('newpassword','', array('class' => 'center','placeholder' => '' )) !!}<br><br>


      {!! Form::label('Confirm Password','', array('class' => '','placeholder' => '' )) !!}<br>
      
      {!! Form::password('confirmpassword','', array('class' => 'center','placeholder' => '' )) !!}<br><br>

       {!! Form::submit('Login','', array('class' => 'btn btn-success','placeholder' => '' )) !!}

{!! Form::close() !!}

</div>   
</body>
</html>