<?php

/*
    |--------------------------------------------------------------------------
    | Ukol 1 - Sloučení polí a odstranění duplicit
    |--------------------------------------------------------------------------
    | Máte dvě pole s čísly:
    | 
    |   $pole1 = [1, 2, 3, 4];
    |   $pole2 = [3, 4, 5, 6];
    |
    | Napište PHP skript, který sloučí obě pole do jednoho a odstraní duplicity
    | (tj. každé číslo se objeví jen jednou). Výsledek by měl být například:
    |   [1, 2, 3, 4, 5, 6]
*/
$pole1 = [1, 2, 3, 4];
$pole2 = [3, 4, 5, 6];




function sloucenipolibezduplicit($pole1, $pole2) {

    $sloucenepole = array_merge($pole1, $pole2);
    return array_unique($sloucenepole);


}
$vysledek = sloucenipolibezduplicit($pole1, $pole2);
print_r($vysledek);

/*
    |--------------------------------------------------------------------------
    | Ukol 2 - Převod teplot – Celsia na Fahrenheita
    |--------------------------------------------------------------------------
    | Máte pole teplot ve stupních Celsia:
    | 
    |   $celsius = [0, 20, 37, 100];
    |
    | Napište funkci celsiusToFahrenheit($c), která převádí teplotu podle vzorce:
    |       F = C * 9/5 + 32
    |
    | a vytvořte nové pole, kde budou teploty převedeny na stupně Fahrenheita.
*/



$celsius = [0, 20, 37, 100];

function celsiusToFahrenheit($c) {

  return $c *9/5 + 32;
 
}
 
echo celsiusToFahrenheit($celsius[0]);




/*
    |--------------------------------------------------------------------------
    | Ukol 3 - Vytvoření asociativního pole
    |--------------------------------------------------------------------------
    | Máte dvě pole:
    | 
    |   $klice   = ['jmeno', 'prijmeni', 'vek'];
    |   $hodnoty = ['Jan', 'Novak', 30];
    |
    | Napište PHP kód, který vytvoří asociativní pole, kde budou hodnoty z pole
    | $hodnoty přiřazeny ke klíčům z pole $klice. Očekávaný výsledek:
    |   [
    |       'jmeno'    => 'Jan',
    |       'prijmeni' => 'Novak',
    |       'vek'      => 30
    |   ]
*/
/*
$klice   = ['jmeno', 'prijmeni', 'vek'];
$hodnoty = ['Jan', 'Novak', 30];

$associativnipole [
    $klice[0] => $hodnoty[0],
    $klice[1] => $hodnoty[1],
    $klice[2] => $hodnoty[2]
];

print_r($associativnipole); 

*/
/*
    |--------------------------------------------------------------------------
    | Ukol 4 - Funkce pro výpočet čtverce čísla
    |--------------------------------------------------------------------------
    | Napište funkci ctverec($cislo), která vrátí čtverec zadaného čísla.
    |
    | Příklad:
    |   echo ctverec(4); // Výstup: 16
*/

$cislo = 5;

function ctverec (float|int $cislo): float|int {


    return $cislo * $cislo;




}

echo ctverec($cislo);




/*
    |--------------------------------------------------------------------------
    | Ukol 5 - Filtrování pole podle podmínky (použíjte foreach)
    |--------------------------------------------------------------------------
    | Máte pole čísel:
    | 
    |   $cisla = [5, 12, 18, 21, 30, 42];
    |
    | Napište PHP kód, který projde toto pole a vypíše pouze čísla, která jsou
    | větší než 20.
*/
/*$cisla = [5, 12, 18, 21, 30, 42];
    |

foreach ($cisla as $cislo) {

    if ($cislo>20) {
        echo "$cislo",
    }{
        else () 
            echo "$cislo";
        

       

        
    }


}
*/





/*
    |--------------------------------------------------------------------------
    | Ukol 6 - Kontrola, zda je vstup číslo
    |--------------------------------------------------------------------------
    | Napište funkci kontrolaCisla($hodnota), která:
    |   - Zkontroluje, zda je zadaná hodnota číslo (pomocí is_numeric()).
    |   - Pokud ano, vrátí text "Číslo je: {hodnota}".
    |   - Pokud ne, vrátí text "Zadaná hodnota není číslo.".
*/
/*$hodnota = [2];

function kontrolaCisla($hodnota = $hodnoty) {

    is_numeric($hodnoty);
    if true 


}

*/

/*
    |--------------------------------------------------------------------------
    | Ukol 7 - Vítej, uživateli!
    |--------------------------------------------------------------------------
    | Vytvořte dvě proměnné:
    | 
    |   $jmeno = "Jan";
    |   $vek   = 17;
    |
    | Napište podmínku, která:
    |   - Pokud je $vek menší než 18, vypíše "Ahoj, mladý Jan!".
    |   - Pokud je $vek 18 a více, vypíše "Vítej, Jan!".
*/

/*
    |--------------------------------------------------------------------------
    | Ukol 8 - Analýza čísla (kladné, záporné, nula)
    |--------------------------------------------------------------------------
    | Napište funkci analyzaCisla($cislo), která:
    |   - Vrátí "Číslo je kladné.", pokud je $cislo větší než 0.
    |   - Vrátí "Číslo je záporné.", pokud je $cislo menší než 0.
    |   - Vrátí "Číslo je nula.", pokud je $cislo rovno 0.
*/

/*
    |--------------------------------------------------------------------------
    | Ukol 9 - Přiřazení známky na základě bodů
    |--------------------------------------------------------------------------
    | Napište funkci prirazeniZnamky($body), která na základě počtu bodů vrátí:
    |   - "A" pro 90 a více bodů.
    |   - "B" pro 80 až 89 bodů.
    |   - "C" pro 70 až 79 bodů.
    |   - "D" pro 60 až 69 bodů.
    |   - "F" pro méně než 60 bodů.
*/

/*
    |--------------------------------------------------------------------------
    | Ukol 10 - Zdravotní stav na základě teploty a příznaků
    |--------------------------------------------------------------------------
    | Vytvořte proměnné:
    | 
    |   $teplota = 38.2;
    |   $priznaky = ['kašel', 'únava'];
    |
    | Napište podmínku, která:
    |   - Pokud je teplota vyšší než 37.5 a počet prvků v poli $priznaky je alespoň 1,
    |     vypíše "Můžeš být nemocný, poraď se s lékařem."
    |   - Jinak vypíše "Zdraví je v pořádku."
*/

/*
    |--------------------------------------------------------------------------
    | Ukol 11 - Sčítání čísel s validací vstupu
    |--------------------------------------------------------------------------
    | Napište funkci secti($a, $b), která:
    |   - Pokud jsou obě vstupní hodnoty čísla (pomocí is_numeric()), vrátí jejich součet.
    |   - Pokud některá z hodnot není číslo, vrátí text "Neplatný vstup.".
*/

?>