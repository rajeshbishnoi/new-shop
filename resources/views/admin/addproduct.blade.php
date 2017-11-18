< !DOCTYPE html>
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
      <li class="active"><a href="#">AddProduct</a></li>
    </ul>
  </div>
</nav>
</div>
<table class="w3-table" style="width: 60%;margin-left: 20%;font-size: 0.75em">
<div style="text-align: center;">
      {!! Form::open(['url' => '/addproduct','enctype'=>'multipart/form-data']) !!}

  <tr>
  <td>{!! Form::label('Select Category','', array('class' => '','placeholder' => '' )) !!}</td>
  
        <td>
          <select name="p_category" id="p_category" onchange="change_category()" >
            <option value=""> Select category </option>


            @foreach($category as $categorys)
            <option value="{{ $categorys->category_id }}">{{ $categorys->category_name }}</option>

            @endforeach
          </select>
        </td>  
  </tr>

      <tr><td>{!! Form::label('Select Sub Category','', array('class' => '','placeholder' => '' )) !!}</td>

        <td id="home">
          <select name="sub_category">
            <option value=""> Select Sub fitrst category </option>

            @foreach($subcategory as $subcategorys)
            <option value="{{ $subcategorys->category_name }}">{{ $subcategorys->category_name }}</option>

            @endforeach
          </select>
        </td>

        <td id="classlist" style="display: none;">
        </td>  
      </tr>
         
<tr>
<td>
      {!! Form::label('Product Name','', array('class' => '','placeholder' => '' )) !!}<</td>

      <!-- FOR RETRIEVING THE DATA FROM EDIT IN VIEW PRODUCT AND ELSE SIMPLY USING THE PREVIOUS -->
      <td>
      @if($get !="") 

      @foreach($get as $gets)
      {!! Form::text('name',"$gets->addproduct_name", array('class' => '','placeholder' => '' )) !!}<br><br>
      
      {!! Form::hidden('ID','$gets->addproduct_id') !!}
      @endforeach

      @else
      {!! Form::text('name','', array('class' => '','placeholder' => '' )) !!}<br><br>
      @endif
      </td>
</tr>

<tr>
  <td>
      {!! Form::label('Product size','', array('class' => '','placeholder' => '' )) !!}
  </td>
  <td>
      {!! Form::text('size','', array('class' => '','placeholder' => '' )) !!}<br><br>
  </td>
</tr>


<tr>
  <td>
      {!! Form::label('Product status','', array('class' => '','placeholder' => '' )) !!}
  </td>
  <td>    

      {!! Form::text('status','', array('class' => '','placeholder' => '' )) !!}<br><br>
  </td>
</tr>  

<tr>
<td>
  {!!Form::label('Product Description','',array('class'=>'','placeholder'=>'')) !!}
</td>
<td>
  {!! Form::textarea('description','',array('class'=>'','placeholder'=>'')) !!}<br><br>
</td>
</tr>
<tr>
  <td>
  {!! Form::label('Price','',array('class'=>'','placeholder'=>'')) !!}
  </td>
  <td>
  {!! Form::text('price','',array('class'=>'','placeholder'=>'')) !!}<br><br>
  </td>
</tr>

<tr>
  <td>
  {!! Form::label('Discount Price','',array('class'=>'','placeholder'=>'')) !!}
  </td>
  <td>
  {!! Form::text('discountprice','',array('class'=>'','placeholder'=>'')) !!}<br><br>
  </td>
</tr>

      <!-- {!! Form::label('Product image','', array('class' => '','placeholder' => '' )) !!}<br>
      {!! Form::file('image') !!}<br> -->
<tr>
  <td>
    {!! Form::label('Product Image','',array('class'=>'','placeholder'=> '')) !!}
  </td>
  <td>
    {!! Form::file('image') !!}
  </td>
</tr>
<tr>
  <td>
      {!! Form::submit('Add','', array('class' => 'btn btn-success ','placeholder' => '' )) !!}
  </td>
</tr>  
      {!! Form::close() !!}


</div>
</table>
</div>


<script type="text/javascript">
  
  var BASE_URL= "{{ url('/') }}";
</script>

<script type="text/javascript">
  function change_category(){
    var a = $('#p_category').val();
    // alert(a);
    $.ajax({

      url:BASE_URL+"/admin/subcategory/subcategorys/"+a,
      success:function(resonse){
        $('#classlist').show();
        // $('#loadingdiv').show();
        $('#home').hide();
        $('#classlist').html(response);
        // $('#classlist').show();
      }
    });
  }

</script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

<script type="text/javascript" src="{{ URL::asset('public/js/jquery-3.2.0.min.js')}}"></script>


<!-- <script type="text/javascript" src="{{ URL::asset('public/js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{ URL::asset('public/js/bootstrap-3.1.1.min.js')}}"> --></script>
</body>




</html>