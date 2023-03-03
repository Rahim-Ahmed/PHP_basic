<?php

$people=['rahim','zenit','hamim'];
$arr=array('mango','jango');
$merge=array_merge($people,$arr);


echo $arr[1]."<br>";
echo $people[0]."<br>";
echo print_r($merge)."<br>";


array_push($arr,"jackfruit");
echo print_r($arr)."<br>";

array_pop($arr);
echo print_r($arr)."<br>";

$cus_indx=array('man'=>'hi','jan'=>'hlw');
echo print_r($cus_indx)."<br>";



?>