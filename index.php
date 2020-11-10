<?php
include_once 'setup.php';
global $userIsLogged;
global $login;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $siteTitle ?></title>
</head>
<body>
<?php include_once 'fragments/navbar.php' ?>
<?php
$person = [
    "firstName" => "Adam",
    "lastName" => "Kowalski",
	"phoneNumber" => 234234234
];

$person['address'] = 'słoneczna 5';

class Person{
	public function __construct($name, $secondName = 'Kowalski'){
		$this->firstName = $name;
		$this->lastName = $secondName;
    }

    public function displayName(){
		echo "<p>Witaj, " . $this->firstName . " " . $this->lastName . "</p>";

	}
}

$personObj = new Person('Adam', 'Nowak');
?>
<div class="content">
	<?php if(true): ?>
		<?php $personObj->displayName(); ?>
	<?php else: ?>
	<form action="pages/o-nas.php" method="get">
		Użytkownik: <input type="text" name="user">
		Hasło: <input type="password" name="password">
		<button type="submit">Send</button>
	</form>
	<?php endif; ?>
</div>
<footer></footer>
</body>
</html>
<?php
