<?php
require_once "inc/initial.php";

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
    $client_data['reg_date_from'] = $_POST['customer_reg_date_from'];
    $client_data['reg_date_to'] = $_POST['customer_reg_date_to'];
    $client_data['additional_info'] = $_POST['customer_additional_info'];
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
        $_SESSION['notification']['status'] = 'success';
        $_SESSION['notification']['title'] = 'Поздравляю: ';
        $_SESSION['notification']['message'] = 'Новый клиент добавлен успешно';
    } else {
        $_SESSION['notification']['status'] = 'danger';
        $_SESSION['notification']['status'] = 'Ошибка: ';
        $_SESSION['notification']['message'] = 'Не удалось записать нового клиента в базу данных';
    }

    header('Location: http://' . get_base_url());
}