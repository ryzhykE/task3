<?php

include_once ("conf.php");
include_once ("libs/ReadFile.php");


$result = new ReadFile();
$res = $result->replaceTextFile('test2','ttrrt', PATH);

$results = $result->replaceSumbolFile('t','l', PATH);


include_once ("template/index1.php");