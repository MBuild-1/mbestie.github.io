@extends('layouts.adminpanel.admin')
@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <div>
          <p>Something wrong...</p>
        </div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
    <div class="card-header ">
        <div class="d-flex flex-row justify-content-between items-center">
            <p>Update Brands</p>
          <a class="btn btn-primary" href="{{url('admin/brands')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$brands->name}}">
            </div> 
            <div class="col-md-6 input-group">
                  <img src="{{asset('image/uploads/brands/'.$brands->image)}}" class="img-thumbnail" width="200px" alt="">
                  <input type="file" class="form-control" id="image" name="image" >
                  <label class="input-group-text" for="image">Upload</label>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
    </div>
  </div>
@endsection