<?php
session_start();
require_once('inc/db.php');
require_once('inc/library.php');

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
    $client_data['created'] = date('Y-m-d H:i:s');

    $num = count($client_data);
    $i = 1;

    $fields = "";
    $values = "";

    foreach ($client_data as $key => $value) {
        $i++;
        if ($i <= $num) {
            $divider = ", ";
        } else {
            $divider = "";
        }
        $fields .= $key . $divider;
        $values .= "'" . $value . "'" . $divider;
    }

    $query = "INSERT INTO pol_clients (" . $fields . ") VALUES (" . $values . ");";

    if ($result = $db->query($query)){
        $_SESSION['notification'] = '<span class="txt-red h2">Не удалось записать нового клиента в базу данных</span>';
    } else {
        $_SESSION['notification'] = '<span class="txt-green h2">Новый клиент добавлен успешно</span>';
    }
    //echo get_base_url();

    header('Location: http://' . get_base_url());
    //echo $query;
    //die;

    //var_dump($client_data);
}