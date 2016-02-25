<?php
if ($_POST) {
    $client_data = array();

    $client_data['name'] = $_POST['customer_name'];
    $client_data['surname'] = $_POST['customer_surname'];
    $client_data['status'] = $_POST['customer_status'];
    $client_data['birth_date'] = $_POST['customer_birth'];
    $client_data['ppva'] = $_POST['customer_ppva'];
    $client_data['purpose'] = $_POST['customer_purpose'];
    $client_data['email'] = $_POST['customer_email'];
    $client_data['password'] = $_POST['customer_pass'];
    $client_data['ptn'] = $_POST['customer_ptn'];
    $client_data['passport_num'] = $_POST['customer_passport'];
    $client_data['passport_expire'] = $_POST['customer_passport_expire'];
    $client_data['back_date'] = $_POST['customer_return'];
    $client_data['nationality'] = $_POST['customer_nationality'];
    $client_data['state_id'] = 1;

    var_dump($client_data);
}