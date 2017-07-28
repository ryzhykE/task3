<?php

include_once ("conf.php");
include_once ("libs/ReadFile.php");


$result = new ReadFile();
$res = $result->readFileString(PATH);
$results = $result->readFileSumbol(PATH);

include_once ("template/index.php");