<?php require_once __DIR__ . "/public/header.php"; ?>
<h1><?= $perro ?></h1>
<ul>
    <?php foreach ($patos as $user) : ?>
        <li><?= $user->email ?></li>
    <?php endforeach; ?>
</ul>
<?php require_once __DIR__ . "/public/footer.php"; ?>