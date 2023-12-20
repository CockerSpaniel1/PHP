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
            class persondata1{
                public $a=30;
            }
        ?>
        <br>
        <?php
        $sim1 = new persondata1();
        echo $sim1->a;
         ?>
        
        
        <!------------------------------------------------->
        <?php class persondata2{
            private $b = 200;
            public function fun1() {
                echo $this->b;
            }
        }
        ?>
        <br>
        <?php
            $sim2 = new persondata2();
            echo $sim2->fun1();
         ?>
        <!------------------------------------------------->
        <?php class theorydb1{
            private $a = 0;
            private $b = 0;
            private $sum = 0;
            function __construct() {
                $this-> a=30;
                $this-> b=50;
                $this-> sum = $this->a + $this->b;
            }
            function __destruct() {
                 echo "<hr>執行(最後)解構子";
                 echo $this->sum;
            }
        }
        ?>
        <br>
        <?php
            $sim2 = new theorydb1();
            
         ?>
        
        <!------------------------------------------------->
        <?php 
            class theorydb2{
                private $x;
                function __construct($s){
                    $this->x=$s;
                }
                function show1(){
                    echo $this->x;
                }
            }
        ?>
        <br>
        <?php
            $sim4 = new theorydb2(90);
            $sim4 -> show1();
            
         ?>
        
        
        <!------------------------------------------------->
        <?php 
            class theorydb3{
                private $x=array();
                function __construct($s){
                    $len1=count($s);
                    for($i=0; $i<$len1; $i++){
                        $this->x[$i]=$s[$i]+100;
                    }
                }
                function show1(){
                    return $this->x;
                }
            }
        ?>
        <br>
        <?php 
            $a=array(12, 13, 67, 43,23);
            $sim4 = new theorydb3($a);
            $b = $sim4->show1();
            $len2 = count($b);
            $i=0;
            
            while($i<$len2){
                echo $b[$i]."<br>";
                        $i=$i+1;
            }
        ?>
        
         <!------------------------------------------------->
        <?php 
            class com1{
                public $a=0;
                public $b=0;
                
                function __construct(){
                    $this->a=500;
                    $this->b=800;
                }
                
            }
            
   
            class com2{
                private $sum=0;
                public function cal(com1 $k){
                    $this->sum = $k->a + $k->b;
                }
                public function show(){
                    return $this->sum;
                }
            }
            ?>
            <br>
            
            <?php
            $kcom1=new com1();
            $kcom2=new com2();
            $kcom2->cal($kcom1);
            $total=$kcom2->show();
            echo $total;
            ?>
            
            
        <!------------------------------------------------->
        <?php 
            class simulation1{
                public function fun1(){
                    echo "函數一";
                }
                public function fun2($s){
                    echo "函數二值:".$s;
                }
                public function fun3(){
                    $t=300;
                    echo "函數三";
                    return $t;
                }
                public function fun4($a,$b){
                    $sum=$a+$b;
                    echo "函數四";
                    return $sum;
                }                
            } 
        ?>
        <br>
        <?php
        $sim5 = new simulation1();
        $sim5->fun1();
        echo "<br>";
        $sim5->fun2(60);
        echo "<br>";
        $k = $sim5->fun3();
        echo $k;
        echo "<br>";
        $p =$sim5->fun4(20,30);
        echo $p;
        ?>
            
            
    </body>
</html>
