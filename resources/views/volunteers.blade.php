@extends('layouts.main')

@section('title', 'Шиес | Волонтерская программа')

@section('content')
    <div class="page__row">
        <main class="page__main">
            <!-- titer--volunteers-->
            <section class="titer titer--volunteers">
                <div class="titer__inner inner">
                    <h1 class="titer__heading pageTitle">Волонтерская программа</h1>
                    <div class="titer__body">
                        <p>
                            Волонтерская программа, это дополнительный инструмент для фандрайзинга. Любой желающий,
                            будь-то
                            один человек, коллектив, СМИ или предприятие, может зарегистрироваться и принять в ней
                            участие.
                            После простой регистрации волонтер получает на почту уникальные реферальные ссылки для
                            размещения в соц. сетях или на сайтах. Для жертвователя всё выглядит как обычно, но
                            поступившие
                            со ссылкой деньги засчитываются, как привлеченные волонтером.
                        </p>
                        <p>
                            Наши волонтеры не получают за свою помощь никакого финансового вознаграждения, их заслуги и
                            помощь мы будем отмечать благодарностью, упоминанием в наших соц.сетях и участием в рейтинге
                            волонтеров.
                        </p>
                    </div>
                    <div class="titer__footer">
                        <a class="button titer__button" href="#0" data-modal=".modal--reg">Стать волонтером</a>
                    </div>
                </div>
            </section><!-- volunteers-->
            <section class="volunteers">
                <div class="volunteers__inner inner">
                    <h2 class="volunteers__heading blockTitle">Лучшие волонтеры</h2>
                    <ul class="volunteers__list listReset">
                        @foreach($volunteers_select as $volunteer)
                            <li class="volunteers__item">
                                <!-- volunteer-card-->
                                <section class="volunteerCard">
                                    <div class="volunteerCard__image">
                                        <img src="{{ url(Storage::url($volunteer->photo)) }}"
                                             alt="Волонтер благотворительного фонда SaveШиес {{ $volunteer->name }} {{ $volunteer->surname }}">
                                    </div>
                                    <div class="volunteerCard__cnt">
                                        <h3 class="volunteerCard__name">
                                            <a href="{{ url('/ref/'.$volunteer->uuid) }}">{{ $volunteer->name }} {{ $volunteer->surname }}</a>
                                        </h3>
                                        <div class="volunteerCard__text">Собрано - {{ number_format($volunteer->collected, 0, '.', ' ') }} ₽</div>
                                    </div>
                                </section>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section><!-- blackBlock--reg-->
            <section class="blackBlock blackBlock--reg">
                <div class="blackBlock__inner inner">
                    <h2 class="blackBlock__heading blockTitle">Чтобы оказаться в этом почетном топе волонтеров,
                        необходимо пройти регистрацию и получить уникальную реферальную ссылку</h2>
                    <a class="button titer__button" href="#0" data-modal=".modal--reg">Стать волонтером</a>
                </div>
            </section>
        </main>
    </div>
    <!-- modal--reg-->
    <div class="modal modal--reg">
        <div class="modal__bg"></div>
        <div class="modal__inner">
            <div class="modal__content cntWrp">
                <h2 class="modal__title">Стать волонтером</h2>
                <div class="modal__body">Здравствуйте. Здравствуйте. Оформив ежемесячное пожертвование вы помогаете активистам «SaveШиес!» в борьбе против незаконного строительства мусорного полигона.</div>
                <div class="modal__form">
                    <!-- form--reg-->
                    <form class="form form--reg" method="post" enctype="multipart/form-data" action="{{ url('register-volunteer') }}">
                        @csrf
                        <div class="form__item form__item--photo">
                            <div class="form__imgWrp">
                                <img class="form__image" src="/files/photo-placeholder.svg" />
                            </div>
                            <label class="form__label">
                                <span class="form__labelTxt">Ваше фото*</span>
{{--                                <span class="form__downloadBtn form__downloadBtn--vk" disabled>Загрузить с вк</span>--}}
                                <span class="form__downloadBtn form__downloadBtn--comp">Загрузить с компьютера</span>
                                <input type="file" hidden name="photo">
                            </label>
                        </div>
                        <div class="form__row form__row--amount">
                            <label class="form__item"><span class="form__label">Ваш имейл</span>
                                <input class="form__field" type="email" name="email" required placeholder="Введите имейл" />
                            </label>
                            <fieldset class="form__item">
                                <div class="form__label">Ваш телефон</div>
                                <input class="form__field" type="tel" name="phone" required placeholder="Введите телефон" />
                            </fieldset>
                        </div>
                        <div class="form__row">
                            <div class="form__label">Полное имя</div>
                            <div class="form__item">
                                <input class="form__field" type="text" name="name" required placeholder="Имя" />
                            </div>
                            <div class="form__item">
                                <input class="form__field" type="text" name="surname" required placeholder="Фамилия" />
                            </div>
                        </div>
                        <div class="form__row">
                            <label class="form__item"><span class="form__label">Телеграм*</span>
                                <input class="form__field" type="text" name="tg" required placeholder="Имя пользователя" />
                            </label>
                            <fieldset class="form__item">
                                <div class="form__label">Вконтакте</div>
                                <input class="form__field" type="text" name="vk" placeholder="Вставьте ссылку" />
                            </fieldset>
                        </div>
                        <div class="form__row">
                            <label class="form__item"><span class="form__label">Инстаграм</span>
                                <input class="form__field" type="text" name="inst" placeholder="Имя пользователя" />
                            </label>
                            <fieldset class="form__item">
                                <div class="form__label">Фейсбук</div>
                                <input class="form__field" type="text" name="fb" placeholder="Вставьте ссылку" />
                            </fieldset>
                        </div>
                        <label class="form__item form__item--checkbox">
                            <input type="checkbox" name="offer-agree" required><span class="form__label">Соглашаюсь с <a href="#0" target="_blank">офертой</a></span>
                        </label>
                        <label class="form__item form__item--checkbox">
                            <input type="checkbox" name="offer-agree" required><span class="form__label">Соглашаюсь на <a href="#0" target="_blank">обработку персональных данных</a></span>
                        </label>
                        <div class="form__actions">
                            <button class="button form__button" type="submit">Стать волонтером</button>
                            <div class="form__footerTxt">* — Обязательные поля</div>
                        </div>
                    </form>
                </div>
                <button class="modal__close">×</button>
            </div>
        </div>
    </div>
@endsection
