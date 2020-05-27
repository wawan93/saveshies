@extends('layouts.main')

@section('title', 'Шиес | Главная')

@section('content')
    <div class="page__row">
        <main class="page__main">
            <div class="loadPhoto">
                <div class="loadPhoto__inner inner">
                    <h1 class="loadPhoto__heading pageTitle">Загрузите Ваше фото</h1>
                    <div class="loadPhoto__body">
                        <p>Ваше фото будет отображено на странице поддержавших наш фонд публично. Вы
                            можете перетащить фото на область со штриховкой или загрузить фото с
                            вконтакте</p>
                    </div>
                    <form class="loadPhoto__form" method="post" enctype="multipart/form-data" action="/donate/upload-photo">
                        @csrf
                        <div class="loadPhoto__imgZone">
                            <div class="loadPhoto__image">
                                <img src="/files/photo-placeholder.svg" alt="">
                            </div>
                            <div class="loadPhoto__name">Алексей Македонский</div>
                            <div class="loadPhoto__buttons">
                                <button disabled class="loadPhoto__uploadBtn loadPhoto__uploadBtn--vk"
                                        type="button">Загрузить с вк
                                </button>
                                <button class="loadPhoto__uploadBtn loadPhoto__uploadBtn--comp"
                                        type="button">Загрузить с компьютера
                                </button>
                            </div>
                            <input type="file" name="file" hidden>
                        </div>
                        <div class="loadPhoto__actions">
                            <button class="button loadPhoto__button" type="submit">Резместить фото
                            </button>
                            <a class="button loadPhoto__button" href="{{ url('volunteers') }}">Не хочу размещать фото</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
