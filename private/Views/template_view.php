<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>BestShop - <? echo $title; ?></title>
        <script src="/static/js/jquery-3.2.1.js"></script>
        <link rel="stylesheet" href="/static/css/style.css">
    </head>
    <body>
        <!-- Начало шапки -->
        <div class="header">
            <div id="toplogotext">Добро пожаловать в лучший интернет-магазин BestShop!</div>
        </div>
        <!-- Конец шапки -->
        <!-- Начало меню -->
        <div class="topmenu">
            <ul>
                <li class="paddingleft paddingright">
                    <a href="/">ГЛАВНАЯ</a>
                </li>
                <li class="paddingleft paddingright">
                    <a href="/catalog">КАТАЛОГ</a>
                </li>
                <li class="paddingleft paddingright">
                    <a href="/account/register">РЕГИСТРАЦИЯ</a>
                </li>
                <li class="paddingleft paddingright">
                    <a href="/account">АККАУНТ</a>
                </li>
                <li class="paddingleft paddingright">
                    <a href="/contacts">КОНТАКТЫ</a>
                </li>
            </ul>   
        </div>
        <!-- Конец меню -->
    </head>
    <body>

        <? require_once $view; ?>

    <div class="footer">
        <a href="#">web development courses 2017 - <?php echo date('Y'); ?></a>
    </div>
    <script src="/static/js/updateavatar.js"></script>
    <script src="/static/js/catalog.js"></script>
    <script src="/static/js/inputcheck.js"></script>
    <script src="/static/js/registration.js"></script>
    <script src="/static/js/auth.js"></script>
    </body>
</html>