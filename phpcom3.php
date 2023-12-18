<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

        function minfun($b){
            $min=$b[0];

            for($i=0; $i<count($b); $i++){
                if ($b[$i] < $min){

                    $min=$b[$i];

                }
                
            }return $min;
        }
?>       