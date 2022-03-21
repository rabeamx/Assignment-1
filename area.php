<?php

/**
 *  Area Formulas => 02
 */

 function getArea($type = 'r', $length, $width = null)
 {
     $area = '';
     $area_type = '';

     switch ($type) {
         case 'r':
            $area_type = "rectangular";
            $area = $length * $width;
            break;

         case 's':
            $area_type = "square";
            $area = $length * $length;
            break;

         case 'c':
            $area_type = "circle";
            $area = 3.1416 * ($length * $length);
            break;

         default:
           $area_type = "undefined";
           $area = "undefined";
           break;
     }

     return "<h5 style = 'text-align:center; color:#6495ED; font-family:montserrat;'>Area of this {$area_type} : {$area}</h5>";
 }

?>