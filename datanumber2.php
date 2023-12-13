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
        //組合式
        $k=$_POST['t1'];
        $k = (int)$k;
        if (($k%2)==0)
        { 
            echo "偶數";
        }
        else
        { 
            echo "奇數";
        }
        ?>
        
    </body>
</html>
