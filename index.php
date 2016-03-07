<?php
require_once "inc/not_login.php";
require_once "inc/initial.php";
require_once "header.php";

//var_dump($db);

$query = "SELECT c.*, s.state FROM pol_clients AS c "
        ."JOIN pol_state AS s ON c.state_id = s.id";

$result = $db->query($query);
?>
<section class="section-lg bg-light">
    <div class="container">

        <?php
        display_notification();
        ?>

        <div class="row section-header">
            <div class="col-sm-12 text-center">
                <h1>Список клиентов</h1>
                <h2 class="sub-header">список клиентов для подачи документов в консульство Польши</h2>
            </div>
        </div>

        <div class="row section-content">
            <div class="row section-content">
                <div class="col-sm-12">
                    <?php
                    if ($result->num_rows) {
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Имя</th>
                                    <th>Фамилия</th>
                                    <th>PTN</th>
                                    <th>Состояние заявки</th>
                                    <th>Упраление</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr<?= get_client_state_class($row['state_id']) ?>>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['name'] ?></td>
                                        <td><?= $row['surname'] ?></td>
                                        <td><?= $row['ptn'] ?></td>
                                        <td><?= $row['state'] ?></td>
                                        <td style="width: 190px">
                                            <a class="btn btn-info btn-sm" data-toggle="confirmation" href="info.php?id=<?= $row['id'] ?>" role="button" title="Подробная информация о клиенте">
                                                <i class="fa fa-user-secret"></i> Подробнее
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="edit.php?id=<?= $row['id'] ?>" role="button" title="Редактировать информацию о клиенте">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="remove.php?id=<?= $row['id'] ?>" role="button" title="Удалить запись клиента">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <?php
                    } else {
                        ?>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once "footer.php";
?>
