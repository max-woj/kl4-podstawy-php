<?php include_once '../setup.php'; ?>
<?php
global $link;
$postTitle = $_POST['postTitle'];
$postBody = $_POST['postBody'];
$link->query("INSERT INTO blog_post (title, body) VALUES ('{$postTitle}', '{$postBody}')");

header('Location: /pages/blog.php');
