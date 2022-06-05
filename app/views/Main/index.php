<h1>Hello, Main/index</h1>

<?php if (!empty($name)): ?>
    <?php foreach ($name as $name): ?>
        <?= $name->id ?> => <?= $name->name ?><br>
    <?php endforeach; ?>
<?php endif; ?>