<?php
session_start();
require_once "header.php";
echo("<div class=\"container\">");
if (!$_SESSION['admin'] || $_SESSION['student'] || $_SESSION['worker']){
?>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-5 bg-light bg-opacity-75 border border-3 border-info rounded text-left mx-3 fs-5 p-3">
                <form action="admin_auth.php" method="post">
                    <div class="row mb-3">
                        <label for="inputLogin" class="col-sm-2 col-form-label">Логин</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="adminLogin">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="adminPassword">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Войти</button>
                </form>
            </div>
        </div>
    </div>
<?php }
else { ?>
        <!-- Форма регистрации -->
        <div class="row container mt-2 justify-content-center" id="teacher_reg">
            <div class="bg-light bg-opacity-75 border border-3 border-info rounded text-left fs-5 p-3 mt-4 col-5">
                <div class="mb-4 fs-3">
                    <span>Регистрация работника</span>
                </div>
                <form id="reg_form" action="registration.php" method="post" novalidate class="needs-validation">
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text col-4 d-flex justify-content-center">Фамилия</span>
                        <input required id="regSurname" type="text" class="regSurname form-control" placeholder="" name="surname" aria-label="surname" aria-describedby="basic-addon1">
                        <input type="hidden" name="type" value="teacher">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text col-4 d-flex justify-content-center">Имя</span>
                        <input required id="regName" type="text" class="regName form-control" placeholder="" name="firstname" aria-label="name" aria-describedby="basic-addon2">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text col-4 d-flex justify-content-center">Отчество</span>
                        <input required id="regPatron" type="text" class="regPatron form-control" placeholder="" name="parentname" aria-label="pathronymic" aria-describedby="basic-addon3">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text col-4 d-flex justify-content-center">Телефон</span>
                        <input required id="regPhone" type="text" class="regPhone form-control" placeholder="" name="phone" aria-label="phone" aria-describedby="basic-addon4">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text col-4 d-flex justify-content-center">Пароль</span>
                        <input required id="regPassword" type="password" class="regPassword form-control" placeholder="" name="password" aria-label="password" aria-describedby="basic-addon6">
                    </div>
                </div>

<!--                 <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text col-4 d-flex justify-content-center">Повторите пароль</span>
                        <input required id="regCheck" type="text" class="regCheck form-control" placeholder="" name="checkpassword" aria-label="password_check" aria-describedby="basic-addon7">
                    </div>
                </div> -->

                <div class="form-check form-switch my-3">
                    <input class="form-check-input regShowPass" type="checkbox" role="switch" id="regShowPass">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Показать пароль</label>
                </div>

                <div class="form-check form-switch my-3">
                    <input required class="regPersonalData form-check-input" type="checkbox" role="switch" id="regPersonalData" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Согласие на обработку персональных данных</label>
                </div>
                <button type="submit" class="btn btn-secondary">Отправить</button>
                </form>
            </div>
        </div>   
<?php }
?>
</div>
<?php
require_once "footer.php";
?>