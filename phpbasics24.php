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
        $a=array("台北","東京","北京");
        list($x, $y, $z) = $a;
        echo $x."<br>";
        echo $y."<br>";
        echo $z."<br>";
        
        
        $a=array("台灣"=>"台北", "日本"=>"東京","中國"=>"北京");
        foreach($a as $key=>$value){
            echo "鍵:".$key.",值:".$value;}
        



        ?>
    </body>
</html>
