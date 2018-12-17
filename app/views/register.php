<h2>Регистрация</h2>

<?php  if(!empty($errors)): ?>
    <div class="error"><?=$errors?></div>
<?php endif;?>

<form action="/register/handle" method="post">
    <dl>
        <dt>Логин:</dt>
        <dd><input type="text" name="login"
            <?php if(!empty($old["login"])) echo "value='{$old["login"]}'"; ?>
            ></dd>

        <dt>Пароль:</dt>
        <dd><input type="password" name="pass"
                <?php if(!empty($old["pass"])) echo "value='{$old["pass"]}'"; ?>
            ></dd>
        <dt>Подтверждение пароля:</dt>
        <dd><input type="password" name="pass2"
                <?php if(!empty($old["pass2"])) echo "value='{$old["pass2"]}'"; ?>
            ></dd>
    </dl><br>
    <input type="submit" value="Регистрация">
</form>