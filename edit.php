<?php
require_once "inc/not_login.php";
require_once "inc/initial.php";

if ($_GET['id']) {
    $id = $_GET['id'];


} else {
    $_SESSION['notification']['status'] = 'danger';
    $_SESSION['notification']['title'] = 'Ошибка: ';
    $_SESSION['notification']['message'] = 'Вы не выбрали клиента для просмотра информации';

    header('Location: http://' . get_base_url());
}

$meta_title = "Редактировать нформацию о клиенте";
require_once "header.php";
?>

<section class="section-lg bg-light">
    <div class="container">
        <?php
        display_notification();
        ?>

        <div class="row section-header">
            <div class="col-sm-12 text-center">
                <h1>Клиент с ID <?= $id ?></h1>
                <h2 class="sub-header">редактирование информации о клиенте</h2>
            </div>
        </div>

    </div>
</section>

<?php
require_once "footer.php";
?>