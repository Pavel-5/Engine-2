<?php if ($isAdmin) : ?>
    <p>Пользователь: <?= $order['user'] ?></p>
    <p>Имя: <?= $order['name'] ?></p>
    <p>Телефон: <?= $order['phone'] ?></p>
    <div>Статус:
        <?php if ($action === "changeStatus") : ?>
            <form action="/order/saveStatus/?id=<?= $order['id'] ?>" method="post">
                <select name="status">
                    <option value="Новый" <?= $order['status'] === "Новый" ? "selected" : "" ?>>Новый</option>
                    <option value="Подтвержден" <?= $order['status'] === "Подтвержден" ? "selected" : "" ?>>Подтвержден</option>
                    <option value="Собран" <?= $order['status'] === "Собран" ? "selected" : "" ?>>Собран</option>
                    <option value="Передан в доставку" <?= $order['status'] === "Передан в доставку" ? "selected" : "" ?>>Передан в доставку</option>
                    <option value="Доставлен" <?= $order['status'] === "Доставлен" ? "selected" : "" ?>>Доставлен</option>
                </select>
                <input type="submit" value="Сохранить">
            </form>
        <?php else : ?>
            <?= $order['status'] ?>
            <a href="/order/changeStatus/?id=<?= $order['id'] ?>">[Изменить]</a>
        <?php endif; ?>
    </div>
    <p>Сумма: <?= $order['sum'] ?></p>
    <p>Всего товаров: <?= count($goods) ?></p>
    <hr>
    <?php if (!empty($goods)) : ?>
        <?php foreach ($goods as $value) : ?>
            <div>
                <h3><?= $value['title'] ?></h3>
                <p>Количество: <?= $value['quantity'] ?></p>
            </div>
            <hr>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Товаров нет.</p>
    <?php endif; ?>
<?php endif; ?>