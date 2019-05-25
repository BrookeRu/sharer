<?php

require_once('assets/includes/SharerEmail.php');

$email = new SharerEmail('broberts8705@gmail.com', 'test email class', '<div
 style="color: red;">This is only a test.</div>');
$email->send();
$result = $email->get_status();

if (PEAR::isError($result)) {
    echo $result->getMessage() . '<br>';
} else {
    echo 'Mail sent.';
}