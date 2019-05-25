<?php


header('Content-Type: application/json');

$obj = new StdClass();
$obj->html = "<span style=\"color: red;\">Content</span>";
$obj->count = 3;
echo json_encode($obj);