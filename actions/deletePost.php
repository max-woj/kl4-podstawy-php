<?php include_once '../setup.php'; ?>
<?php
global $link;
$pId = $_POST['pId'];
if($pId){
    $link->query("DELETE FROM blog_post WHERE id='{$pId}'");
}
header('Location: /pages/blog.php');
