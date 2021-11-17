<?php if ($isAdmin) : ?>
    <?php if (!empty($orders)) : ?>
        <p><b>Всего заказов: <?= count($orders) ?></b></p>
        <div class="order-list">
            <?php foreach ($orders as $value) : ?>
                <div class="order-item">
                    <p>Пользователь: <?= $value['user'] ?></p>
                    <p>Имя: <?= $value['name'] ?></p>
                    <p>Телефон: <?= $value['phone'] ?></p>
                    <p>Статус: <?= $value['status'] ?></p>
                    <br>
                    <a href="<?= '/order/description/?id=' . $value['id'] ?>">Подробнее</a>
                    <a href="<?= '/order/delete/?id=' . $value['id'] ?>">Удалить</a>
                </div>
                <hr>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p>Заказов нет.</p>
    <?php endif; ?>
<?php endif; ?>
