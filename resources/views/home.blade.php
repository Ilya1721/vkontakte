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
          <img src="/img/camera.png" />
          <a id="img-link" href="#">
            Загрузить фотографию
          </a>
          <a id="edit-link" href="#">
            Редактировать
          </a>
        </div>
      </div>
      <div class="col-6">
        <div id="personal-data">
          <div id="name-status">
            <span id="name">Илья Петров</span>
            <span id="status">Online</span>
          </div>
          <a id="change-status" href="#">
            изменить статус
          </a>
        </div>
      </div>
    </div>
</div>
@endsection
