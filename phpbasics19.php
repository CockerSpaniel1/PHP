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
        <!------------------------------------->
        <?php
            $data=300;
        ?>
        <script language="javascript">
            let d="<?php echo $data; ?>";
            alert(d);
        </script>
        
        <!------------------------------------->
        <script language="javascript">
            function fun1(){
                alert(d2);
            }
        </script>
        
        <?php 
            $data=500;
            echo "<script language='javascript'>";
            echo "let d2=".$data;
            echo "</script>";
        ?>
        <input type="button" id="bt1" name="bt1" value="確定" onclick="fun1()"/>
        
    </body>
</html>
