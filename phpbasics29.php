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
        require_once "phpcom2.php";
        require_once "phpcom3.php";
        $a=array(12,34,99,3,22);
        $max=maxfun($a);
        $min=minfun($a);
            
       
        echo "最大值".$max."<br>";
        echo "最小值".$min."<br>";

        ?>
    </body>
</html>
