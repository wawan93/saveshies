<!DOCTYPE html>
<html>

<head>
    <title>Шиес | О фонде</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="/css/styles.css?800">
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
            <a class="button header__button" href="#" data-modal=".modal--donate">Поддержать фонд</a>
            <button class="header__burger mobMenu__burger"><span class="visually-hidden">Меню</span><span class="icon"></span>
            </button>
        </div>
    </header>
    <div class="page__row">
        <main class="page__main">
            <!-- titer--about-->
            <section class="titer titer--about">
                <div class="titer__inner inner">
                    <h1 class="titer__heading pageTitle">О фонде</h1>
                    <div class="titer__body">
                        <p><strong>“SaveШиес”</strong> — благотворительный фонд помощи активистам в России. <br> Мы оказываем помощь в сборе средств, консультируем и помогаем предотвратить экологическую катастрофу. Уже почти год ведётся строительство мусорного полигона в Ленском районе. Мы выступаем против этой инициативы, поскольку захоронение мусора в болотистой местности безусловно приведёт к загрязнению окружающей среды и росту заболеваемости населения.</p>
                        <p><strong>26 августа</strong> в Урдоме состоялся митинг с главным лозунгом «Руки прочь от Шиеса!». В нём приняли участие около 1500 человек. На плакатах жители сравнивали строительство полигона с геноцидом, а также требовали отставки губернатора Игоря Орлова.</p>
                        <p><strong>91 гектар</strong> этой территории — это болота глубиной более 12 метров, это место не приспособлено для строительства полигона, тем более в пять тысяч гектаров. Там берет начало большое количество ручьев и рек. Их загрязнение приведет к заражению акватории многих северных рек, что вызовет не только гибель животного мира, но и повлияет на весь Баренц-регион, а это Норвегия, Швеция, и вообще, вся Арктика.</p>
                    </div>
                </div>
            </section><!-- goals-->
            <section class="goals">
                <div class="goals__inner inner">
                    <h2 class="goals__heading blockTitle">Наши цели</h2>
                    <ul class="goals__list listReset">
                        <li class="goals__item"><span class="goals__icon"><img src="/files/goals/new-system.svg" alt=""></span><span class="goals__title">Переход на новую систему обращения с отходами</span>
                        </li>
                        <li class="goals__item"><span class="goals__icon"><img src="/files/goals/recult.svg" alt=""></span><span class="goals__title">Рекультивация действующих полигонов</span>
                        </li>
                        <li class="goals__item"><span class="goals__icon"><img src="/files/goals/ban.svg" alt=""></span><span class="goals__title">Законодательный запрет ввоза отходов из других регионов</span>
                        </li>
                    </ul>
                </div>
            </section><!-- textBlock--ways-->
            <section class="textBlock">
                <div class="textBlock__inner inner">
                    <h2 class="textBlock__title blockTitle">Пути достижения</h2>
                    <div class="textBlock__body">
                        <p>Бессрочный протест или просто «Бессрочка» — это форма публичного обращения граждан к властям, которые не желают слышать волю народа. Мирный протест, не нарушающий законодательства страны.</p>
                        <ul>
                            <li>Информирование власти о существующих проблемах и предложение способов их решения.</li>
                            <li>Информирование граждан об общественных проблемах через беседы или привлечение СМИ.</li>
                            <li>Знакомства и общение с единомышленниками.</li>
                            <li>«Перевалочные базы» для Шиеса.</li>
                        </ul>
                    </div>
                </div>
            </section><!-- textBlock--info-->
            <section class="textBlock textBlock--info">
                <div class="textBlock__inner inner">
                    <h2 class="textBlock__title blockTitle">Реквизиты и учредительные документы</h2>
                    <div class="textBlock__body">
                        <p>Автономная некоммерческая организация помощи активистам «SaveШиес». ОГРН 1187700007472 от 25 апреля 2018 года, ИНН/КПП 7720423186 / 772001001. Юридический адрес 1111123, Москва, ул. Плеханова, д 4 А, офис 43 В.</p>
                    </div>
                    <div class="textBlock__files">
                        <!-- files-->
                        <ul class="files listReset">
                            <li class="files__item">
                                <a class="files__file" href="#0">Свидетельство о внесении в единый государственный реестр юридических лиц</a>
                            </li>
                            <li class="files__item">
                                <a class="files__file" href="#0">Свидетельство о постановке на учет в налоговом органе (ИНН)</a>
                            </li>
                            <li class="files__item">
                                <a class="files__file" href="#0">Публичная оферта о заключении договора пожертвования</a>
                            </li>
                        </ul>
                    </div>
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
<script type="text/javascript" src="/js/build.js?484"></script>
</body>

</html>
