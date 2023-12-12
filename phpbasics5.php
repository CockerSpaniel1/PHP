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
            $k = true;
            echo("布林變數:".(bool)$k);
            echo("<p></p>");
            echo("布林變數:".(int)$k);
            echo("<p></p>");
            
            $b=gettype((bool)$k);
            $i=gettype((int)$k);
            echo($b."<br/>".$i);
            echo $k,$b;
            echo($k.$b);
            
        ?>
    </body>
</html>
