<?php

/**
 *  Captcha Code Function => 12
 */

function getCaptcah(){

    $code = str_shuffle ('qwert!@#$%&*yuiopasdfghjkl;zxcvbnm?1234567890');

    echo substr($code, 3, 4) . "<span style = 'display:block;'><br></span>";
}

?>