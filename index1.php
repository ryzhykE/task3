<?php

include_once ("conf.php");
include_once ("libs/ReadFile.php");



$result = new ReadFile();
$number = 2;
$change = 'new3';

$nums = $number -1;
$strings = $result->replaceTextFile($number ,$change);
$stringChange = $result->readFileString($nums);


$line = 1;
$sumbol = 1;
$ress = $result->replaceSumbolFile(1,1,'p');



include_once ("templa