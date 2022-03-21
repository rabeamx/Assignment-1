<?php

/**
 *  Dynamic Headline - 06
 */

 function currencyCon(int $amount = null, string $type = null)
 {
     $rate = null;

     switch($type){
         case 'dollar':
            $rate = 86.24;
            break;
         case 'pound':
            $rate = 113.38;
            break;
         case 'canadian dollar':
            $rate = 68.42;
            break;
         case 'euro':
            $rate = 94.31;
            break;
         case 'won':
            $rate = 0.071;
            break;
         default:
            $rate = 'undefined';
            break;
     }

     $bdt = $amount * $rate;
     
     return "<span style = 'text-align:center; display:block;  font-weight:bold; color:#191970; font-family:montserrat;'>Currency Converter :<br>{$amount} {$type} = {$bdt} tk</span>";

 }


?>