<?php

include_once ("conf.php");
include_once ("libs/ReadFile.php");


$result = new ReadFile();
$results = $result->printArrStr();
$num = 1;

$strings = $result->readFileString($num);
$numString = 2;
$numSumbol = 3;
$sumb = $result->readFileSumbol($numString,$numSumbol);
$resullSmb = $result->printArrSymbol();

include_once ("template/index.php");