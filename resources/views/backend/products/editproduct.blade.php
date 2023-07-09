@extends('backend/default')

@section('coman')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Products</h1>
 
</div><!-- End Page Title -->
@if (session()->has('success'))
          <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show" id="session_div">
            {{session('success')}}
</div>
<script>
  setTimeout(function(){
    document.getElementById('session_div').style.display = 'none';
  },2000)
  </script>
@endif

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Products Details</h5>

          <!-- General Form Elements -->
          <form method="post">
            @csrf
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">TITLE</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="title" value="{{$edituser->title}}">
                @error('title')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
           
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">SKU</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"name="sku" value="{{$edituser->sku}}">
                @error('sku')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">MRP</label>
              <div class="col-sm-10">
                <input type="number" class="form-control"name="mrp" value="{{$edituser->mrp}}">
                @error('mrp')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
        
            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">PRIZE</label>
              <div class="col-sm-10">
                <input type="number" class="form-control"name="prize" value="{{$edituser->prize}}">
                @error('prize')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
           

            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">DESCRIPTION</label>
              <div class="col-sm-10">
                <textarea class="form-control" style="height: 100px"name="description" value="{{$edituser->description}}"></textarea>
                @error('description')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
           
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit Form</button>
              </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>

   
</section>

</main><!-- End #main -->
@endsection