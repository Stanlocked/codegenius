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
<body>
    <section class="header" id="header">
        <div class="header__wrapper">
            <nav>
                <a href="{{ route('index') }}"><img class="logo" src="/src/icons/CodeGenius.svg" alt=""></a>
                <ul class="menu">
                    <li class="menu__item"><a href="{{ route('services') }}" class="menu__link">Услуги</a></li>
                    <li class="menu__item"><a href="{{ route('case') }}" class="menu__link">Кейсы</a></li>
                    <li class="menu__item"><a href="{{ route('contact') }}" class="menu__link">Контакты</a></li>
                    <li class="menu__item"><a href="{{ route('about') }}" class="menu__link">О нас</a></li>
                    <li class="menu__item"><a href="{{ route('login') }}" class="menu__link"><img class="profile-icon" src="/src/icons/profile.svg" alt=""></a></li>
                </ul>
            </nav>
            <h1 class="title" id="title">Разработка web-сайтов с самыми креативными решениями</h1>
            <a href="" class="feedback-link">Оставить заявку</a>
        </div>
        <img class="burger-btn" id="burger-btn" src="src/icons/burgebr.svg" alt="">
        <ul class="burger-menu" id="burger-menu">
            <li class="menu__item"><a href="./index.html" class="menu__link">Главная</a></li>
            <li class="menu__item"><a href="/services.html" class="menu__link">Услуги</a></li>
            <li class="menu__item"><a href="/case.html" class="menu__link">Кейсы</a></li>
            <li class="menu__item"><a href="/contact.html" class="menu__link">Контакты</a></li>
            <li class="menu__item"><a href="/about.html" class="menu__link">О нас</a></li>
            <li class="menu__item"><a href="./avt.html" class="menu__link">Войти</a></li>
        </ul>
    </section>
    <section class="pop-serv">
        <div class="pop-serv__wrapper">
            <h2 class="pop-serv__title">Популярные услуги</h2>
            <div class="pop-serv__container">
                <div class="pop-serv__card">
                    <h3 class="pop-serv__card-title">Разработка высоконагруженных проектов</h3>
                    <p class="pop-serv__card-info">Разработка, сопровождение и развитие ИТ-проектов устойчивых к большой посещаемости и высоким нагрузкам.</p>
                    <a href="/services.html" class="pop-serv__all-serv"><img class="all-arrow" src="/src/icons/Arrow1.svg" alt=""></a>
                </div>
                <div class="pop-serv__card">
                    <h3 class="pop-serv__card-title">Разработка мобильных приложений</h3>
                    <p class="pop-serv__card-info">В условиях постоянно развивающейся доли мобильной коммерции приложения для смартфонов становятся необходимым условием для конкуренции на рынке.</p>
                    <a href="/services.html" class="pop-serv__all-serv"><img class="all-arrow" src="/src/icons/Arrow1.svg" alt=""></a>
                </div>
                <div class="pop-serv__card">
                    <h3 class="pop-serv__card-title">Разработка электронной коммерции</h3>
                    <p class="pop-serv__card-info">Разработка онлайн-магазинов с интеграцией платёжных систем и обеспечением удобного взаимодействиями с покупателями</p>
                    <a href="/services.html" class="pop-serv__all-serv"><img class="all-arrow" src="/src/icons/Arrow1.svg" alt=""></a>
                </div>
                <div class="pop-serv__card">
                    <h3 class="pop-serv__card-title">Разработка UI/UX дизайна для любой сферы</h3>
                    <p class="pop-serv__card-info">Мы уделяем внимание деталям, чтобы создать незабываемые визуальные впечатления и оптимизированный пользовательский путь.</p>
                    <a href="/services.html" class="pop-serv__all-serv"><img class="all-arrow" src="/src/icons/Arrow1.svg" alt=""></a>
                </div>
                <div class="pop-serv__card">
                    <h3 class="pop-serv__card-title">Консультации и техническая поддержка</h3>
                    <p class="pop-serv__card-info">Мы предоставляем консультации и техническую поддержку на всех этапах сотрудничества.</p>
                    <a href="/services.html" class="pop-serv__all-serv"><img class="all-arrow" src="/src/icons/Arrow1.svg" alt=""></a>
                </div>
                <div class="pop-serv__card">
                    <h3 class="pop-serv__card-title">CMS (система управления контентом)</h3>
                    <p class="pop-serv__card-info">Мы создаем сайты на популярных CMS, таких как WordPress, Joomla, Drupal и других.</p>
                    <a href="/services.html" class="pop-serv__all-serv"><img class="all-arrow" src="/src/icons/Arrow1.svg" alt=""></a>
                </div>
            </div>
            <a href="/services.html" class="pop-serv__all-serv">
                <span class="all-link">Все услуги</span><img class="all-arrow-bot" src="/src/icons/Arrow1.svg" alt="">
            </a>
        </div>
    </section>
    <section class="projects">
        <div class="projects__wrapper">
            <h2 class="projects__title">Проекты</h2>
            <div class="projects__container">
                <a href="" class="projects__project" id="pr-none"><img src="/src/img/pr1.png" alt="" class="projects__img"></a>
                <div class="projects__project-wrapper">
                    <a href="" class="projects__project"><img src="/src/img/pr2.png" alt="" class="projects__img"></a>
                    <a href="" class="projects__project"><img src="/src/img/pr3.png" alt="" class="projects__img"></a>
                </div>
            </div>
            <a href="/case.html" class="pop-serv__all-serv">
                <span class="all-link">Все проекты</span><img class="all-arrow-bot" src="/src/icons/Arrow1.svg" alt="">
            </a>
        </div>
    </section>
    <section class="slider">
        <div class="slider__track">
            <div class="slider__tracker" id="tracker">
                <div class="slider__slide slider__slide-one"><div class="overlay"></div></div>
                <div class="slider__slide slider__slide-two"><div class="overlay"></div></div>
                <div class="slider__slide slider__slide-three"><div class="overlay"></div></div>
            </div>
        </div>
        <div class="buttons">
            <button class="btn" id="left"><img class="btn__img" src="/src/icons/left.svg" alt=""></button>
            <button class="btn" id="right"><img class="btn__img" src="/src/icons/right.svg" alt=""></button>
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
    <script src="/js/main.js"></script>
    <script src="/js/slider.js"></script>
    <script src="/js/burger.js"></script>
</body>
</html>