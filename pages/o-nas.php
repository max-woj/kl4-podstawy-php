<?php include_once '../setup.php'; ?>
<?php include_once '../fragments/navbar.php'; ?>

<h2>hej to jest strona o nas</h2>
<div>treść</div></br>
<?php if($userIsLogged){ ?>
	<div>część dla zalogowanych użytkowników</div>
<?php } ?>
