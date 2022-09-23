<?php
error_reporting(0);

$directory = __DIR__;
require($directory . "/usom.class.php");

//URL Check
$url_check = \usom::check("https://example.com", 1);

// print return array
print_r($url_check);

//IP Check
$ip_check = \usom::check("1.1.1.1", 2);

// print return array
print_r($ip_check);
?>
