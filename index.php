<?php
require_once "header.php";
?>
<section class="section-xl bg-light">
    <div class="container">
        <div class="row section-header">
            <div class="col-sm-12 text-center">
                <h1>Начало работы</h1>
                <h2 class="sub-header">для запуска работы программы заполните все поля в форме</h2>
            </div>
        </div>

        <div class="row section-content">
            <form action="">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_name">Имя</label>
                                <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Имя">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_surname">Фамилия</label>
                                <input type="text" class="form-control" id="customer_surname" name="customer_surname" placeholder="Фамилия">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_status">Статус</label>
                                <select name="customer_status" id="customer_status" class="form-control">
                                    <option value="-1">...выбрать...</option>
                                    <option value="Dr.">Dr.</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Mstr.">Mstr.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_birth">Дата рождения</label>
                                <div class="input-group">
                                    <input type="email" class="form-control form-sngl-datepicker" id="customer_birth" name="customer_birth" placeholder="Дата рождения">
                                    <span class="input-group-addon" id="basic-addon2">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_ppva">ППВА</label>
                                <select name="customer_ppva" id="customer_ppva" class="form-control">
                                    <option value="-1">-Оберіть ППВА-</option>
                                    <option value="5">Польщі Івано-Франківськ</option>
                                    <option value="7">Польщі Львів</option>
                                    <option value="8">Польщі Тернопіль</option>
                                    <option value="9">Польщі Рівне</option>
                                    <option value="10">Польщі Луцьк</option>
                                    <option value="11">Польщі Дніпропетровськ</option>
                                    <option value="12">Польщі Харків</option>
                                    <option value="13">Польщі Київ</option>
                                    <option value="14">Польщі Одеса</option>
                                    <option value="15">Польщі Хмельницький</option>
                                    <option value="16">Польщі Житомир</option>
                                    <option value="17">Польщі Вінниця</option>
                                    <option value="19">Польщі Донецьк</option>
                                    <option value="20">Польщі Ужгород</option>
                                    <option value="21">Польщі Чернівці</option>
                                    <option value="22">Польщі Луганськ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_purpose">Цель визита</label>
                                <select name="customer_purpose" id="customer_purpose" class="form-control">
                                    <option value="-1">-Будь ласка, оберіть-</option>
                                    <option value="1">Подача документів</option>
                                    <option value="2">Консультація</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_email">Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder="Email">
                                    <span class="input-group-addon" id="basic-addon2">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_pass">Пароль</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="customer_pass" name="customer_email" placeholder="Пароль">
                                    <span class="input-group-addon" id="basic-addon2">
                                        <i class="fa fa-unlock-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_ptn">PTN</label>
                                <input type="text" class="form-control" id="customer_ptn" name="customer_ptn" placeholder="PTN">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_ppva">ППВА</label>
                                <select name="customer_ppva" id="customer_ppva" class="form-control">
                                    <option value="-1">-Оберіть ППВА-</option>
                                    <option value="5">Польщі Івано-Франківськ</option>
                                    <option value="7">Польщі Львів</option>
                                    <option value="8">Польщі Тернопіль</option>
                                    <option value="9">Польщі Рівне</option>
                                    <option value="10">Польщі Луцьк</option>
                                    <option value="11">Польщі Дніпропетровськ</option>
                                    <option value="12">Польщі Харків</option>
                                    <option value="13">Польщі Київ</option>
                                    <option value="14">Польщі Одеса</option>
                                    <option value="15">Польщі Хмельницький</option>
                                    <option value="16">Польщі Житомир</option>
                                    <option value="17">Польщі Вінниця</option>
                                    <option value="19">Польщі Донецьк</option>
                                    <option value="20">Польщі Ужгород</option>
                                    <option value="21">Польщі Чернівці</option>
                                    <option value="22">Польщі Луганськ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_email">Email</label>
                                <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_email">Email</label>
                                <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="form-group" style="padding-top: 25px">
                             <button type="submit" class="btn btn-block btn-lg btn-success"><i class="glyphicon glyphicon-play"></i> Начать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
require_once "footer.php";
?>