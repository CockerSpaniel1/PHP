<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of newPHPClass
 *
 * @author user
 */
class maxmincom {
    public function maxfun1($a){
        $max=0;
        $len1=count($a);
        for($i=0;$i<$len1;$i++){
            if($max<$a[$i]){
                $max=$a[$i];
            }
        }return $max;
    }
    public function minfun2($a){
        $min=65535;
        $len1=count($a);
        for($i=0;$i<$len1;$i++){
            if($min>$a[$i]){
                $min=$a[$i];
            }
        }return $min;
    }
}


