<?php

// Uwaga na podatności typu SQL injection! https://www.php.net/manual/en/security.database.sql-injection.php


$link = new mysqli("127.0.0.1", "root", "root", 'testzsbe');

if(!$link){
	echo "crash! " . $link->error;
	die();
}
//	echo "Connected";

$result = $link->query("SELECT * FROM users WHERE users.`username` = '{$_POST['username']}'");

$selectedUser = $result->fetch_assoc();
$logged = false;
if($selectedUser['password'] === md5($_POST['password'])){
	$logged = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
	</style>
</head>
<body>
<?php include_once 'fragments/navbar.php' ?>
<p>Strona główna</p>

</body>
</html>
