<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/site.webmanifest">
    <link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/styles.css?94">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')

</head>

<body class="page page--front">
<div class="page__layout">
    <!-- header-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                <img src="/files/logo.svg" alt="Лототип SaveШиес">
            </a>
            <div class="header__menu mobMenu">
                <!-- menu-->
                <nav class="menu">
                    <ul class="menu__list listReset">
                        <li class="menu__item">
                            <a class="menu__link" href="/#activeDonation">Активные сборы</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="/about">О фонде</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="/volunteers">Волонтеры</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="/#socials">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <a class="button header__button" href="#0" data-modal=".modal--donate">Поддержать фонд</a>
            <button class="header__burger mobMenu__burger"><span class="visually-hidden">Меню</span><span
                    class="icon"></span>
            </button>
        </div>
    </header>
    @yield('content')
</div>
<!-- footer-->
    <footer class="footer">
        <div class="footer__inner inner">
            <div class="footer__main">
                <a class="footer__logo" href="index.html">
                    <img src="/files/logo.svg" alt="Логотип SaveШиес">
                </a>
                <address class="footer__writeUs">По всем вопросам обращайтесь на <a href="mailto:save-shyes@gmail.com">save-shyes@gmail.com</a>
                </address>
            </div>
            <div class="footer__menu">
                <!-- menu-->
                <nav class="menu">
                    <ul class="menu__list listReset">
                        <li class="menu__item">
                            <a class="menu__link" href="/#activeDonation">Активные сборы</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="/about">О фонде</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="/volunteers">Волонтеры</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="/#socials">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="footer__copyright">© 2019. Проект Благотворительного фонда «SaveШиес».</div>
    </footer>
</div><!-- modal-donate-->
<div class="modal modal--donate">
    <div class="modal__bg"></div>
    <div class="modal__inner">
        <div class="modal__content cntWrp">
            <h2 class="modal__title">Сделать пожертвование</h2>
            <div class="modal__body">Здравствуйте. Оформив ежемесячное пожертвование, вы помогаете активистам
                «SaveШиес!» в борьбе против незаконного строительства мусорного полигона, а также восстановлении леса и
                др. Вы можете узнать больше в разделе <a href="about.html" target="_blank">о фонде</a>
            </div>
            <div class="modal__form">
                <!-- form--donate-->
                <form class="form form--donate" method="POST" action="{{ route('donate') }}">
                    @csrf
                    <fieldset class="form__item form__item--type">
                        <legend class="form__label">Вид пожертвования</legend>
                        <div class="form__row form__row--radio">
                            <label class="form__radio">
                                <input type="radio" name="donate-type" value="monthly" required checked><span
                                    class="form__value">Ежемесячное</span>
                            </label>
                            <label class="form__radio">
                                <input type="radio" name="donate-type" value="single" required><span
                                    class="form__value">Разовое</span>
                            </label>
                        </div>
                        <div class="form__tip">*Ежемесячное пожертвование раз в месяц списывается с банковской карты,
                            Яндекс кошелька или Крипто кошелька. Вы в любой момент сможете отключить его.
                        </div>
                    </fieldset>
                    <div class="form__row form__row--amount">
                        <label class="form__item"><span class="form__label">Ваш имейл</span>
                            <input class="form__field" type="email" name="email" required placeholder="Введите имейл"/>
                        </label>
                        <fieldset class="form__item">
                            <legend class="form__label">Сумма пожертвования</legend>
                            <div class="form__amountWrp">
                                <label class="form__amount form__amount--chbx">
                                    <input type="radio" name="amount-fix" value="1000"><span class="form__amountText">1000</span>
                                </label>
                                <label class="form__amount form__amount--chbx">
                                    <input type="radio" name="amount-fix" value="2000" checked><span
                                        class="form__amountText">2000</span>
                                </label>
                                <label class="form__amount form__amount--chbx">
                                    <input type="radio" name="amount-fix" value="3000"><span class="form__amountText">3000</span>
                                </label>
                                <label class="form__amount form__amount--input">
                                    <input class="form__field" type="text" name="amount" placeholder="Своя сумма"/>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form__row">
                        <div class="form__label">Личные данные</div>
                        <div class="form__item">
                            <input class="form__field" type="text" name="name" required placeholder="Имя"/>
                        </div>
                        <div class="form__item">
                            <input class="form__field" type="text" name="surname" required placeholder="Фамилия"/>
                        </div>
                    </div>
                    <fieldset class="form__row form__row--payment">
                        <legend class="form__label">Выберите способ оплаты</legend>
                        <div class="form__paymentWrp">
                            <label class="form__payment form__payment--yandex">
                                <input type="radio" name="payment" value="yandex" checked><span
                                    class="form__paymentText">Яндекс. деньги</span>
                            </label>
{{--                            <label class="form__payment form__payment--card">--}}
{{--                                <input type="radio" name="payment" value="card"><span class="form__paymentText">Банковский перевод</span>--}}
{{--                            </label>--}}
{{--                            <label class="form__payment form__payment--bitcoin">--}}
{{--                                <input type="radio" name="payment" value="bitcoin"><span class="form__paymentText">Биткойн перевод</span>--}}
{{--                            </label>--}}
                        </div>
                    </fieldset>
                    <div class="form__item form__item--volunteer">
                        <div class="form__label">Кто из волонтеров направил Вас?
                            <input class="form__volunteerSelect" type="text" data-modal=".modal--selectVolunteer" value="Вышел на фонд самостоятельно" readonly />
                        </div>
                    </div>
                    <label class="form__item form__item--checkbox">
                        <input type="checkbox" name="offer-agree" required><span class="form__label">Соглашаюсь с <a
                                href="#0" target="_blank">офертой</a></span>
                    </label>
                    <label class="form__item form__item--checkbox">
                        <input type="checkbox" name="offer-agree" required><span class="form__label">Соглашаюсь на <a
                                href="#0" target="_blank">обработку персональных данных</a></span>
                    </label>
                    <div class="form__actions">
                        <button class="button form__button" type="submit">Поддержать фонд</button>
                        <a class="form__link" href="#0" target="_blank">Управлять ежемесячным платежом</a>
                    </div>
                </form>
            </div>
            <button class="modal__close">×</button>
        </div>
    </div>
