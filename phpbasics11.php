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
        // increment operator
        $x=3;
        echo $x++;
        echo "<p></p>";
        $y=3;
        $y++;
        echo $y;
        //---------------------------------
        echo "<p></p>";
        $x=3;
        echo ++$x;
        echo "<p></p>";
        $y=3;
        ++$y;
        echo $y;
        
        //---------------------------------
        echo "<p></p>";
        $v=5;
        $k=++$v+$v++;
        echo "1:".$k++."<p>";
        echo "2:".$k."<p>";
        echo "3:".++$k."<p>";
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>
