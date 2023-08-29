@extends('admin.layouts.app')
@section('content')
<body>
<br>
<br>

    <div class="container-fluid">
        <div class="card">
          <div class="card-header">
              @if (session('success'))
                  <h3 class="card-title test-success"> {{session('success')}}</h3>
              @elseif(session('error'))
                  <h3 class="card-title test-info">{{session('error')}}</h3>
              @else
                  <h3 class="card-title">service Info</h3>
              @endif     
          </div> 
          <div class="card-body">
              {{-- <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data"> --}}
                @csrf
                <div class="col-md-4 col-4">
                    <div class="form-group">
                      <label for="" class="form-label">Portfolio Photo</label>
                      <input type="file" name="thumbnail_img" class="form-control" placeholder="Choose Photo">
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="" class="form-label">description</label>
                    <input type="text" name="description" placeholder="enter description">     
                    
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="" class="form-label">title</label>
                    <input type="text" name="title" placeholder="title">   
                      <div class="col-md-12 col-12">
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </form>
                 </div>
              </div>
          </div>
        </div>
    </body>
      @endsection