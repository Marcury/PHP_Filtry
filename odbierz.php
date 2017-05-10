<html>
    <head>
        <title>formularz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h4>Dane osobowe:</h4>
        <form method="get" action="odbierz.php"><p>
                Nazwisko: <input name="nazw" size="30"/><br/>
                Imię: <input name="imie" size="30"/><br/>
                Adres e-mail:<input name="email" size="30"/><br/>
                Wiek: <input name="wiek" size="30"/></p>
            <h4>Proszę zaznaczyć zamawiane produkty:</h4><p>
                <input name="tp" type="checkbox"/>turbo pascal 
                <input name="c" type="checkbox"/>c++
                <input name="java" type="checkbox"/>java <br/>
                <input type="submit" value="dodaj" name="dodaj"/>
                <input type="reset"  value="anuluj zamówienie"/>
                <input type="submit" value="Pokaz" name="Pokaz"/>
                <input type="submit"  value="Java" name="Java"/>
                <input type="submit" value="PHP" name="PHP"/>
                <input type="submit"  value="CPP" name="CPP"/>
                <input type="submit"  value="Stats" name="statystyki"/>
            </p>
<?php


function pokaz()
{  
    $osoby=file("baza.txt");
    $ile =count($osoby);
   
    for($i=0;$i<$ile;$i++)
    {
        echo $osoby[$i];
        echo "</br>";
    }
    
}

function dodaj()
{    
    global $_GET;

    $licznik=0;
    $nazw=$_GET['nazw'];
    $imie=$_GET['imie'];
    $email=$_GET['email'];
    $wiek=$_GET['wiek'];
    
   


$tekstowe=array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"));
$poprawnyWiek=array("options"=>array('min_range'=>0,'max_range'=>200));

if(!filter_var($nazw,FILTER_VALIDATE_REGEXP,$tekstowe))
{
    echo "Błędne nazwisko </br>";
}
else if(empty($_GET['nazw']))
{
    echo "Podaj Nazwisko! </br>";
}
else {  $licznik++;}


if(!filter_var($imie,FILTER_VALIDATE_REGEXP,$tekstowe))
{
    echo "Błędne imie </br>";
}
else if(empty($_GET['imie']))
{
    echo "Podaj Imie!";
}
else {  $licznik++;}



if(empty($_GET['email']) )
{
    echo "Podaj e-mail! </br>";
}
else if(!filter_input(INPUT_GET, 'email',FILTER_VALIDATE_EMAIL))
{
    echo "Błędny email </br>";
}
else {  $licznik++;}


if(!filter_var($wiek,FILTER_VALIDATE_INT,$poprawnyWiek))
{
    echo "Błędny wiek </br>";
}
else if(empty($_GET['wiek']))
{
    echo "Podaj Wiek! </br>";
}
else {  $licznik++; }


if(filter_input(INPUT_GET,"tp") || filter_input(INPUT_GET,"c") || filter_input(INPUT_GET,"java"))
{
    $licznik++;
}
else echo "Wybierz Kurs! </br>";


if($licznik==5)
{
    $dane=$nazw." ".$imie." ".$email." ".$wiek;
    if ( isset($_GET['tp'] ))$dane= $dane." TP"; 
    if ( isset($_GET['c'] )) $dane= $dane." C"; 
    if ( isset($_GET['java'] )) $dane= $dane." Java";
    $dane = $dane. PHP_EOL;
    
$file="baza.txt";
$fp=fopen($file,"a");
flock($fp, 2);
fwrite($fp, $dane);
flock($fp, 3); 
fclose($fp); 
echo "dodano poprawnie";   
}
else echo "COŚ NIE DZIAŁA";
$licznik=0;
}
function pokaz_java()
{
    $osoby=file("baza.txt");
    $ile =count($osoby);
   
    for($i=0;$i<$ile;$i++)
    {
       if(strstr($osoby[$i],"Java")!==False)
       {
               echo $osoby[$i];
               echo"</br>";
       }
    }
    
}
function pokaz_php()
{
    $osoby=file("baza.txt");
    $ile =count($osoby);
   
    for($i=0;$i<$ile;$i++)
    {
       if(strstr($osoby[$i],"TP")!==False)
       {
               echo $osoby[$i];
               echo"</br>";
       }
    }
}
function pokaz_cpp()
{
    $osoby=file("baza.txt");
    $ile =count($osoby);
   
    for($i=0;$i<$ile;$i++)
    {
       if(strstr($osoby[$i],"C")!==False)
       {
               echo $osoby[$i];
               echo"</br>";
       }
    }
}
function statystyki()
{
    $osoby=file("baza.txt");
    $ile =count($osoby);
   $starzy=0;
   $mlodzi=0;
   $pozostali=0;
    for($i=0;$i<$ile;$i++)
    {
        $osoba=explode(" ",$osoby[$i]);
       if($osoba[3]>=50)
       {
              $starzy++;
       }
       else if($osoba[3]<=18)
       {
               $mlodzi++;
       }
       else $pozostali++;
    }
    echo"Ponad 50 lat:".$starzy." Poniżej 18 lat:".$mlodzi. "  Pozostali:".$pozostali;
}
//drukuj_form();
if(filter_input (INPUT_GET,"Pokaz")) {
        pokaz();}
else if(filter_input (INPUT_GET,"Java")) {
        pokaz_java();}
else if(filter_input (INPUT_GET,"PHP")) {
        pokaz_php();}
else if(filter_input (INPUT_GET,"CPP")) {
        pokaz_cpp();}
else if(filter_input (INPUT_GET,"dodaj")) {
        dodaj();}
else if(filter_input (INPUT_GET,"statystyki")){
    statystyki();}
?>

        </form></body>
</html>