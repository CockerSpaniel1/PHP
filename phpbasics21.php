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
                console.log("執行檢查");
                var t1=document.getElementById("t1").value;
                var t2=document.getElementById("t2").value;
                if (t1!="" && t2!= ""){
                    
                    if ((t1>=1 && t1<=100) && (t2>=1 &&t2<=100)) {
                        return true;
                    } else {
                        alert("輸入不是數值或超出[0-100]範圍");
                        return false;
                    }
                } else {
                    alert("請輸入數值");
                    return false;
                }
                }        
                    
                
                
               
                
        </script>
    </head>
    <body>
        <form id="f1" name="f1" method="post" action="<?php $_SERVER['PHP_SELF'] ?>"  onsubmit="return fun1()">
            <?php  
            $k1="";
            $k2="";
            $sum="";
            
            if (isset($_POST['st1'])){
                $k1=intval($_POST['t1']);
                $k2=intval($_POST['t2']);
                $sum=$k1+$k2;
                echo "<script language='javascript'>"; 
                echo "console.log('PHP收到 計算')";
                echo "</script>";
                
            }
            if (isset($_POST['st2'])){
                $k1="";
                $k2="";
                $sum="";
                echo "<script language='javascript'>"; 
                echo "console.log('PHP收到 清除 ')";
                echo "</script>";
            }
            
        ?>
        <table border="2" width="250">
            <tr>
                <td>數值一</td>
                <td align="center">
                    <input type="text"  id="t1" name="t1" size="20" value="<?php echo $k1; ?>" />
                </td>
                
            </tr>
            <tr>
                <td>數值二</td>
                <td align="center">            
                    <input type="text"  id="t2" name="t2" size="20" value="<?php echo $k2; ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table  border="2" width="250">
                        <tr>
                            <td>
                                <input type="submit" id="st1" name="st1" value="執行" style="width:150px;height:60px"/>
                            </td>
                            <td>
                                <input type="submit"  id="st2" name="st2" value="清除" style="width:150px;height:60px"/>
                            </td>
                        </tr>
                    </table>
                </td>
               
            </tr>
            <tr>
                <td>結果</td>
                <td align="center"><input type="text"  id="t3" name="t3" size="20" value="<?php echo $sum; ?>" /></td>
                
            </tr>
    </table>
    </form>
       
    </body>
</html>
