@extends('layouts.app')

@section('content')
  <div class="contains">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          {{$artists}}
        </div>
      </div>
    </div>
  </div>
@endsection('content')
