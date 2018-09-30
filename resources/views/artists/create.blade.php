@extends('layouts/app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Create New Artist
        </div>

        <div class="card-body">
          <form action="{{url('/artists')}}" method="post">

            @csrf

            <label class="form-label">Artist Name</label>
            <input type="text" name="name" class="form-control"><br>


            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female <br>

            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control">
            <p></p>
            <input type="submit" value="Add new Artist" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection('content')
