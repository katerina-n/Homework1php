<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.06.2017
 * Time: 21:00
 */
$a=mt_rand(1, 150);
$b=mt_rand(1, 150);
if($a>$b){
    echo "a= $a max";
}
elseif($a<$b){
    echo "b= $b max";
}
else echo "a = b";

?>