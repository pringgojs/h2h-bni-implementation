<?php

include_once __DIR__ . "/Helper.php";

// initialize
$client_id = '01556';
$url = 'http://siakad.poltradabali.ac.id:8081/inquiry';
// $url = 'http://localhost:8000/inquiry';
// data
$data = array(
    'client_id' => $client_id,
    'type' => 'inquiryBilling',
    'trx_id' => '273906408'
);


// send request
$response = Helper::curl($url, json_encode($data));
var_dump($response);
