<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.06.2017
 * Time: 20:49
 */
$a=mt_rand(-1, 100);
$b=mt_rand(-2, 100);
$c=array("+","-","*","/","%");
$operator=array_rand($c, 1);

if($c[$operator]=="+"){
    $rez=$a+$b;
    echo "Symma $rez";
}
elseif($c[$operator]=="-"){
    $rez=$a-$b;
    echo "Raznica $rez" ;
}
elseif($c[$operator]=="*"){
    $rez=$a*$b;
    echo "Ymnogenie $rez";
}
elseif($c[$operator]=="/" and $b!=0){
    $rez=$a/$b;
    echo "Delenie $rez";
}
elseif($c[$operator]=="/" and $b==0){
    echo "X";
}
elseif($c[$operator]=="%"){
    $rez=$a%$b;
    echo "Ostatok $rez";
}
?>