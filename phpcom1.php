<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

    function fun5($c){
        $a=array();
        $len=count($c);
        for($i=0;$i<$len;$i++){
            $a[$i]=$c[$i]+100;
        }
        return $a;
    }
?>