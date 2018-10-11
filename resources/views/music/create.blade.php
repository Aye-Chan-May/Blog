@extends('layouts/app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Create Music
        </div>

        <div class="card-body">
          <form action="{{url('/music')}}" method="post" enctype="multipart/form-data">

            @csrf

            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control"><br>

            <label class="form-label">Artist Id</label>
            <input type="text" name="artist_id" class="form-control">

            <label class="form-label">Music File Upload</label>
            <input type="file" name="file" class="form-control">

            <p></p>
            <input type="submit" value="Add new Artist" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection('content')
