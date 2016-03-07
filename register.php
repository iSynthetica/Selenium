<?php
require_once "inc/not_login.php";
require_once "inc/initial.php";

if ($_GET['ppva']) {
    $ppva = $_GET['ppva'];

    $query = "SELECT * FROM pol_clients AS c "
        . "WHERE c.ppva = $ppva "
        . "AND c.state_id = 1";

    $result = $db->query($query);

    // check if any record in db
    if (!$result->num_rows) {
        $_SESSION['notification']['status'] = 'danger';
        $_SESSION['notification']['title'] = 'Ошибка: ';
        $_SESSION['notification']['message'] = 'Невозможно получить информацию о клиенте для записи';
        header('Location: http://' . get_base_url());
    }

} else {
    $_SESSION['notification']['status'] = 'danger';
    $_SESSION['notification']['title'] = 'Ошибка: ';
    $_SESSION['notification']['message'] = 'Не указан ППВА для записи';

    header('Location: http://' . get_base_url());
}

$meta_title = "Начать запись в консульство";
require_once "header.php";
?>

<section class="section-lg bg-light">
    <div class="container">
        <div class="row section-header">
            <div class="col-sm-12 text-center">
                <h1>Список клиентов для записи в консульство <br><?= get_ppva_by_id($ppva) ?></h1>
                <h2 class="sub-header">нажмите кнопку старт для начала записи <br>или измените пункт приема визовых анкет консульства</h2>
            </div>
        </div>

        <div class="row section-content">
            <div class="row section-content">
                <div class="col-sm-12">

                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once "footer.php";
?>