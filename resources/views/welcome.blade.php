<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-catalog.css') }}">
    <title>صفحه کاتالوگ محصولات</title>
</head>

<body>
    <header class="nav">

        <div class="right-menu">
            <div class="logo-holder">
                <img src="img/logo.webp" class="logo">
            </div>

            <div class="nav-rightmenu">
                <ul>
                    <li>سامانه آموزشی</li>
                    <li>کالج</li>
                    <li>بانک سؤالات</li>
                    <li>مسابقات</li>
                    <li>مگنت (استخدام)</li>
                </ul>
            </div>
        </div>

        <div class="nav-leftmenu">
            <button class="btn btn-primary">ورود/عضویت</button>
        </div>
    </header>

    <div class="container">
        <div class="logo-container">
            <img src="img/banner.png" class="logo-banner">
        </div>
    </div>

    <div class="cards-holder">
        <div class="line"></div>
        <a href="#" class="card">
            <img src="{{ asset('img/course/php.jpg') }}" class="card__image">
            <div class="card__content">
                <div class="card__content__title">
                    دوره PHP از صفر تا صد
                </div>
                <div class="card__content__description">
                    توی این دوره با هم زیر و بم زبان PHP رو با هم شخم میزنیم
                </div>
            </div>
        </a>
        <a href="#" class="card">
            <img src="{{ asset('img/course/laravel.png') }}" class="card__image">
            <div class="card__content">
                <div class="card__content__title">
                    دوره آموزشی Laravel
                </div>
                <div class="card__content__description">
                    توی این دوره با هم زیر و بم زبان PHP رو با هم شخم میزنیم
                </div>
            </div>
        </a>
        <a href="#" class="card">
            <img src="{{ asset('img/course/python.jpg') }}" class="card__image">
            <div class="card__content">
                <div class="card__content__title">
                    دوره Python پیشرفته
                </div>
                <div class="card__content__description">
                    توی این دوره با هم زیر و بم زبان PHP رو با هم شخم میزنیم
                </div>
            </div>
        </a>
        <a href="#" class="card">
            <img src="{{ asset('img/course/git.png') }}" class="card__image">
            <div class="card__content">
                <div class="card__content__title">
                    دوره آموزشی کار با گیت
                </div>
                <div class="card__content__description">
                    توی این دوره با هم زیر و بم زبان PHP رو با هم شخم میزنیم
                </div>
            </div>
        </a>
    </div>
</body>

</html>