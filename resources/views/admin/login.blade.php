<!DOCTYPE html>
<html>
<head>
  <title>Admin | Login</title>

  <link href="{{ URL::asset('public/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
  <link href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{URL::asset('public/css/admincss.css') }}" rel="stylesheet" type="text/css" "/>

</head>
<body>
<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Login</a></li>
    </ul>
  </div>
</nav>
</div>
<div class="well">
  {!! Form::open(['url' => '/loginadmin','enctype'=>'multipart/form-data']) !!}
  
  <fieldset>
    

    <div class="form-group">
    {!! Form::label('USERNAME','', array('class' => '','placeholder' => '' )) !!}<br>
      <div class="col-lg-10">
        {!! Form::text('username','', array('class' => '','placeholder' => ''   )) !!}<br><br>
      </div>
    </div>
    <br>

    <div class="form-group">
      {!! Form::label('PASSWORD','', array('class' => '','placeholder' => '' )) !!}<br>
      <div class="col-lg-10">
              {!! Form::text('password','', array('class' => '','placeholder' => '' )) !!}
      </div>
    </div>
    <br>
     <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Add','', array('class' => 'btn btn-success','placeholder' => '' )) !!}
            </div>
        </div>
  </fieldset>    
  {!! Form::close() !!}
</div>

</body>

</html>