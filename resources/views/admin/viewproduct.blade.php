<!DOCTYPE html>
<html>
<head>
  <title>View Product</title>
  <link href="{{ URL::asset('public/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div>
<nav class="navbar navbar-inverse">
  <div></div> class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">View Product</a></li>
    </ul>
  </div>
</nav>
</div>

<h1 style="text-align: center;font-variant: small-caps;">View Product</h1>

<div class="container" style="margin-top: 30px; ">
<div class="table-responsive">
  <table class="table">
    <thead>
    <?php $id=1; ?>
      <tr style="font-size:24px;">
        <th class="col-md-4">ID</th>
        <th class="col-md-4">Name</th>
        <th class="col-md-4">Description</th>
        <th class="col-md-4 ">image </th>
        <th class="col-md-4 ">size </th>
        <th class="col-md-4">Status</th>
        <th class="col-md-4">Remove</th>
        <th  class="col-md-4">Edit</th>
      </tr>
        @foreach($get_data as $get_datas)
        <tr>  
        <th>
        <?php 
        echo $id; 
        $id++; 
        $status= $get_datas->addproduct_status;
        ?>
        </th>
        <th>{{ $get_datas ->  addproduct_name }}</th>
        <th>{{ $get_datas -> addproduct_description }}</th>

        <td>{!! Html::image('resources/assets/uploads/'.$get_datas->addproduct_image,'avatar', array('class' => 'imgdisp','width'=>60,'height'=>50)) !!}</td>
        
        <th>{{ $get_datas -> addproduct_size }}</th>
       
        @if($status===1) 
        <th><a href="/new-shop/admin/addproduct/{{ $get_datas->addproduct_id}}/0">ACTIVE</a></th>

        @else <th><a href="/new-shop/admin/addproduct/{{ $get_datas->addproduct_id}}/1">INACTIVE</a></th>
        @endif
        
        <th><a href="/new-shop/admin/viewproduct/{{$get_datas->addproduct_id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true">&nbsp;</span></a></th>

        <th><a href="/new-shop/admin/addproduct/{{$get_datas->addproduct_id}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;</span></a></th>   
        </tr>
        
        @endforeach 
    
    </thead>
    <tbody>     

    </tbody>
  </table>

  {{ $get_data->links() }}
</div>
</div>
</body>
</html>