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
<body id="body-white">
    <section class="header" id="header-white">
        <div class="header__wrapper">
            <nav>
                <a href="{{ route('index') }}"><img class="logo" src="/src/icons/CodeGeniusAlt.svg" alt=""></a>
                <ul class="menu">
                <li class="menu__item"><a href="{{ route('services') }}" class="menu__link">Услуги</a></li>
                    <li class="menu__item"><a href="{{ route('case') }}" class="menu__link">Кейсы</a></li>
                    <li class="menu__item"><a href="{{ route('contact') }}" class="menu__link">Контакты</a></li>
                    <li class="menu__item"><a href="{{ route('about') }}" class="menu__link">О нас</a></li>
                    <li class="menu__item"><a href="" class="menu__link"><img class="profile-icon" src="/src/icons/profile.svg" alt=""></a></li>
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
    <section class="inf">
        <div class="inf__container-fist">
            <div class="inf__container-wrapper">
                <div class="inf__info">
                    <h2 class="inf__title">О нас</h2>
                    <p class="inf__text">Мы - команда опытных профессионалов в сфере веб-разработки, которая стремится помочь вашей компании успешно присутствовать в онлайн-мире. Мы верим в силу веб-технологий и их способность преобразить бизнесы, повысить их видимость и привлечь новых клиентов.</p>
                </div>
            </div>
        </div>
        <div class="inf__container-second">
            <div class="inf__container-wrapper">
                <div class="inf__info">
                    <h2 class="inf__title">Наш подход</h2>
                    <p class="inf__text">Мы предлагаем индивидуальный и тщательно проработанный подход к разработке каждого сайта. Наша команда уделяет особое внимание пониманию ваших уникальных потребностей, целей и целевой аудитории. Мы глубоко погружаемся в ваш бизнес и создаем веб-решения, которые отражают вашу уникальность и помогают достичь ваших целей.</p>
                </div>
            </div>
        </div>
        <div class="inf__container-third">
            <div class="inf__container-wrapper">
                <div class="inf__info">
                    <h4 class="inf__title">Наши услуги</h4>
                    <p class="inf__text">Мы предлагаем широкий спектр услуг по разработке веб-сайтов. Независимо от того, требуется ли вам корпоративный сайт, интернет-магазин, сайт для туристического бизнеса или что-то совершенно уникальное, мы обладаем опытом и знаниями, чтобы реализовать вашу веб-идею в полноценную и функциональную реальность.</p>
                </div>
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
            <form action="" class="footer-form">
                <h2 class="footer-form__title">Задать вопрос</h2>
                <input type="text" class="footer-form__input" placeholder="Сообщение">
                <input type="text" class="footer-form__input" placeholder="Почта">
                <button class="footer-form__button"><span class="footer-form__button-text">Отправить</span></button>
            </form>
        </div>
    </footer>
    <script src="/js/burger.js"></script>
</body>
</html>