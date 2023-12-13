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
        $k=32;
        
        if (($k%2)==0)
        { 
            echo "偶數";
        }
        else
        { 
            echo "奇數";
        }
        ?>
        
        
        <!--//拆段式--------------------------------------------------->
        <?php
        $k=33;
        
        if (($k%2)==0)
        { 
        ?>
        <!-------------------------------------------------------------->
        <font size="6" color="pink">偶數</font>
        
        <?php
        }
        else
        {
        ?>
        
        <!-------------------------------------------------------------->
        <font size="6" color="green">奇數</font>
        
        <?php
        }
        ?>
        
    </body>
</html>
