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
            $x=30;
            
            $t =  gettype($x);
            echo $t."<p></p>";
            
            $c =(String)$x;
            
            $p =  gettype($c);
            echo $p."<p></p>";
        ?>
    </body>
</html>
