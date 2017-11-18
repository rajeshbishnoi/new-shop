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
      <li class="active"><a href="#">Select Category</a></li>
    </ul>
  </div>
</nav>
</div>
<div class="" style="text-align: center;margin-top:20% ">
{!! Form::open(['url' => '/savecategory']) !!}
      
    
      {!! Form::label('Select Category','', array('class' => '','placeholder' => '' )) !!}<br>

      
      {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']) !!}<br><br>


      {!! Form::label('Add Category','', array('class' => '','placeholder' => '' )) !!}<br>
      

      {!! Form::text('category_name','', array('class' => '','placeholder' => '' )) !!}<br><br>


       {!! Form::submit('Add','', array('class' => 'btn btn-success','placeholder' => '' )) !!}
    

  {!! Form::close() !!}

</div>
</body>
</html>