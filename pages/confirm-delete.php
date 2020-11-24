<?php include_once '../setup.php'; ?>
<?php include_once '../fragments/navbar.php'; ?>
<?php
$title = $_POST['title'];
$pId = $_POST['pId'];
?>
<h2>Czy na pewno chcesz usunąć post: <?= $title ?></h2>
        <form action="/actions/deletePost.php" method="post">
            <input value="<?= $pId ?>" name="pId" type="hidden"/>
        <button type="submit">USUŃ</button>
        </form>
