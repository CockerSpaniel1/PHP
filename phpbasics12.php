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
        // put your code here
        $x=5;
        $y=3;
        $sum = $x & $y;
        echo $sum;
        //------------------
        echo "<br/>";
        $x=5;
        $y=3;
        $sum = $x | $y;
        echo $sum;
        //------------------
        echo "<br/>";
        $x=8;
        
        $y = $x << 2;
        echo $y;
        //------------------
        echo "<br/>";
        $x=8;
        
        $y = $x >> 3;
        echo $y;
        //------------------
        echo "<br/>";
        $x=2;
        $y=5;
        $x+=++$y; //$x=$x+(++$y);
        echo ++$x;
        
        
        ?>
    </body>
</html>
