@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mx-5">
      <div class="col-3">
        <ul class="navbar-nav" id="left-navbar">
          <li class="nav-item d-block">
            <a href="#">
              Моя страница
            </a>
          </li>
          <li class="nav-item d-block">
            <a href="#">
              Новости
            </a>
          </li>
          <li class="nav-item d-block">
            <a href="#">
              Друзья
            </a>
          </li>
          <li class="nav-item d-block">
            <a href="#">
              Сообщества
            </a>
          </li>
          <li class="nav-item d-block">
            <a href="#">
              Фотографии
            </a>
          </li>
          <li class="nav-item d-block">
            <a href="#">
              Музыка
            </a>
          </li>
          <li class="nav-item d-block">
            <a href="#">
              Видео
            </a>
          </li>
        </ul>
      </div>
      <div class="col-3">
        <div id="photo">
          <div id="img">
            <a href="#">
              Загрузить фотографию
            </a>
          </div>
        </div>
      </div>
      <div class="col-6">

      </div>
    </div>
</div>
@endsection
