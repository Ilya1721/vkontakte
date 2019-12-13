@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row mx-5">
    <div class="col-2">
      @yield('left-navbar', View::make('layouts.left_navbar'))
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
        <div id="name-status" class="d-flex justify-content-between
                                     align-items-center container">
          <span id="name">Илья Петров</span>
          <span id="status">Online</span>
        </div>
        <div class="container">
          <a id="change-status" href="#">
            изменить статус
          </a>
        </div>
        <hr id="horizontal-line" />
        <div id="birthday" class="d-flex justify-content-between
                                  align-items-center container">
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
          <div class="d-flex justify-content-between
                      align-items-center container">
            <span id="edu-line">
              Образование
            </span>
            <a id="edu-edit" href="#">
              Редактировать
            </a>
          </div>
          <hr id="horizontal-line" />
          <span id="edu-info" class="d-flex justify-content-center">
            Информация отсутствует
          </span>
        </div>
        <div id="personal-info">
          <div class="d-flex justify-content-between
                      align-items-center container">
            <span id="per-line">
              Личная информация
            </span>
            <a id="per-edit" href="#">
              Редактировать
            </a>
          </div>
          <hr id="horizontal-line" />
          <span id="per-info" class="d-flex justify-content-center">
            Информация отсутствует
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
