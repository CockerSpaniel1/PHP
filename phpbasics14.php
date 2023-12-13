<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <script>
        </script>
    </head>
    <body>
        <?php
            $v=2;
            switch($v)
            {
                case 1:
                {echo "區塊一";
                break;
                }
                case 2:
                {echo "區塊二";
                break;
                }
                case 3:
                {echo "區塊三";
                break;
                }
                default:
                {echo "預設區塊";}
     
            }
            
//            ---------------------------------
            echo "<br>";
            
             $v="秋天";
            switch($v)
            {
                case "春天":
                {echo "櫻花";
                break;
                }
                case "夏天":
                {echo "金針花";
                break;
                }
                case "秋天":
                {echo "楓葉";
                break;
                }
                case "冬天":
                {echo "梅花";
                break;
                }
                default:
                {echo "沒有任何選擇";}
     
            }
            
          
        ?>
        
<!--        <form>
        Select season:
        onchange="showCD(this.value)"
        <select name="season" >
          <option value="1">春天</option>
          <option value="2">夏天</option>
          <option value="3">秋天</option>
          <option value="4">冬天</option>
        </select>
        </form>-->
        <?php
        //            ---------------------------------
            echo "<br>";
            
            $v="秋天";
            switch($v)
            {
                case "春天":        
                {
        
                ?>
            <!------------------------------------->
            <font size="+6" color="#0033ff">櫻花</font>
            <!------------------------------------->
                <?php
                
                break;
                }
                case "夏天":
                {
                ?>
            <!------------------------------------->
            <font size="+6" color="#0033ff">金針花</font>
            <!------------------------------------->
                <?php
                break;
                }
                case "秋天":
                {
                ?>
            
            <!------------------------------------->
            <font size="+6" color="#0033ff">楓葉</font>
            <!------------------------------------->
                <?php
                break;
                }
                case "冬天":
                {
                ?>
            <!------------------------------------->
            <font size="+6" color="#0033ff">梅花</font>
            <!------------------------------------->
                <?php
                break;
                }
                default:
                {echo "沒有任何選擇";}
                    }
                ?>
            
            
         
        
    </body>
</html>
