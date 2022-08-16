<?php require_once __DIR__ . "/public/header.php"; ?>
<section id="app">
    <div class="centered" v-cloak>
        <h1 v-cloak>Laserd PHP Framework</h1>
    </div>
    <div class="centered mt-4">
        <span>Version: 0.0.1</span>
    </div>
    <div class="centered mt-5   ">
        <code><?php echo json_encode($techs[0]) ?></code>
    </div>

</section>
<?php require_once __DIR__ . "/public/footer.php"; ?>