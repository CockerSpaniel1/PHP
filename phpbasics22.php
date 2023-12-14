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
        $k= array(12,45,67,13,89);
                
        foreach($k as $v){
            echo$v."&nbsp&nbsp";
                    }
        echo "<hr>";
        //-------------------------------------------            
        $a= array(10,12,13,44,55);
                echo$a[0]."&nbsp&nbsp";
                echo$a[1]."&nbsp&nbsp";
                echo$a[2]."&nbsp&nbsp";
                echo$a[3]."&nbsp&nbsp";
                echo$a[4]."&nbsp&nbsp";
        
        echo "<hr>" ;       
        $rlen=count($a);
        for($i=0; $i<$rlen; $i++)
        {
            echo$a[$i]."&nbsp&nbsp";
        }
        echo "<hr>" ; 
        for($i=$rlen-1; $i>=0; $i--)
        {
            echo$a[$i]."&nbsp&nbsp";
        }
        
        //-a(ascii=97) to z----------------------------------------     
        echo "<hr>" ; 
        $a= array();
        for($i=97; $i<=122; $i++)
        {
            $a[$i-97]= chr($i);
        }
        $rlen=count($a);
        for($i=0; $i<$rlen; $i++)
        {
            echo$a[$i]."&nbsp&nbsp";
        }
        
        
         //-a to z----------------------------------------  
        $str1="";
        $str2="";
         
        for($i=0; $i<$rlen; $i++)
        {
            if(($i%2 ==0))
            {
               $str1 = $str1.$a[$i]."&nbsp&nbsp";
            }else{
               $str2 = $str2.$a[$i]."&nbsp&nbsp";  
            }
        }
        echo "<hr> 奇數字母 &nbsp".$str1 ;
        echo "<hr> 偶數字母 &nbsp".$str2 ; 
      
        
        

            
        ?>
    </body>
</html>
