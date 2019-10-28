<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <nav class="top-nav navbar navbar-expand-md navbar-collapse">
        <a class="navbar-brand" href="/">
            <img class="logo" src="/img/logo.svg" alt="SaveШиес!">
        </a>

        <ul class="navbar-nav links justify-content-end">
            <li class="nav-item active">
                <a class="nav-link" href="#">Активные сборы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">О фонде</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Отчеты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Контакты</a>
            </li>
            <li class="nav-item donate">
                <a class="nav-link " href="#">Поддержать фонд</a>
            </li>
        </ul>
    </nav>
</div>
<div class="container">
    <div class="header">
        <div class="row">
            <div class="col-md-7">
                <div class="title">
                    <h2>Русский север – не помойка!</h2>
                    <p class="info">
                        В конце лета 2018 года рядом со станцией Шиес началась вырубка леса - под строительство
                        мусорного полигона твердых бытовых отходов (ТБО) выделили <span>300 ГА земли</span>.
                        Туда планируют свозить до <span>500 тысяч тонн</span> твердых бытовых отходов из Москвы
                        в течение <span>следующих 20 лет</span>.
                    </p>
                    <div class="buttons">
                        <a href="#" class="donate">Поддержать фонд</a>
                        <a href="#" class="more-info">Узнать больше</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img class="nature" src="/img/pic.svg">
            </div>
        </div>
    </div>
</div>

<div class="container active-projects">
    <div class="row">
        <div class="col-12">
            <h3>Активные сборы</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="project">
                <img class="project-icon" src="/img/project-icon.png">
                <h4 class="project-title">Общий фонд</h4>
                <p class="project-description">Деньги распределяются по мере необходимости на проекты.</p>
                <div class="project-collected">
                    <span class="project-collected-title">Собрано</span>
                    <span class="project-collected-sum">22 259 670 ₽</span>
                </div>
                <a class="project-link" href="#">Поддержать</a>
            </div>
        </div>
        <div class="col-4">
            <div class="project">
                <img class="project-icon" src="/img/project-icon.png">
                <h4 class="project-title">Общий фонд</h4>
                <p class="project-description">Деньги распределяются по мере необходимости на проекты.</p>
                <div class="project-collected">
                    <span class="project-collected-title">Собрано</span>
                    <span class="project-collected-sum">22 259 670 ₽</span>
                </div>
                <a class="project-link" href="#">Поддержать</a>
            </div>
        </div>
        <div class="col-4">
            <div class="project">
                <img class="project-icon" src="/img/project-icon.png">
                <h4 class="project-title">Общий фонд</h4>
                <p class="project-description">Деньги распределяются по мере необходимости на проекты.</p>
                <div class="project-collected">
                    <span class="project-collected-title">Собрано</span>
                    <span class="project-collected-sum">22 259 670 ₽</span>
                </div>
                <a class="project-link" href="#">Поддержать</a>
            </div>
        </div>
        <div class="col-4">
            <div class="project">
                <img class="project-icon" src="/img/project-icon.png">
                <h4 class="project-title">Общий фонд</h4>
                <p class="project-description">Деньги распределяются по мере необходимости на проекты.</p>
                <div class="project-collected">
                    <span class="project-collected-title">Собрано</span>
                    <span class="project-collected-sum">22 259 670 ₽</span>
                </div>
                <a class="project-link" href="#">Поддержать</a>
            </div>
        </div>
        <div class="col-4">
            <div class="project">
                <img class="project-icon" src="/img/project-icon.png">
                <h4 class="project-title">Общий фонд</h4>
                <p class="project-description">Деньги распределяются по мере необходимости на проекты.</p>
                <div class="project-collected">
                    <span class="project-collected-title">Собрано</span>
                    <span class="project-collected-sum">22 259 670 ₽</span>
                </div>
                <a class="project-link" href="#">Поддержать</a>
            </div>
        </div>
        <div class="col-4">
            <div class="project">
                <img class="project-icon" src="/img/project-icon.png">
                <h4 class="project-title">Общий фонд</h4>
                <p class="project-description">Деньги распределяются по мере необходимости на проекты.</p>
                <div class="project-collected">
                    <span class="project-collected-title">Собрано</span>
                    <span class="project-collected-sum">22 259 670 ₽</span>
                </div>
                <a class="project-link" href="#">Поддержать</a>
            </div>
        </div>
    </div>
</div>

