@extends('backend/default')

@section('coman')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Products List</h1>
 
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Products Table</h5>

          <!-- Default Table -->

          @if (session()->has('success'))
          <div class="alert alert-danger" role="alert" id="session_div">
            {{session('success')}}
</div>
<script>
  setTimeout(function(){
    document.getElementById('session_div').style.display = 'none';
  },2000)
  </script>
@endif



          <table class="table">
            <thead>
            <td>   <a href="{{url('addproduct')}}" class="btn btn-success">Add Product</a></td>
              <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">TITLE</th>
                <th scope="col">SKU</th>
                <th scope="col">MRP</th>
                <th scope="col">PRIZE</th>
                <th scope="col">DESCRIPTION</th>
             
                                        
              </tr>
            </thead>
            <tbody>
            @foreach($showdata as  $key =>$showdatas)
              <tr>
              <td>{{$key}}</td>
                <td>{{$showdatas->title}}</td>
            
                <td>{{$showdatas->sku}}</td>
                <td>{{$showdatas->mrp}}</td>
                <td>{{$showdatas->prize}}</td>
                <td>{{$showdatas->description}}</td>
                <td>
                                                 <a href="{{url('deleteproduct/'.$showdatas->id)}}" class="btn btn-danger">DELETE</a></td>
                                                 <td>
                                                 <a href="{{url('editproduct/'.$showdatas->id)}}" class="btn btn-primary">Edit</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Default Table Example -->
        </div>
      </div>

     
          <!-- End small tables -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
 @endsection