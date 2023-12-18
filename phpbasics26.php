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
        $a=array("程式設計","網頁設計", "美工設計","系統設計","資料庫設計");
        
        
        if (!empty($_GET['data'])) {
            $query=$_GET['data'];
            $rlen=count($a);
             $j;
            for($j=0;$j<$rlen;$j++){
                if($query==$a[$j]){
                    break;
                }
            }
        if($j<$rlen){
                        echo "有此筆資料存在";
                    } else {
                        echo "無此筆資料存在";
                    }
    
            
            
            
            
            
        }
        ?>
    </body>
</html>
