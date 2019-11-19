@extends('layouts.main')

@section('title', 'Шиес | О фонде')

@section('content')
    <div class="page__row">
        <main class="page__main">
            <!-- titer--about-->
            <section class="titer titer--about">
                <div class="titer__inner inner">
                    <h1 class="titer__heading pageTitle">О фонде</h1>
                    <div class="titer__body">
                        <p>
                            <strong>SaveShies</strong> - сайт автономной некоммерческой организации “Шиес”, созданной в
                            ноябре 2019 года.
                        </p>
                        <p>
                            Мы занимаемся поддержкой активистов Шиеса, собираем деньги на штрафы, юридическую помощь и
                            другие нужды гражданского общества.
                        </p>
                        <p>
                            <strong>Наша стратегия</strong> заключается в публичном открытом и системном сборе средств
                            для поддержки
                            отдельных активистов и движения в целом. Мы уверены, что российское общество созрело для
                            солидарности и фандрайзинга гражданских инициатив. И когда власть применяет такой элемент
                            давления как большой штраф - задача граждан этот вопрос с повестки дня снять.
                        </p>
                        <p>
                            В истории России нечасто русские люди самоорганизовываются, но когда это происходит, то
                            поддержка самоорганизации это долг каждого, кто любит Россию, желает ей мира и процветания.
                        </p>
                        <p>
                            <strong>Наша миссия</strong> - помогать экологическим активистам и навсегда закрыть вопрос
                            мусорного полигона
                            в Шиесе.
                        </p>
                        <p>
                            Мы верим, что сообща наше общество способно противостоять небольшой и коррумпированной
                            группе сторонников строительства полигона. Россия - страна для россиян, а не для мусорной
                            мафии.
                        </p>
                    </div>
                </div>
            </section><!-- goals-->
            <section class="goals">
                <div class="goals__inner inner">
                    <h2 class="goals__heading blockTitle">Наши цели</h2>
                    <ul class="goals__list listReset">
                        <li class="goals__item">
                            <span class="goals__icon"><img src="/files/goals/new-system.svg" alt=""></span>
                            <span class="goals__title">Прекращение преследования активистов</span>
                        </li>
                        <li class="goals__item">
                            <span class="goals__icon"><img src="/files/goals/recult.svg" alt=""></span>
                            <span class="goals__title">Прекращение строительства свалки на Шиесе</span>
                        </li>
                        <li class="goals__item">
                            <span class="goals__icon"><img src="/files/goals/ban.svg" alt=""></span>
                            <span class="goals__title">Восстановление нанесенного природе ущерба </span>
                        </li>
                        <li class="goals__item">
                            <span class="goals__icon"><img src="/files/goals/new-system.svg" alt=""></span>
                            <span class="goals__title">Переход на новую систему обращения с отходами</span>
                        </li>
                        <li class="goals__item">
                            <span class="goals__icon"><img src="/files/goals/recult.svg" alt=""></span>
                            <span class="goals__title">Рекультивация действующих полигонов</span>
                        </li>
                        <li class="goals__item">
                            <span class="goals__icon"><img src="/files/goals/ban.svg" alt=""></span>
                            <span class="goals__title">Законодательный запрет ввоза отходов из других регионов</span>
                        </li>
                    </ul>
                </div>
            </section><!-- textBlock--ways-->
            <section class="textBlock">
                <div class="textBlock__inner inner">
                    <h2 class="textBlock__title blockTitle">Пути достижения</h2>
                    <div class="textBlock__body">
                        <p>Бессрочный протест или просто «Бессрочка» — это форма публичного обращения граждан к властям,
                            которые не желают слышать волю народа. Мирный протест, не нарушающий законодательства
                            страны.</p>
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
                        <p>Автономная некоммерческая организация помощи активистам «SaveШиес». ОГРН 1187700007472 от 25
                            апреля 2018 года, ИНН/КПП 7720423186 / 772001001. Юридический адрес 1111123, Москва, ул.
                            Плеханова, д 4 А, офис 43 В.</p>
                    </div>
                    <div class="textBlock__files">
                        <!-- files-->
                        <ul class="files listReset">
                            <li class="files__item">
                                <a class="files__file" href="#0">Свидетельство о внесении в единый государственный
                                    реестр юридических лиц</a>
                            </li>
                            <li class="files__item">
                                <a class="files__file" href="#0">Свидетельство о постановке на учет в налоговом органе
                                    (ИНН)</a>
                            </li>
                            <li class="files__item">
                                <a class="files__file" href="#0">Публичная оферта о заключении договора
                                    пожертвования</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
