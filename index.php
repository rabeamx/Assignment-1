<?php

/**
 *  Result System ==> 01
 */
include_once "./result.php";

result(100);

/**
 *  Area Formulas ==> 02
 */
include_once "./area.php";

echo getArea('r', 5, 9);

/**
 *  Age Calculate ==> o3
 */
include_once "./age.php";

ageCal(2000);

/**
 *  Dynamic Headlline ==> 04
 */
include_once "./headline.php";

echo headline('We Are Devs');

/**
 *  BMI Calculate ==> 05
 *  Weight Unit KG
 *  Height Unit Meter
 */
include_once "./bmi.php";

getBMI(72, 1.7);

/**
 *  Currency Converter ==> 06
 */
include_once "./currency.php";

echo currencyCon(100, 'euro');

/**
 *  Uppercase Lowercase Handwriting System ==> 07
 */
include_once "./function.php";

echo hat('u', 'we are devs');

/**
 *  Loop Function Using Increment & Decrement Operator ==> 08
 *  1) First Loop__Incremenet Operator
 *  2) Second Loop__Decrement Operator
 *  3) Third Loop__Divisible By 3 & 4 ==> 09
 *  4) Fourth Loop__Ends if Divisible By 11 ==> 10
 */
include_once "./loops.php";

INloop(10000);
DEloop(10000);
DVloop(1);
DIEloop(1);

/**
 *  Multiflication table Of 2,3,4,5 ==> 11
 */
include_once "./namta.php";

getMulti_2(1);
getMulti_3(1);
getMulti_4(1);
getMulti_5(1);

/**
 *  Captcha Code ==> 12
 *  '{$code}'
 */
include_once "./captcha.php";

getCaptcah();

/**
 *  OTP Code ==> 13
 *  1000, 9999
 */
include_once "./otp.php";

getOTP();

/**
 *  Password Generator ==> 14
 */
include_once "./password.php";

getPass('php or anything');

?>