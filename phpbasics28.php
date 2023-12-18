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
            $k=True;
//            $t = function_exists("fun2");
//            echo "布林".($t);
            if ($k){
                function fun2(){
                echo "歡迎光臨PHP函數世界";
                }
            }
            
            
            if (function_exists("fun2") ){
                fun2();
                
            } else {
                echo "此函數不存在";
            }
            //------------------------------------------------------------
            echo "<hr>";
            function myfun(){
                 function fun3(){
                        echo "第二層函數邏輯運算區塊";
                }     
            }
            myfun();
            if (function_exists("fun3") ){
                fun3();
                
            } else {
                echo "此函數不存在";
            }            
            //------------------------------------------------------------
            echo "<hr>";
            $total=0;
            function fun4($a,$b){
                    $total=$a+$b;
                    echo $total;
            }
            fun4(12, 45);
            //------------------------------------------------------------
            echo "<hr>";
//            function fun5($c){
//                $a=array();
//                $len=count($c);
//                for($i=0;$i<$len;$i++){
//                    $a[$i]=$c[$i]+100;
//                }
//                return $a;
//            }
            
            
            require_once "phpcom1.php";
            $b=array(12,13,14,15,16);
            $d=fun5($b);
            
             for($i=0;$i<count($d);$i++){
                 echo $d[$i]."&nbsp&nbsp&nbsp&nbsp";
             }
            
            //------------------------------------------------------------
            echo "<hr>";
             
            function fun6($d){
                    $s=$d*1.8+32;
                    return $s;
            }
            $t = fun6(30);
            echo $t;
            
            //------------------------------------------------------------
            echo "<hr>";
            
            function fun7(){
                //有static 1,2,3 沒有 > 1,1,1
                static $total=0;
                $total++;
                echo $total."<br>";
            }
            
            fun7();
            fun7();
            fun7();
            
            
        ?>
    </body>
</html>
