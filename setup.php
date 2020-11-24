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
    new PageLink('Dodaj nowy post', 'add-post.php'),
    new PageLink('Blog', 'blog.php'),
];
$myBooleanValue = false;

$login = $_POST['user'];
$password = $_POST['password'];
function processUser($login, $pass){
    if($pass === 'test'){
        return true;
    }
    return false;
}
$userIsLogged = processUser($login, $password);



$host =  '127.0.0.1';
$userName = 'root';
$password = 'root';
global $link;
/* Attempt to connect to MySQL database */
$link = mysqli_connect($host, $userName, $password, 'testzsbe');

// Check connection
if($link === false){
   echo "ERROR: Could not connect. " . mysqli_connect_error();
}
