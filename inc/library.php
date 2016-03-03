<?php
/**
 * @return mixed
 */
function get_base_url() {
    return $_SERVER['HTTP_HOST'];
}

function get_client_state($state_id) {
    //die('Test');
    $db_host = "sichena.mysql.ukraine.com.ua";
    $db_name = "sichena_poland";
    $db_login = "sichena_poland";
    $db_password = "qybbc7ba";

    //$link = mysqli_connect($db_host, $db_login, $db_password, $db_name);

    //$db = new mysqli($db_host, $db_login, $db_password, $db_name);

    //$result = $db->query('SELECT * FROM pol_state WHERE id = ' . $state_id);

    //$state = $result->fetch_assoc();

    //return $state['state'];
    return $state_id;
    //return $db;
}

function get_client_state_class($state_id) {
    $bg_class = "";

    if (2 == $state_id) {
        $bg_class = " class=\"bg-info\"";
    } elseif (3 == $state_id) {
        $bg_class = " class=\"bg-danger\"";
    } elseif (4 == $state_id) {
        $bg_class = " class=\"bg-success\"";
    }

    return $bg_class;
}
?>