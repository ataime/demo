<?php

echo "位运算交换变量值 \n";

$a = 110;
$b = 222;

echo sprintf("a: %d , b: %d \n",$a,$b);

$o = $a^$b;

$a = $a^$o;
$b = $b^$o;

echo sprintf("a: %d , b: %d \n",$a,$b);
