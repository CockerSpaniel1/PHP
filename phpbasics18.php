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
        $i=1;
        $sum=0;
        while ($i<=99){    
            $sum += $i;
            $i +=2;
          
        }
        echo "1+3+...+99=".$sum;
        //-------------------------------------
        $i=2;
        $sum=0;
        do{
           $sum += $i;
           $i +=2;
        } while ($i<=100);
        echo "2+4+...+100=".$sum;
        
        
        
        ?>
    </body>
</html>
