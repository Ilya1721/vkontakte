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
           type="text" placeholder="Поиск сообщений" />
        </form>
        @for($i = 0; $i < 5; $i++)
        <div class="row my-3 mx-2">
          <div id="message" class="container">
            <a href="#">
              <span id="message-body-link"></span>
            </a>
            <a href="#">
              <img id="sender-img" src="https://sun6-19.userapi.com/c836332/v836332139/2e2e0/RNYjGOkSsyw.jpg?ava=1" />
            </a>
            <div class="d-flex pl-3 flex-row justify-content-between">
              <a id="sender-name" href="#">
                Ирада Хайт
              </a>
              <span id="send-date">
                вчера
              </span>
            </div>
            <div id="message-body" class="d-flex pl-3 flex-row">
              Привет, как дела?
            </div>
          </div>
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
