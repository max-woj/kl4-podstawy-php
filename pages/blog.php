<?php include_once '../setup.php'; ?>
<?php include_once '../fragments/navbar.php'; ?>
<?php
global $link;

$result = $link->query("SELECT * FROM blog_post");
?>
<ul>


<?php while($row = $result->fetch_assoc()): ?>

    <li>
        <form action="/pages/confirm-delete.php" method="post">
            <input value="<?= $row['id'] ?>" name="pId" type="hidden"/>
            <input value="<?= $row['title'] ?>" name="title" type="hidden"/>
            <input value="<?= $row['body'] ?>" name="body" type="hidden"/>
        <button type="submit">X</button>
        <button type="submit" formaction="/pages/edit-post.php">Edytuj</button>
        <strong><?= $row['title'] ?></strong>
        <div><?= $row['body'] ?></div>
        </form>
    </li>

<?php endwhile; ?>

</ul>
