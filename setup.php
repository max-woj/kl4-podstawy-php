<?php
class Link {
    public $url;
    public $name;

    public function __construct($name, $url){
        $this->name = $name;
        $this->url = $url;
    }
}

class PageLink extends Link{
    public function __construct($name, $url){
        $this->name = $name;
        $this->url = '/pages/' . $url ;
    }
}

$siteTitle = 'Super strona testowa';
$counter = 5;
$navLinks = [
    new PageLink('O nas', 'o-nas.php'),
    new PageLink('O nas', 'o-nas.php'),
    new PageLink('O nas', 'o-nas.php'),
];
$myBooleanValue = false;

$login = $_GET['user'];
$password = $_GET['password'];
function processUser($login, $pass){
    if($pass === 'test'){
        return true;
    }
    return false;
}
$userIsLogged = processUser($login, $password);


?>
