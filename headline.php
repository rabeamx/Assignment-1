<?php

/**
 *  Dynamic Headline => 05
 */

 function headline($title = null, $type = 'h5', $align = 'center', $color = '#4B0082', $ff = 'montserrat', $fs = null, $background = null, $padding = null){

     return "<{$type} style = 'text-align:{$align}; color:{$color}; font-family:{$ff}; font-size:{$fs}; background-color:{$background}; padding:{$padding};'>{$title}</{$type}>";
 }


?>