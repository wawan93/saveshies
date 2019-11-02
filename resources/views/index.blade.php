<!DOCTYPE html>
<html>

<head>
    <title>Шиес | Главная</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="/css/styles.css?998">
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
            <button class="header__burger mobMenu__burger"><span class="visually-hidden">Меню</span><span class="icon"></span>
            </button>
            <a class="button header__button" href="#0" data-modal=".modal--donate">Поддержать фонд</a>
        </div>
    </header>
    <div class="page__row">
        <main class="page__main">
            <!-- titer-->
            <section class="titer titer--front">
                <div class="titer__inner inner">
                    <div class="titer__main">
                        <h1 class="titer__heading pageTitle">Русский Север — не помойка!</h1>
                        <div class="titer__body">
                            <p>В конце лета 2018 года рядом со станцией Шиес началась вырубка леса - под строительство мусорного полигона твердых бытовых отходов (ТБО) выделили <strong>300 ГА земли</strong>. Туда планируют свозить до <strong>500 тысяч тонн</strong> твердых бытовых отходов из Москвы в течение <strong>следующих 20 лет</strong>.</p>
                        </div>
                        <div class="titer__bodyMore">
                            <p>В помощь им недавний соцопрос, который провел «Левада-центр» по заказу движения «За права человека». Согласно опросу, 95% жителей выступают против строительства полигона для московского мусора (84% – «точно против», 11% – «скорее против»). Почти половина опрошенных – 49% – готова участвовать в согласованных акциях протеста, а 25% – и в несогласованных. Кроме того, получены такие данные: 43% жителей считает экологическую обстановку в регионе удовлетворительной, но ухудшающейся, 42% назвали её неблагоприятной; главными проблемами в обращении с отходами названы: ввоз мусора из других регионов (67%), некомпетентные действия властей (45%), отсутствие условий для раздельного сбора мусора (38%). 98%м жителей Архангельской области против ввоза мусора из других регионов России.</p>
                        </div>
                        <div class="titer__footer">
                            <a class="button titer__button" data-modal=".modal--donate" href="#0">Поддержать фонд</a>
                            <button class="titer__moreBtn" data-text-alt="Скрыть">Подробнее</button>
                        </div>
                    </div>
                    <div class="titer__image">
                        <img src="/files/shyes.svg" alt="">
                    </div>
                </div>
            </section><!-- activeDonation-->
            <section class="activeDonation" id="activeDonation">
                <div class="activeDonation__inner inner">
                    <h2 class="activeDonation__heading blockTitle">Активные сборы</h2>
                    <div class="activeDonation__scroll scroll">
                        <ul class="activeDonation__list listReset">
                            <li class="activeDonation__item">
                                <!-- mixin donation-card-->
                                <article class="donationCard">
                                    <div class="donationCard__icon">
                                        <img src="/files/donations/old-tablet.svg" alt="">
                                    </div>
                                    <div class="donationCard__cnt">
                                        <div class="donationCard__infos">
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Собрано</div>
                                                <div class="donationCard__value">22 259 670 ₽</div>
                                            </div>
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Разовая поддержка</div>
                                                <div class="donationCard__value">57 000 чел</div>
                                            </div>
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Ежемесячная поддержка</div>
                                                <div class="donationCard__value">7 120 чел</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="button donationCard__button" href="#0">Поддержать</a>
                                </article>
                            </li>
                            <li class="activeDonation__item">
                                <!-- mixin donation-card-->
                                <article class="donationCard">
                                    <div class="donationCard__icon">
                                        <img src="/files/donations/price-list.svg" alt="">
                                    </div>
                                    <div class="donationCard__cnt">
                                        <div class="donationCard__donation barLine" data-bar-from="22259670" data-bar-to="30000000">
                                            <div class="donationCard__now">22 259 670 ₽</div> из <div class="donationCard__need">30 000 000 ₽</div>
                                        </div>
                                        <div class="donationCard__infos">
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Разовая поддержка</div>
                                                <div class="donationCard__value">57 000 чел</div>
                                            </div>
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Ежемесячная поддержка</div>
                                                <div class="donationCard__value">7 120 чел</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="button donationCard__button" href="#0">Поддержать</a>
                                </article>
                            </li>
                            <li class="activeDonation__item">
                                <!-- mixin donation-card-->
                                <article class="donationCard">
                                    <div class="donationCard__icon">
                                        <img src="/files/donations/scales.svg" alt="Юридическая помощь">
                                    </div>
                                    <div class="donationCard__cnt">
                                        <h3 class="donationCard__title">Юридическая помощь</h3>
                                        <p class="donationCard__body">На оплату услуг адвокатов и юристов для активистов.</p>
                                        <div class="donationCard__infos">
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Собрано</div>
                                                <div class="donationCard__value">22 259 670 ₽</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="button donationCard__button" href="#0">Поддержать</a>
                                </article>
                            </li>
                            <li class="activeDonation__item">
                                <!-- mixin donation-card-->
                                <article class="donationCard">
                                    <div class="donationCard__icon">
                                        <img src="/files/donations/tickets.svg" alt="На билеты">
                                    </div>
                                    <div class="donationCard__cnt">
                                        <h3 class="donationCard__title">На билеты</h3>
                                        <p class="donationCard__body">Купить билет желающему присоединиться активисту.</p>
                                        <div class="donationCard__infos">
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Собрано</div>
                                                <div class="donationCard__value">22 259 670 ₽</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="button donationCard__button" href="#0">Поддержать</a>
                                </article>
                            </li>
                            <li class="activeDonation__item">
                                <!-- mixin donation-card-->
                                <article class="donationCard">
                                    <div class="donationCard__icon">
                                        <img src="/files/donations/forest.svg" alt="Восстановление леса">
                                    </div>
                                    <div class="donationCard__cnt">
                                        <h3 class="donationCard__title">Восстановление леса</h3>
                                        <p class="donationCard__body">На восстановление леса <br> после работ.</p>
                                        <div class="donationCard__infos">
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Собрано</div>
                                                <div class="donationCard__value">22 259 670 ₽</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="button donationCard__button" href="#0">Поддержать</a>
                                </article>
                            </li>
                            <li class="activeDonation__item">
                                <!-- mixin donation-card-->
                                <article class="donationCard">
                                    <div class="donationCard__icon">
                                        <img src="/files/donations/techs.svg" alt="Технические нужды">
                                    </div>
                                    <div class="donationCard__cnt">
                                        <h3 class="donationCard__title">Технические нужды</h3>
                                        <p class="donationCard__body">На покупку спутникового интернета, снегохода и другого.</p>
                                        <div class="donationCard__infos">
                                            <div class="donationCard__info barLine" data-bar-from="22259670" data-bar-to="30000000">
                                                <div class="donationCard__label">Собрано</div>
                                                <div class="donationCard__value">22 259 670 ₽</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="button donationCard__button" href="#0">Поддержать</a>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </section><!-- b-about-->
            <section class="b-about">
                <div class="b-about__inner inner">
                    <div class="b-about__titleSide">
                        <div class="b-about__upperTitle">О фонде</div>
                        <h2 class="b-about__title blockTitle">Мирный протест, не нарушающий законодательства страны.</h2>
                        <a class="button b-about__button" href="#0">Подробнее</a>
                    </div>
                    <div class="b-about__bodySide">
                        <div class="b-about__body">
                            <p>SaveШиес — благотворительный фонд помощи активистам в России. Мы оказываем помощь в сборе средств, консультируем и помогаем предотвратить экологическую катастрофу. Уже почти год ведётся строительство мусорного полигона в Ленском районе. Мы выступаем против этой инициативы, поскольку захоронение мусора в болотистой местности безусловно приведёт к загрязнению окружающей среды и росту заболеваемости населения.</p>
                        </div>
                        <div class="b-about__purpose">
                            <h3 class="b-about__purposeTitle">Основные цели:</h3>
                            <ul class="b-about__list listReset">
                                <li class="b-about__item">
                                    <a class="b-about__link" href="#0">Переход на новую систему обращения с отходами</a>
                                </li>
                                <li class="b-about__item">
                                    <a class="b-about__link" href="#0">Рекультивация действующих полигонов</a>
                                </li>
                                <li class="b-about__item">
                                    <a class="b-about__link" href="#0">Переход на новую систему обращения с отходами</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section><!-- gallery-->
            <div class="gallery">
                <div class="gallery__inner inner">
                    <ul class="gallery__slides listReset">
                        <li class="gallery__slide">
                            <a href="/files/riot/riot-01.jpg" data-fslightbox>
                                <img src="/files/riot/riot-01.jpg" alt="">
                            </a>
                        </li>
                        <li class="gallery__slide">
                            <a href="/files/riot/riot-02.jpg" data-fslightbox>
                                <img src="/files/riot/riot-02.jpg" alt="">
                            </a>
                        </li>
                        <li class="gallery__slide">
                            <a href="/files/riot/riot-03.jpg" data-fslightbox>
                                <img src="/files/riot/riot-03.jpg" alt="">
                            </a>
                        </li>
                        <li class="gallery__slide">
                            <a href="/files/riot/riot-04.jpg" data-fslightbox>
                                <img src="/files/riot/riot-04.jpg" alt="">
                            </a>
                        </li>
                        <li class="gallery__slide">
                            <a href="/files/riot/riot-01.jpg" data-fslightbox>
                                <img src="/files/riot/riot-01.jpg" alt="">
                            </a>
                        </li>
                        <li class="gallery__slide">
                            <a href="/files/riot/riot-02.jpg" data-fslightbox>
                                <img src="/files/riot/riot-02.jpg" alt="">
                            </a>
                        </li>
                        <li class="gallery__slide">
                            <a href="/files/riot/riot-03.jpg" data-fslightbox>
                                <img src="/files/riot/riot-03.jpg" alt="">
                            </a>
                        </li>
                        <li class="gallery__slide">
                            <a href="/files/riot/riot-04.jpg" data-fslightbox>
                                <img src="/files/riot/riot-04.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                    <div class="gallery__arrows">
                        <button class="gallery__arrow gallery__arrow--prev btnReset"></button>
                        <button class="gallery__arrow gallery__arrow--next btnReset"></button>
                    </div>
                </div>
            </div><!-- team-->
            <section class="team">
                <div class="team__inner inner">
                    <h2 class="team__heading blockTitle">Наблюдательный совет</h2>
                    <div class="team__people">
                        <ul class="team__images listReset">
                            <li class="team__image">
                                <img src="/files/team/team-01.png" alt="Член наблюдательного совета Алексей Попов">
                            </li>
                            <li class="team__image">
                                <img src="/files/team/team-02.png" alt="Член наблюдательного совета Петр Алексеенко">
                            </li>
                            <li class="team__image">
                                <img src="/files/team/team-03.png" alt="Член наблюдательного совета Анна Семенова">
                            </li>
                            <li class="team__image">
                                <img src="/files/team/team-04.png" alt="Член наблюдательного совета Даниил Иванов">
                            </li>
                        </ul>
                        <ul class="team__contents listReset">
                            <li class="team__content">
                                <div class="team__name">Алексей Попов</div>
                                <p class="team__personTxt">Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный совет не может.</p>
                                <ul class="team__socials listReset">
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Вконтакте</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Фейсбук</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Инстаграм</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="team__content">
                                <div class="team__name">Петр Алексеенко</div>
                                <p class="team__personTxt">Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный совет не может. Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный совет не может.</p>
                                <ul class="team__socials listReset">
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Вконтакте</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Фейсбук</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Инстаграм</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="team__content">
                                <div class="team__name">Анна Семенова</div>
                                <p class="team__personTxt">Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный совет не может.</p>
                                <ul class="team__socials listReset">
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Вконтакте</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Фейсбук</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Инстаграм</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="team__content">
                                <div class="team__name">Даниил Иванов</div>
                                <p class="team__personTxt">Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный совет не может.</p>
                                <ul class="team__socials listReset">
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Вконтакте</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Фейсбук</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="#0" target="_blank">Инстаграм</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="team__body">
                        <p>Наблюдательный совет сформирован из публичных защитников Шиеса и имеет возможность наблюдать поступления и переводы на онлайн-кассу, банковский счёт и другие платежные сервисы, контролировать эффективность траты средств и проверять достоверность публичных отчётов. Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный совет не может.</p>
                    </div>
                </div>
            </section><!-- blackBlock-->
            <section class="blackBlock blackBlock--socials" id="socials">
                <div class="blackBlock__inner inner">
                    <div class="blackBlock__main">
                        <h2 class="blackBlock__heading blockTitle">Следите за нами в соцсетях</h2>
                        <div class="blackBlock__body">
                            <p>Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный совет не может.</p>
                        </div>
                    </div>
                    <address class="blackBlock__socWrp">
                        <ul class="blackBlock__socials listReset">
                            <li class="blackBlock__social">
                                <a class="blackBlock__socLink blackBlock__socLink--vk" href="#0" target="_blank"><span class="visually-hidden">vkontakte</span>
                                </a>
                            </li>
                            <li class="blackBlock__social">
                                <a class="blackBlock__socLink blackBlock__socLink--tg" href="#0" target="_blank"><span class="visually-hidden">telegram</span>
                                </a>
                            </li>
                            <li class="blackBlock__social">
                                <a class="blackBlock__socLink blackBlock__socLink--fb" href="#0" target="_blank"><span class="visually-hidden">facebook</span>
                                </a>
                            </li>
                            <li class="blackBlock__social">
                                <a class="blackBlock__socLink blackBlock__socLink--tw" href="#0" target="_blank"><span class="visually-hidden">twitter</span>
                                </a>
                            </li>
                        </ul>
                    </address>
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
<script type="text/javascript" src="/js/build.js?587"></script>
</body>

</html>
