<?php
if ($_POST) {
    $client_data = array();

    $client_data['name'] = $_POST['customer_name'];
    $client_data['surneme'] = $_POST['customer_surname'];
    $client_data['status'] = $_POST['customer_status'];
    $client_data['birth_date'] = $_POST['customer_birth'];
    $client_data['nationality'] = $_POST['customer_nationality'];
    $client_data['passport_num'] = $_POST['customer_passport'];
    $client_data['passport_expire'] = $_POST['customer_passport_expire'];

    $client_data['state_id'] = 1;

    var_dump($client_data);
}
