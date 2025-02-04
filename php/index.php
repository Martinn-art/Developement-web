<?php

echo "Jsme PHP soubor";

$promenna = "string";
$number = 1;

$pole = 



function pozdrav ()

{

    return "hello world";

}

pozdrav();

function pozdravJmenem($name)

{
    
    return "pozdrav {$name}";

}

function pozdravJmenem(name: $name)
{
   return "pozdrav $name";


}

function pozdravJmenem(string $name,string $lastname): string
{
    return "Dobrý den, $name $lastname"; 



}

function secti($a, $b, $c): void

{
 return $a  + $b + $c;


}

secti("Ahoj", "Jak", [1, 'sododfjf']);

const MOje_KOnstanta = 100;|

// totoje koment

/*
více řádkový komentář

h
hash_hkdf
*/



function secti(int|string $c = NULL): string|int

{

    return $a + $b + $c;
}


secti("AHOJ," "JAK")

$pole = ['jedna', 'dvě'] //indexovane pole

$associativniPole = [

     'name' 


]

$pole[0];

$associativniPole['role'];

$multidimenziuonalniPole = [
 


]

$hodnota = 7


if($hodnota > 9) {

    echo "Hodnota je větší";
    

    }else 
    echo "hodnota je menší"

    {
  =>




}



class Objekt01

{
    public $name =  "Tomáš";
    public $lastname = "ZAHA";

    public function pozdrav()


    {
        return "Ahoj ja jsem $this->lastname";



    }
}



$Objekt01 = new Person();

echo $Objekt01->name;
echo $objekt01->pozdrav();
 

new Object01()-


$tom = new Person ("Tomáš", "Zacharowski");
$martin = new Person ("martin", "Netolciký")

public function _construct($name, $lastname)
{
    $this->name = $name;
    $this->lastname = $lastname;

public function zamávej()

{
 echo "papa";


}

}

echo $tom->name;
echo $martin->name;
echo $naty->pozdrav()

$tom->zamavej()

class user extends Person
 {
    
    ,
}


$user = (new user("Josef", "Kořenář"))->name;

echo $user->name

public function pozdrav(): string
{

    return "jsem přepsaná metoda"


}

echo $user->name;
$user

echo"<pre>";
var_dump($_SERVER);
echo"</pre>";


print_r($_Server);

print_r($_GET);

print_r($_POST);



$_SERVER;
$_POST;
$_GET;
$_REQUEST;

