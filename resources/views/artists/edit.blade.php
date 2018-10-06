@extends('layouts/app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Editing Artist
        </div>

        <div class="card-body">
          <form action="{{url('artists')}}/{{$artist->id}}" method="post">

            @csrf
            @method('put')

            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="name">Artist Name</label>
              <div class="col-md-6">
                <input type="text" name="name" class="form-control" value="{{$artist->name}}" required>

              </div>
            </div>


            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="gender">Gender</label>
              <div class="col-md-6">
                <input type="radio" name="gender" value="Male"
                @if($artist->gender == 'Male') checked
                @endif

                >Male
                <input type="radio" name="gender" value="Female" checked>Female <br>

              </div>
            </div>


            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="city">City</label>
              <div class="col-md-6">
                <input type="text" name="city" class="form-control" value="{{$artist->city}}" required>

              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <input type="submit" value="Update" class="btn btn-primary">

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection('content')
