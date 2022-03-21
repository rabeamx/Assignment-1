<?php

/**
 *  Result System - 01
 */
include_once "./result.php";

result(100);

/**
 *  Area Formulas - 02
 */
include_once "./area.php";

echo getArea('r', 5, 9);

/**
 *  Age Calculate - o3
 */
include_once "./age.php";

ageCal(2000);

/**
 *  Dynamic Headlline - 04
 */
include_once "./headline.php";

echo headline('We Are Devs');

/**
 *  BMI Calculate - 05
 * 
 */
include_once "./bmi.php";

getBMI(58, 1.7);

/**
 *  Currency Converter - 06
 */
include_once "./currency.php";

echo currencyCon(100, 'euro');

/**
 *  Uppercase Lowercase Handwriting System - 07
 */
include_once "./function.php";

borohat('we are developer');

?>