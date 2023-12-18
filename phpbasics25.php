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
 
        
        <form id="f1" name="f1" method="post" action="<?php $_SERVER['PHP_SELF']?>">
            <?php
            $a=array("程式設計","網頁設計", "美工設計","系統設計","資料庫設計");
            if(isset($_POST['s1'])){
                if(!empty($_POST['t1']))
                {
                    $query=$_POST['t1'];
                    
                    $rlen=count($a);
                    $j;
                    for($j=0;$j<$rlen;$j++){
                        if($query==$a[$j]){
//                          echo "有此筆資料".$query."存在";
                            break;
                        }

                    }
                    if($j<$rlen){
                        echo "有此筆資料".$query."存在";
                    } else {
                        echo "無此筆資料存在";
                    }

                }else{ echo "請輸入資料";}
            }
            if (isset($_POST['r1']))
            {
                echo "";
            }

            ?>
            <table border="2" width="300">
                <tr>
                    <td>資料:</td>
                    <td><input type="text" id="t1" name="t1" size="30"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" id="s1" name="s1" value="查詢" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" id="r1" name="r1" value="清除" />
                    </td>
                </tr>
            </table>
        </form>
            
        <?php
        
        ?>
    </body>
</html>
