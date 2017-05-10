<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$zmienna1=134;
$zmienna2=67.67;
$zmienna3=1;
$zmienna4=0;
$zmienna5=true;
$zmienna6="0";
$zmienna7="Ala ma kota, a kot ma Alę";

for($i=0; $i<4;$i++)
{
    $tab1[$i]=$i+1;
}

//$tab2[];

$tab3=["zielony","czerwony","niebieski"];

$data=  date("Y/m/d");

$licznik=1;
sprawdz($zmienna1,$licznik);
$licznik++;
sprawdz($zmienna2,$licznik);
$licznik++;
sprawdz($zmienna3,$licznik);
$licznik++;
sprawdz($zmienna4,$licznik);
$licznik++;
sprawdz($zmienna5,$licznik);
$licznik++;
sprawdz($zmienna6,$licznik);
$licznik++;
sprawdz($zmienna7,$licznik);
$licznik++;

echo'<br/>';echo'<br/>';
      
if(is_array($tab1)) echo'tab1 jest tablicą <br/>'; //sprawdzanie tab1

echo'<br/>';echo'<br/>';

if(is_array($tab3)) echo'tab3 jest tablicą <br/>';        //sprawdzanie tab3



echo'<br/>';echo'<br/>';

sprawdz($data,1);

echo'<br/>';echo'<br/>';

function sprawdz($arg,$licznik)
{
    
    
    if (is_array($arg)) {
        echo "zmienna" . $licznik . " jest tablicą<br/>";
    } elseif (is_int($arg)) {
        echo 'zmienna' . $licznik . ' jest typu int<br/>';
    } elseif (is_numeric($arg)) {
        echo 'zmienna' . $licznik . ' jest typu numeric<br/>';
    } elseif (is_string($arg)) {
        echo 'zmienna' . $licznik . ' jest typu string<br/>';
    } elseif (is_bool($arg)) {
        echo 'zmienna' . $licznik . ' jest typu boolean<br/>';
    } elseif (is_object($arg)) {
        echo 'zmienna' . $licznik . ' jest obiektem<br/>';
    } else {
        echo 'zmienna' . $licznik . ' nie ma typu<br/>';
    }
}


$licznik=1;
wyswietl($zmienna1,$licznik);
$licznik++;
wyswietl($zmienna2,$licznik);
$licznik++;
wyswietl($zmienna3,$licznik);
$licznik++;
wyswietl($zmienna4,$licznik);
$licznik++;
wyswietl($zmienna5,$licznik);
$licznik++;
wyswietl($zmienna6,$licznik);
$licznik++;
wyswietl($zmienna7,$licznik);
$licznik++;

function wyswietl($arg2,$licznik)
{
    echo 'zmienna '.$licznik.' = '.$arg2.'<br/>';
}

echo'<br/>';echo'<br/>';

for($i=0; $i<4;$i++)                        //wyświetlenie tab1
{
   echo'wartość tab1 = '.$tab1[$i].'  ||  ';
}

echo'<br/>';echo'<br/>';


for($i=0; $i<3;$i++)                        //wyświetla tab3
{
    echo 'wartość tab3 = '.$tab3[$i].'  ||  ';     
}

echo'<br/>';echo'<br/>';

echo'Wynik intrukcji var_dump: <br/>';
var_dump($tab1); echo'<br/>';
var_dump($tab3);

echo'<br/>';echo'<br/>';

echo'Wynik intrukcji print_r: <br/>';
print_r($tab1); echo'<br/>';
print_r($tab3);
?>
