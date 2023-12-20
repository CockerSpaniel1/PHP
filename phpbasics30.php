<?php
    $name = $_POST['t1'];
    $email = $_POST['t2']; 
    $age = $_POST['ua'];
    $data = $_POST['up'];
    
    $str1="";
    for ($i=0; $i<count($data);$i++){
        $str1=$str1.$data[$i]."&nbsp;&nbsp;";
    }
    $ques = $_POST['tal'];
    
    $data2 = $_POST['sel'];
    $str2="";
    
    for ($j=0; $j<count($data);$j++){
        $str2=$str2.$data2[$j]."&nbsp;&nbsp;";
    }

?>

  <table border="2" width="600px">
            <tr>
                <td bgcolor="#99CCFF">姓名</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td bgcolor="#99CCFF">電子郵件</td>
                <td><?php echo $email; ?></td>
            </tr>

            <tr>
                <td bgcolor="#99CCFF">年齡</td>
                <td>
                    <?php echo $age; ?>
                </td>
            </tr>
            <tr>
                <td bgcolor="#99CCFF">廠牌手機</td>
                <td>
                   <?php echo $str1; ?>
                </td>
            </tr>
            <tr>
                <td colspan="4" bgcolor="#99CCFF" >使用手機最常碰到的問題</td>
            </tr>    
             <tr>
                <td colspan="4">
                    <?php echo $ques; ?>
                </td>
            </tr>
             <tr>
                <td bgcolor="#99CCFF">您使用過那些電信業者的門號(複選)</td>
                <td colspan="4">
                    <?php echo $str2; ?>
                </td>
            </tr>
        </table>
 
