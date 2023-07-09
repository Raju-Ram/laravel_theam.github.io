@extends('backend/default')

@section('coman')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Products</h1>
 
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Products Details</h5>

          <!-- General Form Elements -->
          @if (session()->has('success'))
          <div class="alert alert-success" role="alert"id="session_div">
            {{session('success')}}
</div>
<script>
  setTimeout(function(){
    document.getElementById('session_div').style.display = 'none';
  },2000)
  </script>
@endif


          <form method="post">
            @csrf
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">TITLE</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"name="title">
                @error('title')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
           
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">SKU</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"name="sku">
                @error('sku')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">MRP</label>
              <div class="col-sm-10">
                <input type="number" class="form-control"name="mrp">
                @error('mrp')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
        
            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">PRIZE</label>
              <div class="col-sm-10">
                <input type="number" class="form-control"name="prize">
                @error('prize')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
           

            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">DESCRIPTION</label>
              <div class="col-sm-10">
                <textarea class="form-control" style="height: 100px"name="description"></textarea>
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