<div class="container about">
    <div class="row">
        <div class="col-md-5">
            <p class="about-header">— О фонде</p>
            <h4 class="about-title">Мирный протест,<br>
                не нарушающий<br>
                законодательства<br>
                страны.</h4>
            <div class="more-info"><a href="#">Подробнее</a></div>
        </div>
        <div class="col-7">
            <p class="description">
                SaveШиес — благотворительный фонд помощи активистам в России.
                Мы оказываем помощь в сборе средств, консультируем и помогаем предотвратить экологическую катастрофу.
                Уже почти год ведётся строительство мусорного полигона в Ленском районе. Мы выступаем против этой
                инициативы, поскольку захоронение мусора в болотистой местности безусловно приведёт к загрязнению
                окружающей среды и росту заболеваемости населения.
            </p>
            <h4 class="goals-title">Основные цели:</h4>
            <ul class="goals">
                <li>Переход на новую систему обращения с отходами</li>
                <li>Рекультивация действующих полигонов</li>
                <li>Переход на новую систему обращения с отходами</li>
            </ul>
        </div>
    </div>
</div>

<div class="container gallery">
    <div class="row">
        <div class="col-12">
            <img src="/img/image 15.png" alt="">
            <img src="/img/image 16.png" alt="">
            <img src="/img/image 17.png" alt="">
        </div>
    </div>
</div>

<div class="container nabl">
    <div class="row">
        <div class="col-12">
            <h3>Наблюдательный совет</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="nabl-photos">
                <div class="nabl-photo active" href="#" data-id="1">
                    <img src="/img/nabl-photo.png">
                    <br>
                    <span>●</span>
                </div>
                <div class="nabl-photo" href="#" data-id="2">
                    <img src="/img/nabl-photo.png">
                    <br>
                    <span>●</span>
                </div>
                <div class="nabl-photo" href="#" data-id="3">
                    <img src="/img/nabl-photo.png">
                    <br>
                    <span>●</span>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="nabl-people active" data-id="1">
                <div class="nabl-info">
                    <div class="nabl-name">
                        Алексей Попов
                    </div>
                    <div class="nabl-description">
                        Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный совет
                        не может.
                    </div>
                    <div class="nabl-links">
                        <a href="#">Вконтакте</a>
                        <a href="#">Фейсбук</a>
                        <a href="#">Инстаграм</a>
                    </div>
                </div>
            </div>
            <div class="nabl-people" data-id="2">
                <div class="nabl-info">
                    <div class="nabl-name">
                        Алексей Попов
                    </div>
                    <div class="nabl-description">
                        Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный совет
                        не может.
                    </div>
                    <div class="nabl-links">
                        <a href="#">Вконтакте</a>
                        <a href="#">Фейсбук</a>
                        <a href="#">Инстаграм</a>
                    </div>
                </div>
            </div>
            <div class="nabl-people" data-id="3">
                <div class="nabl-info">
                    <div class="nabl-name">
                        Алексей Попов
                    </div>
                    <div class="nabl-description">
                        Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный совет
                        не может.
                    </div>
                    <div class="nabl-links">
                        <a href="#">Вконтакте</a>
                        <a href="#">Фейсбук</a>
                        <a href="#">Инстаграм</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <p class="description">
                Наблюдательный совет сформирован из публичных защитников Шиеса и имеет возможность наблюдать поступления
                и переводы на онлайн-кассу, банковский счёт и другие платежные сервисы, контролировать эффективность
                траты средств и проверять достоверность публичных отчётов. Влиять на приоритеты фандрайзинговых
                проектов, на их появление или удаление наблюдательный совет не может.
            </p>
        </div>
    </div>
</div>

<div class="container socials">
    <div class="row">
        <div class="col-md-7">
            <div class="info">
                <h4>Следите за нами в соцсетях</h4>
                <p>
                    Влиять на приоритеты фандрайзинговых проектов, на их появление или удаление наблюдательный совет не
                    может.
                </p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="links">
                <a href="#" class="vk">
                    <img src="/img/vk.png">
                </a>
                <a href="#" class="tg">
                    <img src="/img/telegram.png">
                </a>
                <a href="#" class="fb">
                    <img src="/img/facebook.png">
                </a>
                <a href="#" class="tw">
                    <img src="/img/twitter.png">
                </a>
            </div>
        </div>
    </div>

</div>

<footer class="container footer-nav">
    <div class="row">
        <div class="col-md-4">
            <p>
                <a class="logo" href="/">
                    <img src="/img/logo.svg" alt="SaveШиес!">
                </a>
            </p>
            <p>
                По всем вопросам обращайтесь <br>
                на <a href="mailto:save-shyes@gmail.com">save-shyes@gmail.com</a>
            </p>
        </div>
        <div class="col-md-8">
            <ul class="nav links justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Активные сборы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">О фонде</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Отчеты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<div class="container footer">
    <div class="row">
        <div class="col-12">
            <p align="center">© 2019. Проект Благотворительного фонда «SaveШиес».</p>
        </div>
    </div>
</div>

</body>
</html>
