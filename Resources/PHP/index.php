<?php
require __DIR__. '/autoload.php';

use App\Models


//$routes = new ROuter();

//$router->resolveURL();

//$router->callFunction();

//return view('onas.html')



//$url = $_SERVER{'REQUEST_URI'};

$routes = 
{
"/onas",
"/tym",
"/kontakt",
};

foreach ($variable as $route) {
     if($route == $url)
echo $route;
} else 
{
    echo "NOT FOUND"
}

if (in_array($url, $routes))
{

    $jmeno = Tomáš 
    require __DIR__. $url.".php";


    

}else
{

    echo "NOT FOUND 404";
}
