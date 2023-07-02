<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <title>CodeGenius</title>
</head>
<section class="header">
    <div class="header__wrapper">
        <nav>
            <a href="{{ route('index') }}"><img class="logo" src="/src/icons/CodeGenius.svg" alt=""></a>
            <ul class="menu">
            <li class="menu__item"><a href="{{ route('services') }}" class="menu__link">Услуги</a></li>
                    <li class="menu__item"><a href="{{ route('case') }}" class="menu__link">Кейсы</a></li>
                    <li class="menu__item"><a href="{{ route('contact') }}" class="menu__link">Контакты</a></li>
                    <li class="menu__item"><a href="{{ route('about') }}" class="menu__link">О нас</a></li>
                <li class="menu__item"><a href="/avt.html" class="menu__link"><img class="profile-icon" src="/src/icons/profile.svg" alt=""></a></li>
            </ul>
        </nav>
    </div>
    <img class="burger-btn" id="burger-btn" src="src/icons/burger.svg" alt="">
        <ul class="burger-menu" id="burger-menu">
            <li class="menu__item"><a href="./index.html" class="menu__link">Главная</a></li>
            <li class="menu__item"><a href="/services.html" class="menu__link">Услуги</a></li>
            <li class="menu__item"><a href="/case.html" class="menu__link">Кейсы</a></li>
            <li class="menu__item"><a href="/contact.html" class="menu__link">Контакты</a></li>
            <li class="menu__item"><a href="/about.html" class="menu__link">О нас</a></li>
            <li class="menu__item"><a href="./avt.html" class="menu__link">Войти</a></li>
        </ul>
</section>
<section class="case-container">
    <div class="case-container__case" id="case1">
        <div class="case-container__case-wrapper">
            <h4 class="case-container__case-title">LuxeLiving - мебельная компания</h4>
        </div>
    </div>
    <div class="case-container__case" id="case2">
        <div class="case-container__case-wrapper">
            <h4 class="case-container__case-title">LuxeLiving - мебельная компания</h4>
        </div>
    </div>
    <div class="case-container__case" id="case3">
        <div class="case-container__case-wrapper">
            <h4 class="case-container__case-title">LuxeLiving - мебельная компания</h4>
        </div>
    </div>
</section>
<footer>
    <div class="footer-wrapper">
        <ul class="footer-menu">
            <li class="footer-menu__item"><span class="footer-menu__title">Адрес</span></li>
            <li class="footer-menu__item">г. Москва, ул. Нежинская 7</li>
            <li class="footer-menu__item">г. Москва, Нахимовский пр.</li>
            <li class="footer-menu__item"><span class="footer-menu__title">Соцсети</span></li>
            <li class="footer-menu__social-media">
                <img src="/src/icons/telegram.svg" alt="" class="footer-menu__img">
                <img src="/src/icons/vk.svg" alt="" class="footer-menu__img">
                <img src="/src/icons/inst.svg" alt="" class="footer-menu__img">
            </li>
        </ul>
        <form action="{{ route('callback.store') }}" class="footer-form" method="POST">
            @csrf
            <h2 class="footer-form__title">Задать вопрос</h2>
            <input type="text" name="message" class="footer-form__input" placeholder="Сообщение" required>
            <input type="email" name="email" class="footer-form__input" placeholder="Почта" required>
            @if (session('success'))
                <h4>{{ session('success') }}</h4>
            @endif
            <button class="footer-form__button" type="submit"><span class="footer-form__button-text">Отправить</span></button>
        </form>
    </div>
</footer>
<script src="/js/burger.js"></script>
</html>