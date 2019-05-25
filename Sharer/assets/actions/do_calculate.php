<?php
require_once('../includes/calculator_constants.php');

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$obj = new StdClass();

$volts = $_POST[IN_VOLTS_KEY];
$ohms = $_POST[IN_OHMS_KEY];

$amps = $volts / $ohms;
$watts = $amps * $volts;

$obj->volts = $volts;
$obj->ohms = $ohms;
$obj->amps = $amps;
$obj->watts = $watts;

echo json_encode($obj);