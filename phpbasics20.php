<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script language="javascript">
            function fun1(){
                var score1=23;
                var score2=89;
                location.href="./phpbasics20.php?s1="+score1+"&s2="+score2;
            }
        </script>
    </head>
    <body onload="fun1()">
        <?php
        $score1=$_GET["s1"];
        $score2=$_GET["s2"];
        
        $v1=($score1>=60)?"及格":"不及格";
        $v2=($score2>=60)?"及格":"不及格";
        
        echo "分數是:".$score1." ".$v1."<p></p>";
        echo "分數是:".$score2." ".$v2."<p></p>";
        
//        echo $v1;
//        echo $v2;
        ?>
    </body>
</html>
