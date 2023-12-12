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
        $score=65;
        $v=($score>=60)?"及格":"不及格";
        echo $v;
        echo("<p></p>");  
        $x=65;
        $v2=($x>=10 && $x<=100)?"範圍內":"範圍外";
        echo $v2;
        ?>
    </body>
</html>
