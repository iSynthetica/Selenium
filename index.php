<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Metadata -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="description" content="A Template by Synthetica"/>
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP"/>
    <meta name="author" content="Synthetica"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Title of the page -->
    <title>Title of the page</title>

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">


</head>

<body>
<div id="content_wrapper">
    <header id="header" class="section-xl bg-light parallax bg-holder txt-light">
        <div class="bg-parallax" style="background-image:url('/assets/img/poland.jpg')"></div>
        <div class="overlay bg-black bg-op-20"></div>
        <div class="container">
            <div class="row section-header">
                <div class="col-sm-12 text-center">
                    <h1>ПОДАТИ ЗАЯВУ НА ВІЗУ ДО ПОЛЬЩІ</h1>
                    <h2 class="sub-header">ПРИЗНАЧЕННЯ ДАТИ ПОДАЧІ ДОКУМЕНТІВ</h2>
                </div>
            </div>
        </div>
    </header>

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

    <script type="text/javascript" src="assets/js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/vendor/bootstrap-daterangepicker/moment.js"></script>
    <script type="text/javascript" src="assets/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</div><!-- #content_wrapper -->
</body>
</html>