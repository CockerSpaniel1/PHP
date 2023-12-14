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
        echo "<table border='2' width='650' height='300' >";  
        echo "<tr><td colspan='9'>九九乘法表</td></tr>"; 
        for( $i=1; $i<=9; $i++)
        { 
            echo "<tr>";
            for($j=1;$j<=9; $j++){
                echo "<td>";
                $k= $i*$j;
                echo $i."X".$j."=".$k;
                echo "</td>";         
            }
            echo "</tr>";
//          
         }
        echo "</table>"

        ?>

         
    </body>
</html>
