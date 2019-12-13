@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row mx-5">
    <div class="col-2">
      @yield('left-navbar', View::make('layouts.left_navbar'))
    </div>
    <div class="col-7">
      <div id="friend-list">
        <div id="friend-list-header"
        class="d-flex justify-content-between
               align-items-center container">
          <span id="friend-search-line">
            Поиск друзей
          </span>
          <span id="friend-search-link">
            Расширенный поиск
          </span>
        </div>
      </div>
    </div>
    <div class="col-3">

    </div>
  </div>
</div>
@endsection
