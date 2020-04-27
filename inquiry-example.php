<?php

include_once __DIR__ . "/Helper.php";

// initialize
$client_id = '01556';
// $url = 'http://43.252.156.50/ecollection/inquiry';
$url = 'http://localhost:8000/inquiry';
// data
$data = array(
    'client_id' => $client_id,
    'type' => 'inquiryBilling',
    'trx_id' => '273906408'
);


// send request
$response = Helper::curl($url, json_encode($data));
var_dump($response);
