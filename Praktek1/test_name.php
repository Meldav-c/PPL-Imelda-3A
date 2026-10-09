<?php 
//file
require_once "Validator.php";

try {
    $result = validatename("Imelda Fitriana Dewi");
    echo "PASS: nama sudah benar\n";
} catch (Exception $e) {
    echo "FAIL: nama tidak valid. Error: ". $e->getmessname() . "\n";
}

try {
    $result = validateName("Imelda 1212");
    echo "PASS: Nama 'Imelda 1212' sudah benar\n";
} catch (Exception $e) {
    echo "FAIL: Nama 'Imelda 1212' tidak valid. Error: " . $e->getMessage() . "\n";
}