<?php require_once __DIR__ . "/public/header.php"; ?>
<h1>Users
</h1>
<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->email ?></li>
    <?php endforeach; ?>
</ul>
<?php require_once __DIR__ . "/public/footer.php"; ?>