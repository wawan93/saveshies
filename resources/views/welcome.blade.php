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
            <div class="col col-md-6">
                <div class="title">
                    <h2>Русский север – не помойка!</h2>
                    <p class="info">
                        В конце лета 2018 года рядом со станцией Шиес началась вырубка леса - под строительство
                        мусорного полигона твердых бытовых отходов (ТБО) выделили 300 ГА земли.
                        Туда планируют свозить до 500 тысяч тонн твердых бытовых отходов из Москвы
                        в течение следующих 20 лет.
                    </p>
                    <div class="buttons">
                        <a href="#" class="donate">Поддержать фонд</a>
                        <a href="#" class="more-info">Узнать больше</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-6">
                <img src="/img/pic.svg">
            </div>
        </div>
    </div>
</div>

<div class="container active-projects" >
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
        <div class="col-6">
            <p class="about-header">О фонде</p>
            <p class="about-title">Мирный протест,
                не нарушающий
                законодательства
                страны.</p>
            <a href="#" class="more-info">Подробнее</a>
        </div>
        <div class="col-6">
            <p class="description">
                SaveШиес — благотворительный фонд помощи активистам в России.
                Мы оказываем помощь в сборе средств, консультируем и помогаем предотвратить экологическую катастрофу. Уже почти год ведётся строительство мусорного полигона в Ленском районе. Мы выступаем против этой инициативы, поскольку захоронение мусора в болотистой местности безусловно приведёт к загрязнению окружающей среды и росту заболеваемости населения.
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
        <div class="col-4">
            <img src="/img/image 15.png" alt="">
        </div>
        <div class="col-4">
            <img src="/img/image 16.png" alt="">
        </div>
        <div class="col-4">
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

        </div>
    </div>
</div>

</body>
</html>