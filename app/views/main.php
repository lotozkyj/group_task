<?php  if(!empty($errors)): ?>
    <div class="error"><?=$errors?></div>
<?php endif;?>
<?php if(@$user===NULL):?>
    <h2>Авторизация</h2>
    <form action="/login/handle" method="post">
        <dl>
            <dt>Логин:</dt>
            <dd><input type="text" name="login"></dd>

            <dt>Пароль:</dt>
            <dd><input type="password" name="pass"></dd>
        </dl><br>
        <input type="submit" value="Войти"> <a href="/register"><button type="button">Регистрация</button></a>
    </form>
<?php else: ?>
<section class="main_menu">
    <h3>Выберите меню:</h3>
    <ul>
        <li><a href="/account">Мои ключи</a></li>
        <li><a href="/account/addkey">Добавить новый ключ</a></li>
    </ul>
</section>
<?php endif; ?>