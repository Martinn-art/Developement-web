<?php


echo "<pre>";
print_r($_SERVER);
echo "</pre>";

namespace php\Classes;

require_once('třídaa.php');
$person = new Person();
$user = new User();

require_once "./autoload.php"

class User extends Person
{
    


}

spl_autoload_register(function ($name));

namespace php\php\Classes;


*//$root = $_SERVER{'DOCUMENT_ROOT'}


?>