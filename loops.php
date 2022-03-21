<?php

/**
 *  Loop Function Using Increment & Decrement Operator => 08
 *  1) First Loop__Incremenet Operator
 */
function INloop($i){

    for ($i > 0; $i <= 10049; $i++) { 
        echo "<h5 style = 'text-align:center; color:#800080; font-family:montserrat; font-size:10px;'>Increment Loop Val : {$i} <br></h5>";
    }

}

/**
 *  2) Second Loop__Decrement Operator
 */
function DEloop($i){

    for($i > null; $i <= 10049; $i++){
        echo "<h5 style = 'text-align:center; color:#C71585; font-family:montserrat; font-size:10px;'>Decrement Loop Val : {$i} <br></h5>";

    }
}

/**
 *  3) Third Loop__Divisible By 3 & 4 Using For Loop => 09
 */
 function DVloop($i){
    for($i >= 0; $i <= 624; $i++){

        if( $i % 3 == 0 && $i % 4 == 0 ){
            echo "<h5 style = 'text-align:center; color:#708090; font-family:montserrat; font-size:10px;'>Divisible Loop Valua : $i <br></h5>";
        }

    }
 }

 /**
 *  4) Fourth Loop__End When Divisible By 11 => 10
 */
function DIEloop($i){
    for($i > 0; $i <= 100; $i = $i + 3){

        echo "<h5 style = 'text-align:center; color:#D2691E; font-family:montserrat; font-size:10px;'>End Loop {$i} <br></h5>";

        if($i % 11 == 0){
            break;
        }

    }
}

?>