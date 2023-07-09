@extends('backend/default')

@section('coman')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Users</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Elements</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Users Details</h5>

          <!-- General Form Elements -->
          <form method="post">
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Text</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="text">
                @error('text')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email">
                @error('text')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control"name="password">
                @error('text')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
              <div class="col-sm-10">
                <input type="number" class="form-control"name="number">
                @error('text')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile"name="file">
                @error('text')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control"name="date">
                @error('text')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
              <div class="col-sm-10">
                <input type="time" class="form-control"name="time">
                @error('text')
                 <p style="color:red;">{{$message}}</p>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
              <div class="col-sm-10">
                <textarea class="form-control" style="height: 100px"name="textarea"></textarea>
                @error('text')
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