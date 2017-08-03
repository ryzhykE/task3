<?php

include_once ("conf.php");
include_once ("libs/ReadFile.php");


$result = new ReadFile();
$num = 1;
$strings = $result->readFileString($num);

$numString = 2;
$numSumbol = 4;
$sumb = $result->readFileSumbol($numString,$numSumbol);


include_once ("template/index.php");