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
              <th>Title</th>
              <th>Artist Id</th>
              <th>Music Cover</th>
              <th>Option</th>

            </tr>
            @foreach($music as $m)
            <tr>
              <td></td>
              <td>{{$m->title}}</td>
              <td>

              	

              	@if($m->artist->gender == 'Male')

				<img src="{{url('male.png')}}" width="20px;" alt="">
				@else
				<img src="{{url('female.png')}}" width="20px;">
				@endif

				{{$m->artist->name}}

              </td>
              <td><img src="{{url('')}}/storage/{{$m->file_name}}" alt="" width="100px;"></td>
              <td>
                  <a href="{{url('')}}/artists/{{$m->id}}/edit" class="btn btn-info">Edit</a>

                  <form class="delete-form" action="{{url('artists/')}}/{{$m->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete"  class="btn btn-danger">
                  </form>
                </td>

            </tr>
            @endforeach
          </table>

          {{$music->links()}}
          <a href="{{url('music/create')}}" class="btn btn-primary">+ Create New Music</a>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection('content')
