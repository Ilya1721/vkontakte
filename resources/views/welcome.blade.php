@extends('layouts.app')
@section('content')
<div class="content">
  <h3>ВКонтакте для мобильных устройств</h3>
  <p>
     Установите официальное мобильное приложение
     ВКонтакте<p></p> и оставайтесь в курсе новостей
     Ваших друзей, где бы Вы ни находились.
  </p>
  <img id="left-phone" src="/img/android_phone.png" />
  <img src="/img/iphone_phone.png" />
  <p>
    <div class="row justify-content-center">
      <div id="phone-link">
        <a href="https://play.google.com/store/apps/details?id=com.vkontakte.android"
           target="_blank"
           class="nav-link">
          <img src="/img/android_logo.svg" />
          VK для Android
        </a>
      </div>
      <div id="phone-link">
        <a href="https://apps.apple.com/ru/app/id564177498"
           target="_blank"
           class="nav-link">
          <img src="/img/iphone_logo.svg" />
          VK для iPhone
        </a>
      </div>
    </div>
  </p>
</div>
@endsection
