<?php
require_once "header.php";

//var_dump($db);

$result = $db->query('SELECT * FROM pol_clients');
?>

<?php
if (isset($_SESSION['notification'])) {
    ?>
    <section class="section-xl bg-light">
        <div class="container">
            <div class="row section-header">
                <div class="col-sm-12 text-center">
                    <h1>Сообщение</h1>
                </div>
            </div>
            <div class="row section-content">
                <?= $_SESSION['notification'] ?>
            </div>
        </div>
    </section>
    <?php
    unset ($_SESSION['notification']);
}
?>
<section class="section-xl bg-light">
    <div class="container">
        <div class="row section-header">
            <div class="col-sm-12 text-center">
                <h1>Список клиентов</h1>
                <h2 class="sub-header">для запуска работы программы заполните все поля в форме</h2>
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
                                        <td><?= get_client_state($row['state_id']) ?></td>
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
