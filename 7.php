<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.06.2017
 * Time: 19:41
 */

$age=6;
if($age>=18 && $age<=59){

    echo "Вам еще работать и работать";
}
elseif($age>59){
    echo "Вам пора на пенсию";
}
elseif($age<18 && $age>0) {
    echo "Вам еще рано работать";
}
?>