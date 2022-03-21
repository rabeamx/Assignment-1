<?php

/**
 *  Uppercase Lowercase Handwriting System - 07
 */

 function hat($type = null, $text = null){

     $text_type = '';

     switch ($type){
         case 'u':
            $text_type = 'uppercase';
            break;
         case 'l':
            $text_type = 'lowercase';
            break;
         default:
            $text_type = 'lowercase';
            break;
     }
     return "<h5 style = 'text-transform:{$text_type}; text-align:center; color:#9932CC; font-family:montserrat; padding-bottom:20px;'>{$text}</h5>";
     
 }

?>