<!DOCTYPE html>
<html>

<head>
    <title>Шиес | Волонтерская программа</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="/css/styles.css?180">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            <button class="header__burger mobMenu__burger"><span class="visually-hidden">Меню</span><span class="icon"></span>
            </button>
        </div>
    </header>
    <div class="page__row">
        <main class="page__main">
            <!-- titer--support-->
            <section class="titer titer--support">
                <div class="titer__inner inner">
                    <h1 class="titer__heading pageTitle">Поддержать фонд</h1>
                    <div class="titer__body">
                        <p>Здравствуйте. Оформив ежемесячное пожертвование, вы помогаете активистам «SaveШиес!» в борьбе против незаконного строительства мусорного полигона, а также восстановлении леса и др.</p>
                    </div>
                    <div class="titer__form">
                        <!-- form--donate-->
                        <form class="form form--donate" method="POST" action="{{ route('donate') }}">
                            @csrf
                            <fieldset class="form__item form__item--type">
                                <legend class="form__label">Вид пожертвования</legend>
                                <div class="form__row form__row--radio">
                                    <label class="form__radio">
                                        <input type="radio" name="donate-type" value="monthly" required checked><span class="form__value">Ежемесячное</span>
                                    </label>
                                    <label class="form__radio">
                                        <input type="radio" name="donate-type" value="single" required><span class="form__value">Разовое</span>
                                    </label>
                                </div>
                                <div class="form__tip">*Ежемесячное пожертвование раз в месяц списывается с банковской карты, Яндекс кошелька или Крипто кошелька. Вы в любой момент сможете отключить его.</div>
                            </fieldset>
                            <div class="form__row form__row--amount">
                                <label class="form__item"><span class="form__label">Ваш имейл</span>
                                    <input class="form__field" type="email" name="email" required placeholder="Введите имейл" />
                                </label>
                                <fieldset class="form__item">
                                    <legend class="form__label">Сумма пожертвования</legend>
                                    <div class="form__amountWrp">
                                        <label class="form__amount form__amount--chbx">
                                            <input type="radio" name="amount-fix" value="1000"><span class="form__amountText">1000</span>
                                        </label>
                                        <label class="form__amount form__amount--chbx">
                                            <input type="radio" name="amount-fix" value="2000" checked><span class="form__amountText">2000</span>
                                        </label>
                                        <label class="form__amount form__amount--chbx">
                                            <input type="radio" name="amount-fix" value="3000"><span class="form__amountText">3000</span>
                                        </label>
                                        <label class="form__amount form__amount--input">
                                            <input class="form__field" type="text" name="amount" placeholder="Своя сумма" />
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form__row">
                                <div class="form__label">Личные данные</div>
                                <div class="form__item">
                                    <input class="form__field" type="text" name="name" required placeholder="Имя" />
                                </div>
                                <div class="form__item">
                                    <input class="form__field" type="text" name="surname" required placeholder="Фамилия" />
                                </div>
                            </div>
                            <fieldset class="form__row form__row--payment">
                                <legend class="form__label">Выберите способ оплаты</legend>
                                <div class="form__paymentWrp">
                                    <label class="form__payment form__payment--yandex">
                                        <input type="radio" name="payment" value="yandex" checked><span class="form__paymentText">Яндекс. деньги</span>
                                    </label>
                                    <label class="form__payment form__payment--card">
                                        <input type="radio" name="payment" value="card"><span class="form__paymentText">Банковский перевод</span>
                                    </label>
                                    <label class="form__payment form__payment--bitcoin">
                                        <input type="radio" name="payment" value="bitcoin"><span class="form__paymentText">Биткойн перевод</span>
                                    </label>
                                </div>
                            </fieldset>
                            <label class="form__item form__item--volunteer"><span class="form__label">Кто из волонтеров направил Вас?<span class="form__volunteerSelect">Вышел на фонд самостоятельно</span>
                  <input class="form__volunteerSelectInput" type="text" name="volunteer" hidden />
                  </span>
                            </label>
                            <label class="form__item form__item--checkbox">
                                <input type="checkbox" name="offer-agree" required><span class="form__label">Соглашаюсь с <a href="#0" target="_blank">офертой</a></span>
                            </label>
                            <label class="form__item form__item--checkbox">
                                <input type="checkbox" name="offer-agree" required><span class="form__label">Соглашаюсь на <a href="#0" target="_blank">обработку персональных данных</a></span>
                            </label>
                            <div class="form__actions">
                                <button class="button form__button" type="submit">Поддержать фонд</button>
                                <a class="form__link" href="#0" target="_blank">Управлять ежемесячным платежом</a>
                            </div>
                        </form>
                    </div>
                </div>
            </section><!-- peoples-->
            <section class="peoples">
                <div class="peoples__inner inner">
                    <h2 class="peoples__heading blockTitle">2184 человека</h2>
                    <div class="peoples__body">
                        <p>Уже оформили регулярные пожертвования. <strong>А 224 сделали это публично!</strong> <br> Если и вы неравнодушны к экологической ситуации в стране, ежемесячное пожертвование всего в 500 рублей поможет предотврадить экологическую катастрофу.</p>
                    </div>
                    <ul class="peoples__list listReset">
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-05.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-06.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-07.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-08.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-09.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-10.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-09.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-08.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-10.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-02.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-07.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                        <li class="peoples__item">
                            <div class="peoples__image">
                                <img src="/files/team/team-05.png" alt="Волонтер Алексей Попов">
                            </div>
                            <div class="peoples__name">Алексей Попов</div>
                        </li>
                    </ul>
                </div>
            </section><!-- blackBlock--support-->
            <section class="blackBlock blackBlock--support">
                <div class="blackBlock__inner inner">
                    <h2 class="blackBlock__heading blockTitle">Чтобы оказаться в этом почетном списке неравнодушных к экологии, необходимо оформить регулярное пожертвование от 500 руб, заполнив простую форму</h2>
                    <a class="button blackBlock__button" href="#0">Поддержать фонд</a>
                </div>
            </section>
        </main>
    </div><!-- footer-->
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
            <div class="modal__body">Здравствуйте. Оформив ежемесячное пожертвование, вы помогаете активистам «SaveШиес!» в борьбе против незаконного строительства мусорного полигона, а также восстановлении леса и др. Вы можете узнать больше в разделе <a href="about.html" target="_blank">о фонде</a>
            </div>
            <div class="modal__form">
                <!-- form--donate-->
                <form class="form form--donate" method="POST" action="{{ route('donate') }}">
                    @csrf
                    <fieldset class="form__item form__item--type">
                        <legend class="form__label">Вид пожертвования</legend>
                        <div class="form__row form__row--radio">
                            <label class="form__radio">
                                <input type="radio" name="donate-type" value="monthly" required checked><span class="form__value">Ежемесячное</span>
                            </label>
                            <label class="form__radio">
                                <input type="radio" name="donate-type" value="single" required><span class="form__value">Разовое</span>
                            </label>
                        </div>
                        <div class="form__tip">*Ежемесячное пожертвование раз в месяц списывается с банковской карты, Яндекс кошелька или Крипто кошелька. Вы в любой момент сможете отключить его.</div>
                    </fieldset>
                    <div class="form__row form__row--amount">
                        <label class="form__item"><span class="form__label">Ваш имейл</span>
                            <input class="form__field" type="email" name="email" required placeholder="Введите имейл" />
                        </label>
                        <fieldset class="form__item">
                            <legend class="form__label">Сумма пожертвования</legend>
                            <div class="form__amountWrp">
                                <label class="form__amount form__amount--chbx">
                                    <input type="radio" name="amount-fix" value="1000"><span class="form__amountText">1000</span>
                                </label>
                                <label class="form__amount form__amount--chbx">
                                    <input type="radio" name="amount-fix" value="2000" checked><span class="form__amountText">2000</span>
                                </label>
                                <label class="form__amount form__amount--chbx">
                                    <input type="radio" name="amount-fix" value="3000"><span class="form__amountText">3000</span>
                                </label>
                                <label class="form__amount form__amount--input">
                                    <input class="form__field" type="text" name="amount" placeholder="Своя сумма" />
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form__row">
                        <div class="form__label">Личные данные</div>
                        <div class="form__item">
                            <input class="form__field" type="text" name="name" required placeholder="Имя" />
                        </div>
                        <div class="form__item">
                            <input class="form__field" type="text" name="surname" required placeholder="Фамилия" />
                        </div>
                    </div>
                    <fieldset class="form__row form__row--payment">
                        <legend class="form__label">Выберите способ оплаты</legend>
                        <div class="form__paymentWrp">
                            <label class="form__payment form__payment--yandex">
                                <input type="radio" name="payment" value="yandex" checked><span class="form__paymentText">Яндекс. деньги</span>
                            </label>
                            <label class="form__payment form__payment--card">
                                <input type="radio" name="payment" value="card"><span class="form__paymentText">Банковский перевод</span>
                            </label>
                            <label class="form__payment form__payment--bitcoin">
                                <input type="radio" name="payment" value="bitcoin"><span class="form__paymentText">Биткойн перевод</span>
                            </label>
                        </div>
                    </fieldset>
                    <label class="form__item form__item--volunteer"><span class="form__label">Кто из волонтеров направил Вас?<span class="form__volunteerSelect">Вышел на фонд самостоятельно</span>
              <input class="form__volunteerSelectInput" type="text" name="volunteer" hidden />
              </span>
                    </label>
                    <label class="form__item form__item--checkbox">
                        <input type="checkbox" name="offer-agree" required><span class="form__label">Соглашаюсь с <a href="#0" target="_blank">офертой</a></span>
                    </label>
                    <label class="form__item form__item--checkbox">
                        <input type="checkbox" name="offer-agree" required><span class="form__label">Соглашаюсь на <a href="#0" target="_blank">обработку персональных данных</a></span>
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
<script type="text/javascript" src="/js/build.js?486"></script>
</body>

</html>
