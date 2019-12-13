@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row mx-5">
    <div class="col-2">
      @yield('left-navbar', View::make('layouts.left_navbar'))
    </div>
    <div class="col-3">

    </div>
    <div class="col-7">

    </div>
  </div>
</div>
@endsection
