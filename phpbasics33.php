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
            require_once "phpinter.php";
            class fdata5 implements sim1{
                public function input(){
                    $x=70;
                    $y=50;
                    $this->cal($x,$y);
                }
                public function cal($a,$b){
                    $sum=$a+$b;
                    $this->show($sum);
                }
                public function show($total){
                    echo $total;
                }
                
            }
        ?>
        <br>
        <?php 
        $com15 = new fdata5();
        $com15-> input();
        ?>
    </body>
</html>
