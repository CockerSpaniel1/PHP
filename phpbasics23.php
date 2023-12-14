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
        $max=0;
        $a =array(22,6,45,88,15); 
        for($i=0;$i<count($a);$i++){
            if ($a[$i] > $max){
                echo $a[$i]." > ".$max;
                echo "&nbsp設定極大值為".$a[$i];
                $max=$a[$i];

            }else{
                echo $a[$i]." < ".$max;
                echo "&nbsp極大值仍為".$max;
            }
             echo "<br>";
        }
        
        echo "極大值最終為".$max;
        //----------------------------------------------------------------------
        echo "<hr>";
        
        $min=65535;
        $a =array(22,6,45,88,15); 
        for($i=0;$i<count($a);$i++){
            if ($a[$i] < $min){
                echo $a[$i]." < ".$min;
                echo "&nbsp設定極小值為".$a[$i];
                $min=$a[$i];

            }else{
                echo $a[$i]." < ".$min;
                echo "&nbsp極小值仍為".$min;
            }
             echo "<br>";
        }
        echo "極小值最終為".$min;
        echo "<hr>";
        ?>
        
        <?php
        //-排序--------------------------------------------------------------
        $a =array(22,6,45,88,15); 

        echo "正排序&nbsp&nbsp";
        sort($a);
        
        for($i=0;$i<count($a);$i++){
            echo $a[$i]."&nbsp";
        }
        
        echo "<hr>";
        //逆排序-------------------------------------------------------------
        echo "逆排序&nbsp&nbsp";
        rsort($a);
        
        for($i=0;$i<count($a);$i++){
            echo $a[$i]."&nbsp";
        }
        ?>
    </body>
</html>
