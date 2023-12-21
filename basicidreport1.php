<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script language="javascript" >
            function cfun1(){
                window.print();
            }
         </script>
    </head>
    <body onload="cfun1()">
        <table border="0" width="700">
        <?php
            $id=$_GET['tid'];
            $mysqli= new mysqli("localhost","root","A12345678","theorydb1");
            $mysqli->query("SET NAMES 'UTF8'");
            $sql = "SELECT * FROM persondata1 WHERE 編號 = '".$id."'";
            
            $result=$mysqli->query($sql);
            $rows=mysqli_num_rows($result);
            $fields=mysqli_num_fields($result);
            
            $fn=mysqli_fetch_fields($result);
            echo "<tr>";
            for($u=0; $u<$fields;$u++){
                echo "<th bgcolor='pink'>".$fn[$u]->name."</th>";
            }
            echo "</tr>";
            while ($row=mysqli_fetch_row($result)){
                echo "<tr><td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td></tr>";    
            }    
            $result->close();
            $mysqli->close();   
            
        ?>
        </table>
    </body>
</html>
