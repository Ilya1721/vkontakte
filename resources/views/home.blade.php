@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mx-5">
      <div class="col-2">
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
      <div class="col-7">
        <div id="personal-data">
          <div id="name-status" class="d-flex justify-content-between">
            <span id="name">Илья Петров</span>
            <span id="status">Online</span>
          </div>
          <a id="change-status" href="#">
            изменить статус
          </a>
          <hr id="horizontal-line" />
          <div id="birthday" class="d-flex justify-content-between">
            <span id="birth-line">
              День рождения:
            </span>
            <span>
              <a id="data" href="#">
                10 августа
              </a>
              <a id="data" href="#">
                1999г.
              </a>
            </span>
          </div>
          <div id="education">
            <div class="d-flex justify-content-between">
              <span id="edu-line">
                Образование
              </span>
              <a id="edu-edit" href="#">
                Редактировать
              </a>
            </div>
            <hr />
            <span id="edu-info" class="d-flex justify-content-center">
              Информация отсутствует
            </span>
          </div>
          <div id="personal-info">
            <div class="d-flex justify-content-between">
              <span id="per-line">
                Личная информация
              </span>
              <a id="per-edit" href="#">
                Редактировать
              </a>
            </div>
            <hr />
            <span id="per-info" class="d-flex justify-content-center">
              Информация отсутствует
            </span>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
