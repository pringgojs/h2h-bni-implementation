<?php

include_once __DIR__ . "/Helper.php";

// initialize
$client_id = '01556';
$prefix =  '988';
// $url = 'http://43.252.156.50/ecollection/update';
$url = 'http://localhost:8000/update';

// data
$data = array(
    'client_id' => $client_id,
    'type' => 'updateBilling',
    'trx_id' => '273906408',
    'trx_amount' => '6000',
    'customer_name' => 'Mr. Smart Updated',
    'customer_email' => 'smart@gmail.com',
    'customer_phone' => '065320600580',
    'virtual_account' => $prefix.$client_id.'00000001',
    'datetime_expired' => date('c', time() + 2 * 3600),
    'description' => 'test transaction update billing'
);

// send request
$response = Helper::curl($url, json_encode($data));
var_dump($response);
