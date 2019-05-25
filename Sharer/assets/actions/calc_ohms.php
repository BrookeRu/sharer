<?php
header("Content-Type: application/json");

$obj = new StdClass();
/*
$volts = $_GET['volts'];
$ohms = $_GET['ohms'];
*/
$volts = $_POST['volts'];
$ohms = $_POST['ohms'];

$obj->volts = $volts;
$obj->ohms = $ohms;

$obj->amps = $volts / $ohms;
$obj->watts = $volts * $obj->amps;

echo json_encode($obj);