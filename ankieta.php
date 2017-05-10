   
        <?php
        $tech=["C","CPP","Java","C#","HTML","CSS","XML","PHP","JavaScript"];
        $check=["C","CPP","Java","C#","HTML","CSS","XML","PHP","JavaScript"];
        $ile= count($tech);
        
       echo '<form action="ankieta.php" method="GET">';
        for($i=0; $i<$ile; $i++)
        {
            print "<div style='width:100%;float:left'><input type='checkbox' name='$check[$i]' value='$tech[$i]'>"." ".$tech[$i];
            echo "</br>";
        }
        
        echo'<input type="submit" value="dodaj" name="dodaj"/>';
       
      
    
  if(filter_input(INPUT_GET,"dodaj")) 
{
      $wyniki=file("ankieta.txt");
      $ileWyniki=count($wyniki);
      
     // $wyswietlenie[9];
      for($i=0;$i<9;$i++)
      {
          $wyswietlenie[$i]=0;
      }
      
      for($i=0;$i<$ileWyniki;$i++)
      {
          $wyniki2=  explode(",", $wyniki[$i]);
          for($j=0;$j<9;$j++)
          {
              if($wyniki2[$j]=="1")
              {
                  $wyswietlenie[$j]++;
              }
          }
          
      }
      
echo "<table border='1'><tbody>";
echo "<tr><th> Kurs</th> ";
echo "<th>Ilość</th>";
for ( $i=0; $i<9; $i++)
{  
echo "<tr><td>$tech[$i]</td><td>$wyswietlenie[$i]</td></tr>";
}  
echo "</tbody></table>";
      
      
      
       $C=0;
       $CPP=0;
       $Java=0;
       $C2=0;
       $HTML=0;
       $CSS=0;
       $XML=0;
       $PHP=0;
       $JavaScript=0;

       
            if ( isset($_GET[$check[0]] ))$C++; 
            if ( isset($_GET[$check[1]] ))$CPP++;
            if ( isset($_GET[$check[2]] ))$Java++;
            if ( isset($_GET[$check[3]] ))$C2++;
            if ( isset($_GET[$check[4]] ))$HTML++;
            if ( isset($_GET[$check[5]] ))$CSS++;
            if ( isset($_GET[$check[6]] ))$XML++;
            if ( isset($_GET[$check[7]] ))$PHP++;
            if ( isset($_GET[$check[8]] ))$JavaScript++;
            
 $file="ankieta.txt";
$fp=fopen($file,"a");
flock($fp, 2);
fwrite($fp, $C.",");
fwrite($fp, $CPP.",");
fwrite($fp, $Java.",");
fwrite($fp, $C2.",");
fwrite($fp, $HTML.",");
fwrite($fp, $CSS.",");
fwrite($fp, $XML.",");
fwrite($fp, $PHP.",");
fwrite($fp, $JavaScript);
fwrite($fp, PHP_EOL);
flock($fp, 3); 
fclose($fp); 
echo "dodano poprawnie"; 
}    
        ?>
        