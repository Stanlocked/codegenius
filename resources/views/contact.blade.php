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
<section class="contacts">
    <div class="contacts__wrapper">
        <h2 class="contacts__title">Контакты</h2>
        <div class="contacts__container">
            <h2 class="contacts__number">+7 (965) 353-84-75</h2>
            <h2 class="contacts__post">isip_v.s.makushenko@mpt.ru</h2>
            <iframe сlass="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2247.6434432123056!2d37.47411457671254!3d55.712569273069306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54c223d358637%3A0x401084ade5db3867!2z0J3QtdC20LjQvdGB0LrQsNGPINGD0LsuLCA3LCDQnNC-0YHQutCy0LAsIDExOTUwMQ!5e0!3m2!1sru!2sru!4v1686599658653!5m2!1sru!2sru" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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