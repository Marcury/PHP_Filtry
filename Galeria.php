<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
       
        <?php
        
        
        function galeria($rows, $cols)
        {
            for ($i=1; $i<=$cols; $i++)
            {
                echo "<tr>\n";
               
                 for ($j=1; $j<=$rows; $j++)
                 {
                     $obraz ="Zdjecia/indeks".$i.".jpeg";
                     echo '<td>';
                     print("<img src= '$obraz'  />");
                     echo "</td>\n";
                 }
                 
                echo "</tr>\n";
            }
        }
        print("<p>Pierwszy skrypt PHP </p> ");
       // print("<img src= 'Zdjecia/indeks1.jpeg'  />");

        galeria(3,3);
        ?>
    </body>
</html>
