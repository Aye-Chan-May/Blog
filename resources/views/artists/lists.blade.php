@extends('layouts.app')

@section('content')
  <div class="contains">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
        <div class="card-header">
          Artists List
        </div>
        <div class="card-body">
          <table class="table">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Gender</th>
              <th>City</th>
              <th>Option</th>

            </tr>
            @foreach($artists as $art)
            <tr>
              <td></td>
              <td>{{$art->name}}</td>
              <td>{{$art->gender}}</td>
              <td>{{$art->city}}</td>
              <td>
                  <a href="{{''}}/artists/{{$art->id}}/edit" class="btn btn-info">Edit</a>

                  <form class="delete-form" action="{{url('artists/')}}/{{$art->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete"  class="btn btn-danger">
                  </form>
                </td>

            </tr>
            @endforeach
          </table>

          {{$artists->links()}}
          <a href="{{url('artists/create')}}" class="btn btn-primary">+ Create New Artists</a>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection('content')
