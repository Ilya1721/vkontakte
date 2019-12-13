@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row mx-5">
    <div class="col-2">
      @yield('left-navbar', View::make('layouts.left_navbar'))
    </div>
    <div class="col-8">
      <div id="message-list">
        <form action="/friends/search" method="post">
          <input id="friend-search-input" name="friends" class="form-control"
           type="text" placeholder="Поиск участников" />
        </form>
        @for($i = 0; $i < 5; $i++)
        <div class="row my-3 mx-2">
          
        </div>
        @endfor
      </div>
    </div>
    <div class="col-2">
      <div id="message-category" class="container py-2">
        <a id="message-link" href="#">
          Все сообщения
        </a>
        <a id="message-link" href="#">
          Непрочитанные
        </a>
        <a id="message-link" href="#">
          Важные
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
