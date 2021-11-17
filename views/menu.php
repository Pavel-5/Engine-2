<?php if ($isAuth): ?>
    Добро пожаловать <?= $username ?> <a href="/auth/logout/">[Выход]</a>
<?php else: ?>
    <form action="/auth/login/" method="post">
        <input type="text" name="login" placeholder="Логин">
        <input type="text" name="pass" placeholder="Пароль">
        Save? <input type='checkbox' name='save'>
        <input type="submit" name="submit" value="Войти">
    </form>
<?php endif; ?><br>
<a href="/">Главная</a>
<a href="/product/catalog">Каталог</a>
<a href="/feedback">Отзывы</a>
<a href="/basket">Корзина(<span id="count"><?= $count ?></span>)</a>
<? if ($isAdmin) : ?>
    <a href="/admin">Админка</a>
<? endif; ?><br>