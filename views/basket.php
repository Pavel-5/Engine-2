<h2>Корзина</h2>

<?php if (!empty($basket)): ?>
    <?php if ($isAuth): ?>
        <div class="order">
            <h3>Оформить заказ</h3>
            <form action="/order/add" method="post">
                Имя: <input type="text" name="name">
                Телефон: <input type="text" name="phone">
                <button type="submit">Оформить</button>
            </form>
        </div>
    <?php else: ?>
        <p>Для оформления заказа авторизуйтесь.</p>
    <?php endif; ?>
    <div class="basket-list">
        <?php foreach ($basket as $item): ?>
            <div class="basket-item" data-id="<?= $item['prod_id'] ?>">
                <h3><?= $item['title'] ?></h3>
                <p>price: <?= $item['price'] ?></p>
                <p>quantity: <?= $item['quantity'] ?></p>
                <button class="delete" data-id="<?= $item['prod_id'] ?>">Удалить</button>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    Корзина пуста
<?php endif; ?>
<script defer>
    let buttons = document.querySelectorAll('.delete');

    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');

            (
                async () => {
                    let basketItems = document.querySelectorAll('.basket-item');

                    let response = await fetch('/basket/delete/?id=' + id);

                    let answer = await response.json();

                    document.getElementById('count').innerText = answer.count;

                    if (answer.status === "ok")
                        basketItems.forEach((item) => {
                            if (item.getAttribute('data-id') === id) {
                                item.remove();
                            }
                        });

                    if (answer.count == 0) {
                        document.querySelector(".order").style.display = "none";
                        document.querySelector(".basket-list").textContent = "Корзина пуста";
                    }
                }
            )();
        })
    })
</script>