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
            $mysqli= new mysqli("localhost","root","","theorydb1");
            echo "連上資料庫管理系統<br>";
            $mysqli->query("SET NAMES 'UTF8'");
            $sql="SELECT * FROM persondata1";
            //$sql = "SELECT * FROM persondata1 where 編號 >='p1002' AND 編號<='p1004'";
            $result=$mysqli->query($sql);
            echo "連到資料表";
            echo "<br>";
            $rows=mysqli_num_rows($result);
            $fields=mysqli_num_fields($result);
            
            echo "總紀錄數:".$rows."&nbsp;總欄位數".$fields."<br>";
            echo "<table border='5px' width='600px'> <tr><td colspan='5' bgcolor='lightblue'>個人基本資料</td></tr><tr>";
            
            $fn = mysqli_fetch_fields($result);
            for($u=0; $u<$fields;$u++){
                echo "<th bgcolor='pink'>".$fn[$u]->name."</th>";
            }
            
            
          
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
       

    </body>
</html>
