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
$sumb = 'r';
$ress = $result->replaceSumbolFile($line,$sumbol,$sumb);

include_once ("template/index1.php");