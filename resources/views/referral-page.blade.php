@extends('layouts.main')

@section('title', 'SaveШиес')

@section('content')

<div class="page__row">
    <main class="page__main">
        <!-- referral-page-->
        <section class="referralPage">
            <div class="referralPage__inner inner">
                <h1 class="referralPage__heading pageTitle">Вас просит сделать пожертвование</h1>
                <div class="referralPage__volunteer">
                    <!-- volunteer-card-->
                    <section class="volunteerCard volunteerCard--full">
                        <div class="volunteerCard__image">
                            <img src="{{ url(Storage::url($donor->photo)) }}" alt="Волонтер благотворительного фонда SaveШиес undefined">
                        </div>
                        <div class="volunteerCard__cnt">
                            <h3 class="volunteerCard__name">{{ $donor->name }} {{ $donor->surname }}<span class="volunteerCard__tooltip" hidden>Вы перешли по ссылке от нашего волонтера. Мы не перечисляем процент волонтерам, но очень их благодарим за помощь</span>
                            </h3>
                            <div class="volunteerCard__state">
                                <div class="volunteerCard__label">Собрано</div>
                                <div class="volunteerCard__value">{{ number_format($donor->collected, 0, '.', ' ') }} ₽</div>
                            </div>
                            <div class="volunteerCard__state">
                                <div class="volunteerCard__label">Поддержали</div>
                                <div class="volunteerCard__value">{{ number_format($donor->referrals()->count(), 0, '.', ' ') }} чел</div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="referralPage__form">
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
{{--                                <label class="form__payment form__payment--card">--}}
{{--                                    <input type="radio" name="payment" value="card"><span class="form__paymentText">Банковский перевод</span>--}}
{{--                                </label>--}}
{{--                                <label class="form__payment form__payment--bitcoin">--}}
{{--                                    <input type="radio" name="payment" value="bitcoin"><span class="form__paymentText">Биткойн перевод</span>--}}
{{--                                </label>--}}
                            </div>
                        </fieldset>
                        <div class="form__item form__item--volunteer visually-hidden">
                            <div class="form__label">Кто из волонтеров направил Вас?
                                <input class="form__volunteerSelect" type="hidden" name="referrer" value="{{ $donor->id }}" readonly />
                            </div>
                        </div>
                        <label class="form__item form__item--checkbox">
                            <input type="checkbox" name="offer-agree" required><span class="form__label">Соглашаюсь с <a href="#0" target="_blank">офертой</a></span>
                        </label>
                        <label class="form__item form__item--checkbox">
                            <input type="checkbox" name="offer-agree" required><span class="form__label">Соглашаюсь на <a href="#0" target="_blank">обработку персональных данных</a></span>
                        </label>
                        <input class="form__source" hidden type="text" name="source" value="Общий фонд">
                        <div class="form__actions">
                            <button class="button form__button" type="submit">Поддержать фонд</button>
                            <a class="form__link" href="#0" target="_blank">Управлять ежемесячным платежом</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection
