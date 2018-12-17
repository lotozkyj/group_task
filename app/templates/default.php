<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link rel="stylesheet" href="/res/css/main.css">

</head>
<body>
<header>
    <h1>Храните Ваши ключи безопасно</h1>
    <nav>
        <ul>
            <li><a href="/">Главная</a></li>
            <?php if(@$_SESSION["user_id"]!==NULL):?>
            <li><a href="/account">Личный кабинет</a></li>
            <li><a href="/logout">Выйти</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<section>
    <div class="hellos">
        <?php if(@$user!==NULL):?>
            Добро пожаловать, <?=$user["login"]?>!
        <?php endif; ?>
    </div>
    <?=$content?>
</section>

</body>
</html>