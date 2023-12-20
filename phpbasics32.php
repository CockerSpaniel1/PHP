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
        require_once("newPHPClass.php");
        $sim6=new maxmincom();
        $b =array(12,99,3,56,85);
        $max=$sim6->maxfun1($b);
        $min=$sim6->minfun2($b);
        echo "最大值:".$max;
        echo "最小值:".$min;
        ?>
        <br>
        <?php 
            class A{
                public function fun1(){
                    return 100;
                }
            }
            class B extends A{
                public function fun1(){
                    return 300;}
            }
            
            $sim9 = new B();
            $t=$sim9->fun1();
            echo $t;
        ?>
        
        <!--------------------------------------------------------------------->
        <br>
        <?php 
            class theory1{
                function __construct(){
                    echo "父類別建構子<br>";
                }
            }
            class theory2 extends theory1{
                function __construct(){
                    parent::__construct();
                    echo "子類別建構子<br>";
                }
            
            }
            $sim10 = new theory2();
            ?>
    </body>
</html>
