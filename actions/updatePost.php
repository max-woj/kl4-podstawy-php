<?php include_once '../setup.php'; ?>
<?php
global $link;
$pId = $_POST['pId'];
$title = $_POST['title'];
$body = $_POST['body'];
if($pId){
    $link->query("UPDATE blog_post SET title = '{$title}', body= '{$body}' WHERE id = {$pId}");
}
header('Location: /pages/blog.php');
