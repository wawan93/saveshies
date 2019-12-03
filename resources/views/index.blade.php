@extends('layouts.main')

@section('title', 'Шиес | Главная')

@section('content')
    <div class="page__row">
        <main class="page__main">
            <!-- titer-->
            <section class="titer titer--front">
                <div class="titer__inner inner">
                    <div class="titer__main">
                        <h1 class="titer__heading pageTitle">Русский Север — не помойка!</h1>
                        <div class="titer__body">
                            <p>
                                Это фандрайзинговый сайт, цель которого - удобно и прозрачно наладить финансирование
                                всех нужд, возникших из-за строительства мусорного полигона рядом со станцией Шиес.
                                Юридическая помощь экологическим активистам, сбор денег на штрафы, покупка билетов
                                желающим приехать на Шиес, рекультивация земли и другие потребности защищающих свою
                                землю граждан.
                            </p>
                        </div>
                        <div class="titer__bodyMore">
                            <p>
                                В конце лета 2018 года рядом со станцией Шиес началась вырубка леса. Под строительство
                                мусорного полигона твердых бытовых отходов выделили 300 ГА земли. Туда планируют свозить
                                до 500 тысяч тонн твердых бытовых отходов из Москвы в течение следующих 20 лет.
                                Незаконность этих действий и наплевательское отношение власти к мнению граждан вызвали
                                большой протест в Архангельской области, Республике Коми и по всей России.
                            </p>
                            <p>
                                Север самоорганизовался. С самого начала строительства полигона в лесу дежурят
                                экологические
                                активисты, мониторящие ситуацию со стройкой и сообщают обо всех происшествиях. Десятки и
                                сотни местных жителей в любое время суток готовы приехать на место стройки в случае ЧП.
                                Крупнейшие для небольших Архангельска, Северодвинска и Сыктывкара митинги сплотили
                                общество
                                и тема Шиеса не уходит с протестной повестки дня. Сторонники северян, вставших на защиту
                                своей природы, всё чаще появляются и на Московских публичных акциях, вдали от северных
                                болот.
                            </p>
                            <p>
                                Острая проблема Шиеса привлекает внимание не только россиян, на место стройки приезжают
                                журналисты со всего мира. В это время власть делает вид, что ничего не происходит и
                                строительство продолжается. В ответ на преследование активистов, обременение их большими
                                штрафами и регулярные облавы с конфискацией имущества активистов был создан этот сайт.
                            </p>

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
                                        <div class="donationCard__header">
                                            <h3 class="donationCard__title">Общий фонд</h3>
                                            <p class="donationCard__body">Деньги распределяются по мере необходимости на
                                                проекты.</p>
                                        </div>
                                        <div class="donationCard__infos">
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Собрано</div>
                                                <div class="donationCard__value">{{ number_format($totals['money'], 0, '.', ' ') }} ₽</div>
                                            </div>
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Разовая поддержка</div>
                                                <div class="donationCard__value">{{ number_format($totals['onetime_donors'], 0, '.', ' ') }} чел</div>
                                            </div>
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Ежемесячная поддержка</div>
                                                <div class="donationCard__value">{{ number_format($totals['regular_donors'], 0, '.', ' ') }} чел</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons donationCard__buttons">
                                        <a class="button buttons__button" href="#0" data-modal=".modal--donate">Поддержать</a>
                                        <a class="moreBtn buttons__moreBtn" href="{{ url('/project/main') }}">Подробнее</a>
                                    </div>
                                </article>
                            </li>
                            @foreach($projects as $project)

                            <li class="activeDonation__item">
                                <!-- mixin donation-card-->
                                <article class="donationCard">
                                    <div class="donationCard__icon">
                                        <img src="{{ url(Storage::url($project->icon)) }}" alt="">
                                    </div>
                                    <div class="donationCard__cnt">
                                        <div class="donationCard__header">
                                            <h3 class="donationCard__title">{{ $project->title }}</h3>
                                            <p class="donationCard__body">{{ $project->description }}</p>
                                        </div>
                                        <div class="donationCard__infos">
                                            <div class="donationCard__info barLine" data-bar-from="{{ $project->collected }}"
                                                 data-bar-to="{{ $project->goal }}">
                                                <div class="donationCard__now">{{ number_format($project->collected, 0, '.', ' ') }} ₽</div>
                                                из
                                                <div class="donationCard__need">{{ number_format($project->goal, 0, '.', ' ') }} ₽</div>
                                            </div>
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Разовая поддержка</div>
                                                <div class="donationCard__value">{{ number_format($project->onetime_donors, 0, '.', ' ') }} чел</div>
                                            </div>
                                            <div class="donationCard__info">
                                                <div class="donationCard__label">Ежемесячная поддержка</div>
                                                <div class="donationCard__value">{{ number_format($project->regular_donors, 0, '.', ' ') }} чел</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons donationCard__buttons">
                                        <a class="button buttons__button" href="#0" data-modal=".modal--donate">Поддержать</a>
                                        <a class="moreBtn buttons__moreBtn" href="{{ url('/project/' . $project->id) }}">Подробнее</a>
                                    </div>
                                </article>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section><!-- b-about-->
            <section class="b-about">
                <div class="b-about__inner inner">
                    <div class="b-about__titleSide">
                        <div class="b-about__upperTitle">О фонде</div>
                        <h2 class="b-about__title blockTitle">Мирный протест, не нарушающий законодательства
                            страны.</h2>
                        <a class="button b-about__button" href="/about">Подробнее</a>
                    </div>
                    <div class="b-about__bodySide">
                        <div class="b-about__body">
                            <p>SaveШиес — благотворительный фонд помощи активистам в России. Мы оказываем помощь в сборе
                                средств, консультируем и помогаем предотвратить экологическую катастрофу. Уже почти год
                                ведётся строительство мусорного полигона в Ленском районе. Мы выступаем против этой
                                инициативы, поскольку захоронение мусора в болотистой местности безусловно приведёт к
                                загрязнению окружающей среды и росту заболеваемости населения.</p>
                        </div>
                        <div class="b-about__purpose">
                            <h3 class="b-about__purposeTitle">Основные цели:</h3>
                            <ul class="b-about__list listReset">
                                <li class="b-about__item">
                                    <a class="b-about__link">Переход на новую систему обращения с отходами</a>
                                </li>
                                <li class="b-about__item">
                                    <a class="b-about__link">Рекультивация действующих полигонов</a>
                                </li>
                                <li class="b-about__item">
                                    <a class="b-about__link">Переход на новую систему обращения с отходами</a>
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
                            <img class="gallery__image" src="/files/riot/riot-01.jpg" alt=""/>
                            <div class="gallery__txt">
                                <h3 class="gallery__title">Мирный протест, не нарушающий законодательства страны.</h3>
                                <a class="button gallery__button" href="/files/riot/riot-01.jpg"
                                   data-title="Мирный протест, не нарушающий законодательства страны.">Увеличить</a>
                            </div>
                        </li>
                        <li class="gallery__slide">
                            <img class="gallery__image" src="/files/riot/riot-02.jpg" alt=""/>
                            <div class="gallery__txt">
                                <h3 class="gallery__title">Мирный протест, не нарушающий законодательства страны.</h3>
                                <a class="button gallery__button" href="/files/riot/riot-02.jpg"
                                   data-title="Мирный протест, не нарушающий законодательства страны.">Увеличить</a>
                            </div>
                        </li>
                        <li class="gallery__slide">
                            <img class="gallery__image" src="/files/riot/riot-03.jpg" alt=""/>
                            <div class="gallery__txt">
                                <h3 class="gallery__title">Мирный протест, не нарушающий законодательства страны.</h3>
                                <a class="button gallery__button" href="/files/riot/riot-03.jpg"
                                   data-title="Мирный протест, не нарушающий законодательства страны.">Увеличить</a>
                            </div>
                        </li>
                        <li class="gallery__slide">
                            <img class="gallery__image" src="/files/riot/riot-04.jpg" alt=""/>
                            <div class="gallery__txt">
                                <h3 class="gallery__title">Мирный протест, не нарушающий законодательства страны.</h3>
                                <a class="button gallery__button" href="/files/riot/riot-04.jpg"
                                   data-title="Мирный протест, не нарушающий законодательства страны.">Увеличить</a>
                            </div>
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
                                <img src="/files/team/Елена Калинина.jpeg" alt="Член наблюдательного совета Елена Калинина">
                            </li>
                            <li class="team__image">
                                <img src="/files/team/Игорь Сажин.jpeg" alt="Член наблюдательного совета Игорь Сажин">
                            </li>
                            <li class="team__image">
                                <img src="/files/team/Андрей Чураков.jpeg" alt="Член наблюдательного совета Андрей Чураков">
                            </li>
                            <li class="team__image">
                                <img src="/files/team/Олег Мандрыкин.jpeg" alt="Член наблюдательного совета Олег Мандрыкин">
                            </li>
                        </ul>
                        <ul class="team__contents listReset">
                            <li class="team__content">
                                <div class="team__name">Елена Калинина</div>
                                <p class="team__personTxt">Экоактивист, представитель инициативной группы по проведению референдума.</p>
                                <ul class="team__socials listReset">
                                    <li class="team__social">
                                        <a href="https://vk.com/id217939944" target="_blank">Вконтакте</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="https://teleg.run/Lenakalina" target="_blank">Telegram</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="team__content">
                                <div class="team__name">Игорь Сажин</div>
                                <p class="team__personTxt">Правозащитник, Коми правозащитная комиссия Мемориал</p>
                                <ul class="team__socials listReset">
                                    <li class="team__social">
                                        <a href="https://www.facebook.com/kpkmemorial" target="_blank">Фейсбук</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="https://vk.com/id2563615" target="_blank">Вконтакте</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="team__content">
                                <div class="team__name">Андрей Чураков</div>
                                <p class="team__personTxt">Координатора Комитета Гражданских Инициатив по Архангельской области</p>
                                <ul class="team__socials listReset">
                                    <li class="team__social">
                                        <a href="https://vk.com/2achurakov" target="_blank">Вконтакте</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="https://teleg.run/Churakov" target="_blank">Telegram</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="team__content">
                                <div class="team__name">Олег Мандрыкин</div>
                                <p class="team__personTxt">Активист движения "Чистый Север 29"</p>
                                <ul class="team__socials listReset">
                                    <li class="team__social">
                                        <a href="https://vk.com/variantmandrykina" target="_blank">Вконтакте</a>
                                    </li>
                                    <li class="team__social">
                                        <a href="https://teleg.run/Platan29" target="_blank">Telegram</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="team__body">
                        <p>Наблюдательный совет сформирован из публичных защитников Шиеса и имеет возможность наблюдать
                            поступления и переводы на онлайн-кассу, банковский счёт и другие платежные сервисы,
                            контролировать эффективность траты средств и проверять достоверность публичных отчётов.
                            Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный
                            совет не может.</p>
                    </div>
                </div>
            </section><!-- blackBlock-->
            <section class="blackBlock blackBlock--socials" id="socials">
                <div class="blackBlock__inner inner">
                    <div class="blackBlock__main">
                        <h2 class="blackBlock__heading blockTitle">Следите за нами в соцсетях</h2>
                        <div class="blackBlock__body">
                            <p>Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление
                                наблюдательный совет не может.</p>
                        </div>
                    </div>
                    <address class="blackBlock__socWrp">
                        <ul class="blackBlock__socials listReset">
                            <li class="blackBlock__social">
                                <a class="blackBlock__socLink blackBlock__socLink--vk" href="#0" target="_blank"><span
                                        class="visually-hidden">vkontakte</span>
                                </a>
                            </li>
                            <li class="blackBlock__social">
                                <a class="blackBlock__socLink blackBlock__socLink--tg" href="#0" target="_blank"><span
                                        class="visually-hidden">telegram</span>
                                </a>
                            </li>
                            <li class="blackBlock__social">
                                <a class="blackBlock__socLink blackBlock__socLink--fb" href="#0" target="_blank"><span
                                        class="visually-hidden">facebook</span>
                                </a>
                            </li>
                            <li class="blackBlock__social">
                                <a class="blackBlock__socLink blackBlock__socLink--tw" href="#0" target="_blank"><span
                                        class="visually-hidden">twitter</span>
                                </a>
                            </li>
                        </ul>
                    </address>
                </div>
            </section>
        </main>
    </div>
@endsection
