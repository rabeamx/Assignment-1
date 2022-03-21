<?php

/**
 *  OTP Code Function => 14
 */

function getPass($name){

    echo password_hash($name, PASSWORD_DEFAULT) . "<span style = 'display:block;'><br></span>";
}

?>