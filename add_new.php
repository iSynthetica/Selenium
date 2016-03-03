<?php
$meta_title = "Добавление нового клиента";
require_once "header.php";
?>

<section class="section-xl bg-light">
    <div class="container">
        <div class="row section-header">
            <div class="col-sm-12 text-center">
                <h1>Добавить нового клиента</h1>
                <h2 class="sub-header">Все поля формы обязательны для заполнения</h2>
            </div>
        </div>

        <div class="row section-content">
            <form action="save_new.php" method="post">
                <div class="col-sm-12">
                    <div class="row">
                        <!-- Customer name - start -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_name">Имя</label>
                                <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Имя">
                            </div>
                        </div>
                        <!-- Customer name - end -->

                        <!-- Customer surname - start -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_surname">Фамилия</label>
                                <input type="text" class="form-control" id="customer_surname" name="customer_surname" placeholder="Фамилия">
                            </div>
                        </div>
                        <!-- Customer surname - end -->

                        <div class="col-sm-6">
                            <div class="row">
                                <!-- Customer status - start -->
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="customer_status">Статус</label>
                                        <select name="customer_status" id="customer_status" class="form-control">
                                            <option value="">...</option>
                                            <option value="Dr.">Dr.</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Mstr.">Mstr.</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Customer status - end -->

                                <div class="col-sm-9">
                                    <div class="row">
                                        <!-- Customer date of birth - start -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customer_birth">Дата рождения</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-sngl-datepicker" id="customer_birth" name="customer_birth" placeholder="Дата рождения">
                                                    <span class="input-group-addon" id="basic-addon2">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Customer date of birth - end -->

                                        <!-- Customer nationality - start -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customer_nationality">Национальность</label>
                                                <select name="customer_nationality" id="customer_nationality" class="form-control">
                                                    <option value="-1"></option>
                                                    <option value="1">AFGHANISTAN</option>
                                                    <option value="2">ALBANIA</option>
                                                    <option value="3">ALGERIA</option>
                                                    <option value="4">ANDORRA</option>
                                                    <option value="5">ANGOLA</option>
                                                    <option value="6">ANGUILLA</option>
                                                    <option value="7">ANTIGUA &amp; BARBUDA</option>
                                                    <option value="8">ARGENTINA</option>
                                                    <option value="9">ARMENIA</option>
                                                    <option value="10">ARUBA</option>
                                                    <option value="11">AUSTRALIA</option>
                                                    <option value="12">AUSTRIA</option>
                                                    <option value="13">AZERBAIJAN</option>
                                                    <option value="14">BAHAMAS</option>
                                                    <option value="15">BAHRAIN</option>
                                                    <option value="16">BANGLADESH</option>
                                                    <option value="17">BARBADOS</option>
                                                    <option value="18">BELARUS</option>
                                                    <option value="19">BELGIUM</option>
                                                    <option value="20">BELIZE</option>
                                                    <option value="21">BENIN</option>
                                                    <option value="22">BERMUDA ISLANDS</option>
                                                    <option value="23">BHUTAN</option>
                                                    <option value="24">BOLIVIA</option>
                                                    <option value="25">BOSNIA-HERCEGOVINA</option>
                                                    <option value="26">BOTSWANA</option>
                                                    <option value="27">BRAZIL</option>
                                                    <option value="28">BRUNEI</option>
                                                    <option value="29">BULGARIA</option>
                                                    <option value="30">BURKINA FASO</option>
                                                    <option value="31">BURUNDI</option>
                                                    <option value="32">CAMBODIA</option>
                                                    <option value="33">CAMEROON</option>
                                                    <option value="34">CANADA</option>
                                                    <option value="35">CAPE VERDE</option>
                                                    <option value="36">CAYMAN ISLANDS</option>
                                                    <option value="37">CENTRAL AFRICAN REP.</option>
                                                    <option value="38">CHAD</option>
                                                    <option value="39">CHILE</option>
                                                    <option value="40">CHINA</option>
                                                    <option value="41">COLOMBIA</option>
                                                    <option value="42">COMOROS</option>
                                                    <option value="43">CONGO, DEM. REP.</option>
                                                    <option value="44">CONGO, REP.</option>
                                                    <option value="45">COSTA RICA</option>
                                                    <option value="46">CROATIA</option>
                                                    <option value="47">CUBA</option>
                                                    <option value="48">CYPRUS</option>
                                                    <option value="49">CZECH REPUBLIC</option>
                                                    <option value="50">DENMARK</option>
                                                    <option value="51">DJIBOUTI</option>
                                                    <option value="52">DOMINICA</option>
                                                    <option value="53">DOMINICAN REPUBLIC</option>
                                                    <option value="54">EAST TIMOR</option>
                                                    <option value="55">ECUADOR</option>
                                                    <option value="56">EGYPT</option>
                                                    <option value="57">EL SALVADOR</option>
                                                    <option value="58">EQUATORIAL GUINEA</option>
                                                    <option value="59">ERITREA</option>
                                                    <option value="60">ESTONIA</option>
                                                    <option value="61">ETHIOPIA</option>
                                                    <option value="62">FEDERATED STATES OF MICRONESIA</option>
                                                    <option value="63">FEDERATION OF SAINT KITTS,CHRISTOPHER AND NEVIS</option>
                                                    <option value="64">FIJI</option>
                                                    <option value="65">FINLAND</option>
                                                    <option value="66">FRANCE</option>
                                                    <option value="67">GABON</option>
                                                    <option value="68">GAMBIA</option>
                                                    <option value="69">GEORGIA</option>
                                                    <option value="70">GERMANY</option>
                                                    <option value="71">GHANA</option>
                                                    <option value="72">GREECE</option>
                                                    <option value="73">GRENADA</option>
                                                    <option value="74">GRENADINES</option>
                                                    <option value="75">GUATEMALA</option>
                                                    <option value="76">GUINEA</option>
                                                    <option value="77">GUINEA-BISSAU</option>
                                                    <option value="78">GUYANA</option>
                                                    <option value="79">HAITI</option>
                                                    <option value="80">HONDURAS</option>
                                                    <option value="81">HONGKONG AND MACAO</option>
                                                    <option value="82">HUNGARY</option>
                                                    <option value="83">ICELAND</option>
                                                    <option value="84">INDIA</option>
                                                    <option value="85">INDONESIA</option>
                                                    <option value="86">IRAN</option>
                                                    <option value="87">IRAQ</option>
                                                    <option value="88">IRELAND</option>
                                                    <option value="89">ISRAEL</option>
                                                    <option value="90">ITALY</option>
                                                    <option value="91">IVORY COAST</option>
                                                    <option value="92">JAMAICA</option>
                                                    <option value="93">JAPAN</option>
                                                    <option value="94">JORDAN</option>
                                                    <option value="95">KAZAKSTAN</option>
                                                    <option value="96">KENYA</option>
                                                    <option value="97">KIRIBATI</option>
                                                    <option value="98">KOREA (NORTH-)</option>
                                                    <option value="99">KUWAIT</option>
                                                    <option value="100">KYRGYSTAN</option>
                                                    <option value="101">LAOS</option>
                                                    <option value="102">LATVIA</option>
                                                    <option value="103">LEBANON</option>
                                                    <option value="104">LESOTHO</option>
                                                    <option value="105">LIBERIA</option>
                                                    <option value="106">LIBYA</option>
                                                    <option value="107">LIECHTENSTEIN</option>
                                                    <option value="108">LITHUANIA</option>
                                                    <option value="109">LUXEMBOURG</option>
                                                    <option value="110">MACAU</option>
                                                    <option value="111">MACEDONIA</option>
                                                    <option value="112">MADAGASCAR</option>
                                                    <option value="113">MALAWI</option>
                                                    <option value="114">MALAYSIA</option>
                                                    <option value="115">MALDIVES</option>
                                                    <option value="116">MALI</option>
                                                    <option value="117">MALTA</option>
                                                    <option value="118">MARSHALL ISLANDS</option>
                                                    <option value="119">MAURITANIA</option>
                                                    <option value="120">MAURITIUS</option>
                                                    <option value="121">MEXICO</option>
                                                    <option value="122">MICRONESIA</option>
                                                    <option value="123">MOLDAVIA</option>
                                                    <option value="124">MOLDOVA</option>
                                                    <option value="125">MONACO</option>
                                                    <option value="126">MONGOLIA</option>
                                                    <option value="127">MONTENEGRO</option>
                                                    <option value="128">MONTSERRAT</option>
                                                    <option value="129">MOROCCO</option>
                                                    <option value="130">MOZAMBIQUE</option>
                                                    <option value="131">MYANMAR (BURMA)</option>
                                                    <option value="132">NA</option>
                                                    <option value="133">NAMIBIA</option>
                                                    <option value="134">NAURU</option>
                                                    <option value="135">NEPAL</option>
                                                    <option value="136">NETHERLANDS</option>
                                                    <option value="137">NETHERLANDS ANTILLES</option>
                                                    <option value="138">NEW ZEALAND</option>
                                                    <option value="139">NICARAGUA</option>
                                                    <option value="140">NIGER</option>
                                                    <option value="141">NIGERIA</option>
                                                    <option value="142">NON-RUSSIAN</option>
                                                    <option value="143">NORWAY</option>
                                                    <option value="144">NOTHERN MARIANA ISLANDS</option>
                                                    <option value="145">OMAN</option>
                                                    <option value="146">OTHERS</option>
                                                    <option value="147">PAKISTAN</option>
                                                    <option value="148">PALAU ISLANDS</option>
                                                    <option value="149">PALESTINE</option>
                                                    <option value="150">PANAMA</option>
                                                    <option value="151">PAPUA NEW GUINEA</option>
                                                    <option value="152">PARAGUAY</option>
                                                    <option value="153">PERU</option>
                                                    <option value="154">PHILIPPINES</option>
                                                    <option value="155">POLAND</option>
                                                    <option value="156">PORTUGAL</option>
                                                    <option value="157">QATAR</option>
                                                    <option value="158">REPUBLIC DE COTE DIVOIRE</option>
                                                    <option value="159">REPUBLIC OF BURUNDI</option>
                                                    <option value="160">REPUBLIC OF CONGO</option>
                                                    <option value="161">REPUBLIC OF CROATIA</option>
                                                    <option value="162">REPUBLIC OF KIRIBATI</option>
                                                    <option value="163">REPUBLIC OF KOREA</option>
                                                    <option value="164">REPUBLIC OF KOSOVO</option>
                                                    <option value="165">REPUBLIC OF MACEDONIA</option>
                                                    <option value="166">REPUBLIC OF PALAU</option>
                                                    <option value="167">REPUBLIC OF SLOVENIA</option>
                                                    <option value="168">REPUBLIC OF THE MARSHALL ISLANDS</option>
                                                    <option value="169">REUNION ISLANDS</option>
                                                    <option value="170">ROM</option>
                                                    <option value="171">ROMANIA</option>
                                                    <option value="174">RUSSIAN FEDERATION</option>
                                                    <option value="175">RWANDA</option>
                                                    <option value="176">SAINT LUCIA</option>
                                                    <option value="177">SAMOA</option>
                                                    <option value="178">SAN MARINO</option>
                                                    <option value="179">SAO TOMÉ &amp; PRINCIPE</option>
                                                    <option value="180">SAUDI ARABIA</option>
                                                    <option value="181">SENEGAL</option>
                                                    <option value="182">SERBIA</option>
                                                    <option value="183">SEYCHELLES</option>
                                                    <option value="184">SIERRA LEONE</option>
                                                    <option value="185">SINGAPORE</option>
                                                    <option value="186">SLOVAK REPUBLIC</option>
                                                    <option value="187">SLOVENIA</option>
                                                    <option value="188">SOLOMON ISLANDS</option>
                                                    <option value="189">SOMALIA</option>
                                                    <option value="190">SOUTH AFRICA</option>
                                                    <option value="191">SPAIN</option>
                                                    <option value="192">SRI LANKA</option>
                                                    <option value="193">ST. KITTS &amp; NEVIS</option>
                                                    <option value="194">ST. LUCIA</option>
                                                    <option value="195">ST. VINCENT &amp; THE</option>
                                                    <option value="196">STATE OF ERITREA</option>
                                                    <option value="197">SUDAN</option>
                                                    <option value="198">SURINAM</option>
                                                    <option value="199">SWAZILAND</option>
                                                    <option value="200">SWEDEN</option>
                                                    <option value="201">SWITZERLAND</option>
                                                    <option value="202">SYRIA</option>
                                                    <option value="203">TAIWAN</option>
                                                    <option value="204">TAJIKISTAN</option>
                                                    <option value="205">TANZANIA</option>
                                                    <option value="206">THAILAND</option>
                                                    <option value="207">THE BAHAMAS</option>
                                                    <option value="208">THE PHILIPPINES</option>
                                                    <option value="209">TIBET</option>
                                                    <option value="210">TOGO</option>
                                                    <option value="211">TONGA</option>
                                                    <option value="212">TRINIDAD &amp; TOBAGO</option>
                                                    <option value="213">TUNISIA</option>
                                                    <option value="214">TURKEY</option>
                                                    <option value="215">TURKMENISTAN</option>
                                                    <option value="217">TUVALU</option>
                                                    <option value="218">UGANDA</option>
                                                    <option value="219" selected="selected">UKRAINE</option>
                                                    <option value="216">Ukrainians</option>
                                                    <option value="220">UN NATION</option>
                                                    <option value="221">UN OFFICIAL</option>
                                                    <option value="222">UNITED ARAB EMIRATES</option>
                                                    <option value="223">UNITED KINGDOM</option>
                                                    <option value="224">UNITED NATIONS ORGANIZATION</option>
                                                    <option value="225">UNITED STATES OF AMERICA</option>
                                                    <option value="226">URUGUAY</option>
                                                    <option value="227">UZBEKISTAN</option>
                                                    <option value="228">VANUATU</option>
                                                    <option value="229">VATICAN CITY (HOLY SEE)</option>
                                                    <option value="230">VENEZUELA</option>
                                                    <option value="231">VIETNAM</option>
                                                    <option value="232">YEMEN</option>
                                                    <option value="233">YUGOSLAVIA</option>
                                                    <option value="234">ZAMBIA</option>
                                                    <option value="235">ZIMBABWE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Customer nationality - end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Customer passport number - start -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_passport">Номер паспорта</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="customer_passport" name="customer_passport" placeholder="Пароль">
                                    <span class="input-group-addon" id="basic-addon2">
                                        <i class="fa fa-book"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Customer passport number - end -->

                        <!-- Customer passport date expire - start -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_passport_expire">Дата окончания паспорта</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-sngl-datepicker" id="customer_passport_expire" name="customer_passport_expire" placeholder="Дата возвращения">
                                    <span class="input-group-addon" id="basic-addon2">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Customer passport date expire - end -->

                        <!-- Customer email - start -->
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
                        <!-- Customer email - end -->

                        <!-- Customer password - start -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_pass">Пароль</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="customer_pass" name="customer_pass" placeholder="Пароль">
                                    <span class="input-group-addon" id="basic-addon2">
                                        <i class="fa fa-unlock-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Customer password - end -->
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
                                    <option value="12" selected="selected">Польщі Харків</option>
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

                        <!-- Purpose - start -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_purpose">Цель визита</label>
                                <select name="customer_purpose" id="customer_purpose" class="form-control">
                                    <option value="-1">-Будь ласка, оберіть-</option>
                                    <option value="1" selected="selected">Подача документів</option>
                                    <option value="2">Консультація</option>
                                </select>
                            </div>
                        </div>
                        <!-- Purpose - end -->

                        <!-- PTN - start -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_ptn">PTN</label>
                                <input type="text" class="form-control form-mask-ptn" id="customer_ptn" name="customer_ptn" placeholder="PTN">
                            </div>
                        </div>
                        <!-- PTN - end -->

                        <!-- Date return - start -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_return">Дата возвращения</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-sngl-datepicker" id="customer_return" name="customer_return" placeholder="Дата возвращения">
                                    <span class="input-group-addon" id="basic-addon2">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Date return - end -->
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="form-group" style="padding-top: 25px">
                                <button type="submit" class="btn btn-block btn-lg btn-success"><i class="glyphicon glyphicon-floppy-saved"></i> Сохранить данные</button>
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
