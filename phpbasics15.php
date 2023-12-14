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
//        for ($i=1; $i<=10; $i++){
//            echo $i."<br>";
//        };
//        
//        
//        for ($i=1; $i<=10; $i++){
//            if ($i == 6){
//            break;}
//            echo $i."<br>";
//        };
//        for ($i=1; $i<=10; $i++){
//            if ($i == 6){
//            continue;}
//            echo $i."<br>";
//        };
        
        $i=1;
        for (;; $i++){
            if ($i>10){
                break ;
            }
            echo $i."&nbsp;&nbsp;&nbsp;&nbsp;";
        };
        echo "<br>";
        //------------------------------------------------
        $j=1;
        for (;$j<=10;){
                echo $j."&nbsp;&nbsp;&nbsp;&nbsp;";
                $j=$j+1;
            };
        echo "<br>";
        //------------------------------------------------
        $h=1;
        for (;;){
            if ($h>10){
                break ;
            }
            $h = $h+1;
            echo $h."&nbsp;&nbsp;&nbsp;&nbsp;";
        };
      
        for ($i=1; $i<=10; $i++){
            if ($i%2==0){
                echo $i."&nbsp;&nbsp;&nbsp;&nbsp;";
            }
        };
        
        echo "<br>";
        for ($i=1; $i<=10; $i++){
            if ($i%2==1){
                echo $i."&nbsp;&nbsp;&nbsp;&nbsp;";
            };
        }
           

        
        
        
        
        ?>
        
        
        
    </body>
</html>
