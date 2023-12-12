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
        $id="p1001";
        $name="古力娜札";
        $birth="75/12/09";
        $blood='A';
        
        $all=$id."&nbsp;&nbsp;&nbsp;&nbsp;".$name."&nbsp;&nbsp;&nbsp;&nbsp;".$birth."&nbsp;&nbsp;&nbsp;&nbsp;".$blood;
        echo $all;
        echo"<p>------------------------------------------</p>";
        $a1112=$id."<br/>".$name."<br/>".$birth."<br/>".$blood;
        echo $a1112;
        ?>
    </body>
</html>
