<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.06.2017
 * Time: 20:08
 */
$day=mt_rand(1, 31);
//$day=6;
switch($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
}


?>