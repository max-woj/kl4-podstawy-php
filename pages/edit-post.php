<?php include_once '../setup.php'; ?>
<?php include_once '../fragments/navbar.php'; ?>
<?php
$title = $_POST['title'];
$body = $_POST['body'];
$pId = $_POST['pId'];
?>
<h2>Edytujesz post: <?= $title ?></h2>
        <form action="/actions/updatePost.php" method="post">
            <input value="<?= $pId ?>" name="pId" type="hidden"/>
            Tytuł: <input value="<?= $title ?>" name="title" type="text"/>
            Treść: <textarea name="body"><?= $body ?></textarea>
        <button type="submit">Edytuj</button>
        </form>

