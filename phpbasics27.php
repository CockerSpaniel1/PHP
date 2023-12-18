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
            $data=array(array(10,20,30), array(40,50,60),array(70,80,90));
            
            echo "<div>".$data[0][0].$data[0][1].$data[0][2]."<br>";
            echo $data[1][0].$data[1][1].$data[1][2]."<br>";
            echo $data[2][0].$data[2][1].$data[2][2]."<br>"."</div>";
            
            $slen =count($data);
            $elen =count($data[0]);
            
            echo "Y軸長度".$slen.", X軸長度".$elen."<br>";
            
            for($i=0;$i<$slen;$i++){
                for($j=0;$j<$elen;$j++){
                    echo $data[$i][$j]."&nbsp";
                }  
            }
            echo "<hr>";
            
            $odd = "";      
            $odd_sum = 0;
            $odd_count=0;
            $even = "";
            $even_sum = 0;
            $even_count=0;
            $data=array(array(10,11,12), array(55,32,77),array(71,88,99));
            for($i=0;$i<count($data);$i++){
                for($j=0;$j<count($data[0]);$j++){
                    if ($data[$i][$j]%2 !=0){
                        $odd = $odd.$data[$i][$j]."&nbsp&nbsp&nbsp";
                        $odd_sum += $data[$i][$j];
                        $odd_count += 1;
                    }
                    else {
                        $even = $even.$data[$i][$j]."&nbsp&nbsp&nbsp";
                        $even_sum += $data[$i][$j];
                        $even_count += 1;
                    }
                }  
            }
            echo "奇數".$odd."共有".$odd_count."個&nbsp&nbsp總和".$odd_sum;
            echo "<br>";
            echo "偶數".$even."共有".$even_count."個&nbsp&nbsp總和".$even_sum;
            
//          --------------------------------------------------------------------
            echo "<hr>";
            $data=array( array(10),array(20,30), array(40,50,60));
            
       
            $slen =count($data);
            $slen1 =count($data[0]);
            $slen2 =count($data[1]);
            $slen3 =count($data[2]);
            
            echo $slen.":".$slen1."<br>";
            echo $slen.":".$slen2."<br>";
            echo $slen.":".$slen3."<br>";
            
//          --------------------------------------------------------------------
            for($i=0;$i<count($data);$i++){
                for($j=0;$j<count($data[$i]);$j++){
                    echo $data[$i][$j]."&nbsp";
                }echo "<br>";
            }
            ?>
    </body>
</html>
