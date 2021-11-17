<h2>Отзывы</h2>

<?php foreach ($feedbacks as $item): ?>
    <div>
        <p>
            <b><?= $item['author'] ?></b>
            <br>
            <?= $item['text'] ?></p>
    </div>
<?php endforeach; ?>