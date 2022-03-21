<?php

/**
 *  BMI Calculate - 05
 */

 function getBMI($weight, $height){

     $bmi = $weight / ($height * $height);

     if( $bmi < 18 ){
      echo "<h5 style = 'text-align:center; color:#6495ED; font-family:montserrat;'>BMI: {$bmi} Underweight</h5>";
   } else if( $bmi > 18 && $bmi < 24 ){
      echo "<h5 style = 'text-align:center; color:#6495ED; font-family:montserrat;'>BMI: {$bmi} Normal Weight</h5>";
   } else if( $bmi > 5 && $bmi <= 29 ){
      echo "<h5 style = 'text-align:center; color:#6495ED; font-family:montserrat;'>BMI: {$bmi} Over Weight</h5>";
   } else if( $bmi >= 30 && $bmi <= 34 ){
      echo "<h5 style = 'text-align:center; color:#6495ED; font-family:montserrat;'>BMI: {$bmi} Obesity Class |</h5>";
   } else if( $bmi >= 35 && $bmi <= 39){
      echo "<h5 style = 'text-align:center; color:#6495ED; font-family:montserrat;'>BMI: {$bmi} Obesity Class ||</h5>";
   } else if( $bmi >= 40 ){
      echo "<h5 style = 'text-align:center; color:#6495ED; font-family:montserrat;'>BMI: {$bmi} Obesity Class |||</h5>";
   } else {
      echo "<h5 style = 'text-align:center; color:#6495ED; font-family:montserrat;'>Undefined</h5>";
   }
 }

  /**
   * 
      switch($bmi){
         case '$bmi <= 18.5':
            $weight_status = "Underweight";
            break;
         case '$bmi > 18.5 && $bmi <= 24.9':
            $weight_status = "Normal Weight";
            break;
         case '$bmi >= 25.0 && $bmi <= 29.9':
            $weight_status = "Over Weight";
            break;
         case '$bmi >= 30.0 && $bmi <= 34.9':
            $weight_status = "Obesity Class |";
            break;
         case '$bmi >= 35.0 && $bmi <= 39.9':
            $weight_status = "Obesity Class ||";
            break;
         case '$bmi >= 40.0':
            $weight_status = "Obesity Class |||";
            break;
      }
      echo "<h5 style = 'text-align:center; color:#6495ED; font-family:montserrat;'>BMI: {$bmi} {$weight_status}</h5>";
   */

?>