</div>
<!-- modal--selectVolunteer-->
<div class="modal modal--selectVolunteer">
    <div class="modal__bg"></div>
    <div class="modal__inner">
        <div class="modal__content cntWrp">
            <h2 class="modal__title">Выберите волонтера</h2>
            <div class="modal__body">Оформив ежемесячное пожертвование вы помогаете активистам «SaveШиес!» в борьбе против незаконного строительства мусорного.</div>
            <input class="modal__search" type="text" placeholder="Введите имя" />
            <div class="modal__list">
                <ul class="volunteersList">
                    <li class="volunteersList__item"><span class="volunteersList__name">Вышел на фонд самостоятельно</span>
                    </li><!-- for i in volunteersList-->
                    <!--   +e('item')-->
                    <!--     if i.image-->
                    <!--       +e('image'): img(src=`./files/team/${i.image}` alt="")-->
                    <!--     +e('name') !{i.name}-->
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Осипов Семён</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Рымар Богдан</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Шестаков Даниил</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Герасимов Прохор</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Коцюбинский Игорь</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Кузьмин Болеслав</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Повалий Яромир</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Гайчук Устин</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Полищук Захар</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Кузнецов Назар</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Тихонов Юлий</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Виноградов Фёдор</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Терентьев Александр</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Палий Олег</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Ефремов Михаил</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Тарасюк Максим</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Рогов Жерар</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Киселёв Денис</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Спивак Хильда</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Сафонова Искра</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Комарова Ирина</span>
                    </li>
                    <li class="volunteersList__item"><span class="volunteersList__image"><img src="./files/team/team-08.png" alt=""></span><span class="volunteersList__name">Большакова Пелагея</span>
                    </li>
                </ul>
            </div>
            <div class="modal__btns">
                <button class="button modal__button modal__button--apply">Подтвердить</button>
                <button class="button modal__button modal__button--cancel">Отмена</button>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script type="text/javascript" src="/js/build.js?39"></script>
@yield('scripts')

</body>

</html>
