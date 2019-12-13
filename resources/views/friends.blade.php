@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row mx-5">
    <div class="col-2">
      @yield('left-navbar', View::make('layouts.left_navbar'))
    </div>
    <div class="col-8">
      <div id="friend-list">
        <div id="friend-list-header"
        class="d-flex justify-content-between
               align-items-center container">
          <span id="friend-search-line">
            Поиск друзей
          </span>
          <a id="friend-search-link" href="#">
            Расширенный поиск
          </a>
        </div>
        <form action="/friends/search" method="post">
          <input id="friend-search-input" name="friends" class="form-control"
           type="text" placeholder="Поиск участников" />
        </form>
        @for($i = 0; $i < 5; $i++)
        <div class="row my-3 mx-2">
          @for($j = 0; $j < 3; $j++)
            <div id="friend-card" class="col">
              <a href="#">
                <img id="friend-img" src="https://sun6-19.userapi.com/c836332/v836332139/2e2e0/RNYjGOkSsyw.jpg?ava=1" />
              </a>
              <div class="d-flex flex-row justify-content-between mt-2">
                <a id="friend-name" href="#">
                  Ирада Хайт
                </a>
                <a href="#" class="pr-3">
                  <img id="suggested-friend-img"
                   src="/img/suggested_friend.png" />
                </a>
              </div>
              <div class="d-flex flex-row justify-content-start">
                <span id="friend-status">
                  Нет общих друзей
                </span>
              </div>
            </div>
          @endfor
        </div>
        @endfor
      </div>
    </div>
    <div class="col-2">
      <div id="friend-category" class="container py-2">
        <a id="category-link" href="#">
          Мои друзья
        </a>
        <a id="category-link" href="#">
          Поиск друзей
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
