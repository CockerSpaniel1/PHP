<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $r=12;
         $Pi = 3.14;
   
         $circumference = (2 * $Pi * $r);
         $area = ($Pi * $r**2 );
        
         echo "圓周長 : ".$circumference;
         echo "圓面積 : ".$area;
         
         
         echo("<p>number_format</p>");         
         echo "圓周長 : ".number_format($circumference, 1);
         echo "圓面積 : ".number_format($area, 1);
         
         echo("<p>round</p>");         
         echo "圓周長 : ".round($circumference, 1);
         echo "圓面積 : ".round($area, 1);
         
         echo("<p>sprintf</p>");         
         echo "圓周長 : ".sprintf("%.1f" ,$circumference);
         echo "圓面積 : ".sprintf("%.1f" ,$area);
        
         
         
         
         
         
        ?>
    </body>
</html>
