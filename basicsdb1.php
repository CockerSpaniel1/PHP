<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            #img1 {
                border-radius:15px 15px 0px 0px ;
            }
            
            #t1,#qt1,#qt2,#qt3,#qt4,#qt5 {
                border-radius:10px;
                background-color:#FFECEC;}
            
            #t1:hover, #qt1:hover, #qt2:hover, #qt3:hover, #qt4:hover, #qt5:hover{
                border-style:solid;
                border-width:3px;
                border-color:#ff0000;
            }
            
            #menu1 tr td:hover{
                background-color:#FF9224;
            }
        </style>
        
    </head>
    <body>
        
        <form id="f1" name="f1" method="get" action="<?php $_SERVER['PHP_SELF']?>">
        <div id="divtop" style="width:600px; height:200px"  />
            <img src="images/landscape.jpg" width="600" height="200" id="img1"/>
        </div>
        <div id="menu1" style="width:600px; height:35px; background-color:#ACD6FF;" >
          <table border='0' width='600px' height='35px'>
            <tr> 
                <td>
                    <a href="javascript:void;" class="at" onclick="rfun1()">編號報表</a>
                </td>         
                <td>
                    <a href="javascript:void;" class="at" onclick="rfun2()">姓名報表</a>
                </td>       
                <td>
                    <a href="javascript:void;" class="at" onclick="rfun3()">血型報表</a>
                </td>       
                <td>
                    <a href="javascript:void;" class="at" onclick="rfun4()">學歷報表</a>
                </td>       
                <td>
                    <a href="javascript:void;" class="at" onclick="rfun5()">區間報表</a>
                </td>       
  
            </tr>         
        </table>   
        </div>
        
            <div id="dv1" style="width:600px; height:200px; background-color:#CCF;">
        <table border='5px' width='600px' style="overflow:scroll;"> 
            
            <tr><td colspan='5' bgcolor='lightblue'>個人基本資料</td></tr><tr>
        <?php
            $id="";
            $name="";
            $birth="";
            $blood="";
            $school="";
            $mysqli= new mysqli("localhost","root","A12345678","theorydb1");
            //echo "連上資料庫管理系統<br>";
            $mysqli->query("SET NAMES 'UTF8'");
            
            if (isset($_GET['s1'])  && !empty($_GET['t1']))  {
                $sql = "SELECT * FROM persondata1 WHERE 編號 = '".$_GET['t1']."'";
                    echo "<script language='javascript'>";
                    echo "console.log('test')";
                    echo "</script>";
                        
                } else{
                    $sql="SELECT * FROM persondata1";
                    echo "<script language='javascript'>";
                    echo "console.log('test3')";
                    echo "</script>";
                }
             
            //$sql = "SELECT * FROM persondata1 where 編號 >='p1002' AND 編號<='p1004'";
            $result=$mysqli->query($sql);
            //echo "連到資料表";
            //echo "<br>";
            $rows=mysqli_num_rows($result);
            $fields=mysqli_num_fields($result);
            
            //echo "<script> location.href='basicsdb1-2.php'; </script>";     
            //echo "總紀錄數:".$rows."&nbsp;總欄位數".$fields."<br>";
            
            $fn = mysqli_fetch_fields($result);
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
            //查詢-------------------------------------------------------------
                if( isset($_GET['s1']) ){
                    $id=$row[0];
                    $name=$row[1];
                    $birth=$row[2];
                    $blood=$row[3];
                    $school=$row[4];
                 }
                 
            }
            
            $result->close();
            $mysqli->close();        
        ?>
        </div>
        <?php  
        //新增-----------------------------------------------------------------
        if ( isset($_GET['s3']) ) {
            $iid = $_GET['qt1'];
            $result = checkid($iid);
            if($result==0) {
                $iname=$_GET['qt2'];
                $ibirth=$_GET['qt3'];
                $iblood=$_GET['qt4'];
                $ischool=$_GET['qt5'];
                $sql="insert into persondata1 values('".$iid."','".$iname."','".$ibirth."','".$iblood."','".$ischool."')";
                modifydata($sql);
                }else{
                    echo "<script>";
                    echo "alert('此筆資料已存在--不可以新增')";
                    echo "</script>";
                }
            }
        //刪除-----------------------------------------------------------------   
        if ( isset($_GET['s4']) ) {
            $did = $_GET['qt1'];
            $result = checkid($did);
            if($result==1) {
                $sql="Delete from persondata1 where 編號 = '".$did."'";
                modifydata($sql);
             }else{
                echo "<script>";
                echo "alert('此筆資料不存在--不可以刪除')";
                echo "</script>";
                }
            }
            //修改-----------------------------------------------------------------
        if ( isset($_GET['s5']) ) {
            $iid = $_GET['qt1'];
            $result = checkid($iid);
            if($result!=0) {
                $iname=$_GET['qt2'];
                $ibirth=$_GET['qt3'];
                $iblood=$_GET['qt4'];
                $ischool=$_GET['qt5'];
                $sql="update persondata1 set 姓名='".$iname."',生日='".$ibirth."',血型='".$iblood."',學歷='".$ischool."' where 編號 = '".$iid."'";
                modifydata($sql);
                }else{
                    echo "<script>";
                    echo "alert('無此筆資料已存在')";
                    echo "</script>";
                }
            }
            
            
            function modifydata($sql){
                $mysqli= new mysqli("localhost","root","A12345678","theorydb1");
                $mysqli->query("SET NAMES 'UTF8'");
                $mysqli->query($sql);
                $mysqli->close();
                header("Location:basicsdb1.php");
            }
            function checkid($id){
                $mysqli= new mysqli("localhost","root","A12345678","theorydb1");
                $mysqli->query("SET NAMES 'UTF8'");
                $sql = "SELECT * FROM persondata1 WHERE 編號 = '".$id."'";
                $result=$mysqli->query($sql);
                $rows=mysqli_num_rows($result);
                echo "count:".$rows;
                if ($rows!=0){
                    return 1;
                } else{
                    return 0;
                }
            }
            ?>
                

        <table border='0' width='600px' style='margin-top:20px;'>
            <tr> 
            <td>編號查詢<input type='text' id='t1' name='t1' value='' /></td>         
            <td><input type='submit' id='s1' name='s1' value='查詢'/></td>
            <td><input type='button' id='s2' name='s2' value='清除' onclick="cleartext()"/></td>
            </tr>         
        </table>   
        
        <table border='0' width="650px" hieghit="200px" style='margin-top:20px;'>
            <tr>
                <td>編號</td>
                <td><input type='text' id='qt1' name='qt1' size="25" value="<?php echo $id;?>" /></td>
                <td>姓名</td>
                <td><input type='text' id='qt2' name='qt2' size="25"  value="<?php echo $name;?>" /></td>
            </tr>
             <tr>
                <td>生日</td>
                <td><input type='text' id='qt3' name='qt3' size="25"  value="<?php echo $birth;?>" /></td>
                <td>血型</td>
                <td><input type='text' id='qt4' name='qt4' size="25"  value="<?php echo $blood;?>" /></td>
            </tr>
            <tr>
                <td>學歷</td>
                <td><input type='text' id='qt5' name='qt5' size="25"  value="<?php echo $school;?>" /></td>
            </tr>

        </table>   
            
        <table  width='630px' style='margin-top:20px;'> 
             
            <tr>
            <td><input type="submit" id="s3" name="s3" value="新增" style="background-image:url(images/create21.png); width:120px; height:80px"/> </td>
            <td><input type="submit" id="s4" name="s4" value="刪除" style="background-image:url(images/coffee021.jpg); width:120px; height:80px"/> </td>
            <td><input type="submit" id="s5" name="s5" value="修改" style="background-image:url(images/coffee031.jpg); width:120px; height:80px"/> </td>
            <td><input type="submit" id="s6" name="s6" value="更新" style="background-image:url(images/coffee041.jpg); width:120px; height:80px"/> </td>

            </tr>   
            </table>
        </form>
        
   
    </body>
    <script language="javascript">
        function cleartext(){
            document.getElementById("t1").value="";
            document.getElementById("qt1").value="";
            document.getElementById("qt2").value="";
            document.getElementById("qt3").value="";
            document.getElementById("qt4").value="";
            document.getElementById("qt5").value="";
        };
        
        function rfun1(){
            t = prompt("請輸入欲列印id");
            if (t != null){
                location.href="basicidreport1.php?tid="+t;
            }
        }
        
        function rfun2(){
            n = prompt("請輸入欲列印姓名");
            if (n != null){
                location.href="basicidreport1.php?tid="+n;
            }
        }
        
        
    </script>
    
    
    
</html>
