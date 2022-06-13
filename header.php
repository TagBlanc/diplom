<?php
include_once "db.php";
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="/css/style.css" type="text/css">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
		<title>Library</title>
	</head>
	<body>

        <!-- Навигационная панель -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #273742;">
            <div class="container-fluid">
                <div class="logo mb-1">
                    <img src="/imgs/logo.png" alt="logo" height="35px" width="35px">
                </div>
                <a class="navbar-brand mx-2" href="index.php">Библиотека</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item border border-2 rounded mx-2">
                            <a class="nav-link btn btn-secondary" aria-current="page" href="/books.php">Учебники и книги</a>  
                        </li>
                        <li class="nav-item border border-2 rounded mx-2">
                            <a class="nav-link btn btn-secondary" aria-current="page" href="/profile.php">Профиль</a>
                        </li>
                        <li class="nav-item border border-2 rounded mx-2">
                            <a class="nav-link btn btn-secondary" aria-current="page" href="/admin_panel.php">Панель администратора</a>
                        </li>
                        <li class="nav-item border border-2 rounded mx-2">
                            <a class="nav-link btn btn-secondary" aria-current="page" href="/session_abort.php">Выход</a>
                        </li>
                    </ul>
                    <?php
                    if ($_SESSION['admin'] || $_SESSION['worker']){
                    ?>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Модерация
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" aria-current="page" data-bs-toggle="modal" data-bs-target="#add_book">Добавить книгу</a></li>
                                <li><a class="dropdown-item" aria-current="page" data-bs-toggle="modal" data-bs-target="#reg_student_form">Зарегистрировать ученика</a></li>
                                <li><a class="dropdown-item" aria-current="page" href="/reading_ticket.php">Читательский билет</a></li>
                            </ul>
                        </div>
                    <?php }
                    ?>
                    <div class="login_registration mx-2">
                        <button type="button" class="btn btn-secondary mx-1" data-bs-toggle="modal" data-bs-target="#login-modal">
                            Вход ученика
                        </button>
                        <button type="button" class="btn btn-secondary mx-1" data-bs-toggle="modal" data-bs-target="#login-modal-worker">
                            Вход работника
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Окно обратной связи -->
        <div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Обратная связь</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <form> <!-- Форма обратной связи -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Тема</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Сообщение</label>
                                <textarea type="password" class="form-control" id="exampleInputPassword1"></textarea>
                            </div>
                            <button type="submit" class="btn btn-secondary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Окно добавления новой книги -->
        <div class="modal fade add_book" id="add_book" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog container">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Добавить новую книгу</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <form id="book" name="book" action="/book_registration.php" method="post" enctype="multipart/form-data"> <!-- Форма добавления -->
                            <div class="input-group mb-1">
                                <label class="input-group-text" for="bookName">Название книги</label>
                                <input required type="text" placeholder="Введите название книги" class="form-control bookName" id="bookName" name="bookName">
                            </div>
                            <div class="dropend my-2 row">
                                <div class="d-flex justify-content-start col-7">
                                <label class="input-group-text col-9" for="book_category">Выберите категорию</label>
                                <select type="text" class="form-select book_category col-1" aria-label="book_category" name="bookCategory">
                                    <?php 
                                    $db = new Database();
                                    $query = "SELECT * FROM book_category";
                                    $categories = $db->all_res($query);                    
                                    foreach($categories as $category){
                                        echo "<option value=\"{$category[0]}\">{$category[1]}</option>";
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="dropend my-2 row">
                                <div class="d-flex justify-content-start col-7">
                                <label class="input-group-text col-9" for="book_edition">Выберите издание</label>
                                <select type="text" class="form-select book_edition col-1" aria-label="book_edition" name="bookEdition">
                                    <?php 
                                    $db = new Database();
                                    $query = "SELECT * FROM book_edition";
                                    $editions = $db->all_res($query);                    
                                    foreach($editions as $edition){
                                        echo "<option value=\"{$edition[0]}\">{$edition[1]}</option>";
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="dropend my-2 row">
                                <div class="d-flex justify-content-start col-7">
                                <label class="input-group-text col-9" for="book_author">Выберите автора</label>
                                <select type="text" class="form-select book_author col-1" aria-label="book_author" name="bookAuthor">
                                    <?php 
                                    $db = new Database();
                                    $query = "SELECT * FROM author";
                                    $editions = $db->all_res($query);                    
                                    foreach($editions as $edition){
                                        echo "<option value=\"{$edition[0]}\">{$edition[1]},{$edition[2]},{$edition[3]}</option>";
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="input-group mb-1 justify-conent-center">
                                    <label class="input-group-text" for="inputGroupFile01">Файл книги</label>
                                    <input required type="file" class="form-control" name="book_file" id="inputGroupFile01">
                                    <input required type="hidden" name="type" value="book">
                            </div>
                            <button type="submit" class="btn btn-secondary">Отправить</button>
                        </form>


                        <div class="modal-header"></div>
                        <h5 class="modal-title mt-3" id="exampleModalLabel">Добавить нового автора/издание/категорию</h5>

                        <form class="mt-4" id="category" name="category" method="post" action="/book_registration.php">
                            <div class="input-group mb-1">
                                <label class="input-group-text" for="addCategory">Категория</label>
                                <input required type="text" placeholder="Введите категорию" class="form-control addCategory" id="addCategory" name="addCategory">
                                <input required type="hidden" name="type" value="category">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-secondary mb-3 mt-2">Добавить новую категорию</button>
                            </div>
                        </form>
                        
                        <form class="mt-4" id="edition" name="edition" method="post" action="/book_registration.php">
                            <div class="input-group mb-1">
                                <label class="input-group-text" for="addEdition">Издание</label>
                                <input required type="text" placeholder="Введите издание (число)" class="form-control addEdition" id="addEdition" name="addEdition">
                                <input required type="hidden" name="type" value="edition">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-secondary mb-3 mt-2">Добавить новое издание</button>
                            </div>
                        </form>

                        <div class="container d-flex">
                            <form class="mt-4" id="author" name="author" method="post" action="/book_registration.php">
                                <div class="row">
                                    <label class="input-group-text col-6 my-1" for="addAuthorSname">Фамилия автора</label>
                                    <input required class="form-control author mb-1" type="text" placeholder="Введите фамилию автора" id="addAuthorSname" name="addAuthorSname">
                                </div>
                                <div class="row">
                                    <label class="input-group-text col-6 my-1" for="addAuthorName">Имя автора</label>
                                    <input required class="form-control author mb-1" type="text" placeholder="Введите имя автора" id="addAuthorName" name="addAuthorName">
                                </div>
                                <div class="row">
                                    <label class="input-group-text col-6 my-1" for="addAuthorPame">Отчество автора</label>
                                    <input required class="form-control author mb-1" type="text" placeholder="Введите отчество автора" id="addAuthorPname" name="addAuthorPname">
                                </div>
                                <input required type="hidden" name="type" value="author">
                                <div class="row">
                                    <button type="submit" class="btn btn-secondary mb-3 mt-2 col-7">Добавить нового автора</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Окно входа ученика -->
        <div class="modal fade login-modal" id="login-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Вход</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <form id="auth_form" action="/login_student.php" class="needs-validation" method="post"> <!-- Форма входа -->
                            <div class="mb-3">
                                <label for="authPhone" class="form-label">Номер телефона</label>
                                <input required type="text" class="form-control" id="authPhone" name="authPhone">
                            </div>
                            <div class="mb-3">
                                <label for="authPassword" class="form-label">Пароль</label>
                                <input required type="password" class="form-control" id="authPassword" name="authPassword">
                            </div>
                            <div class="form-check form-switch my-3">
                                <input class="form-check-input authShowPassword" type="checkbox" role="switch" id="authShowPassword">
                                <label class="form-check-label" for="authShowPassword">Показать пароль</label>
                            </div>
                            <button type="submit" class="btn btn-secondary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Окно входа работника -->
        <div class="modal fade login-modal" id="login-modal-worker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Вход</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <form id="auth_form" class="needs-validation" action="/login_worker.php" id="auth_worker" method="POST"> <!-- Форма входа -->
                            <div class="mb-3">
                                <label for="authPhone" class="form-label">Номер телефона</label>
                                <input required type="text" class="form-control" name="authPhoneWorker" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="authPasswordWorker" class="form-label">Пароль</label>
                                <input required type="password" class="form-control" name="authPasswordWorker" id="authPasswordWorker">
                            </div>
                            <div class="form-check form-switch my-3">
                                <input class="form-check-input authShowPasswordWorker" type="checkbox" role="switch" id="authShowPasswordWorker">
                                <label class="form-check-label" for="authShowPasswordWorker">Показать пароль</label>
                            </div>
                            <button type="submit" class="btn btn-secondary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Окно регистрации ученика-->
        <div class="modal fade login-modal" id="reg_student_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Регистрация ученика</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <form id="reg_student_form" action="registration.php" method="post" novalidate class="needs-validation">
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text col-4 d-flex justify-content-center">Фамилия</span>
                                <input required id="regSurname" type="text" class="regSurname form-control" placeholder="" name="surname" aria-label="surname" aria-describedby="basic-addon1">
                                <input type="hidden" name="type" value="student">
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
                                <span class="input-group-text col-4 d-flex justify-content-center">Номер класса</span>
                                <input required id="class_num" type="text" class="class_num form-control" placeholder="" name="class_num" aria-label="class_num" aria-describedby="basic-addon3">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text col-4 d-flex justify-content-center">Буква класса</span>
                                <input required id="class_let" type="text" class="class_let form-control" placeholder="" name="class_let" aria-label="class_let" aria-describedby="basic-addon3">
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
                                <span class="input-group-text col-4 d-flex justify-content-center">Телефон родителя</span>
                                <input required id="regParentPhone" type="text" class="regParentPhone form-control" placeholder="" name="parentphone" aria-label="parentphone" aria-describedby="basic-addon4">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text col-4 d-flex justify-content-center">Пароль</span>
                                <input required id="regPassword" type="password" class="regPassword form-control" placeholder="" name="password" aria-label="password" aria-describedby="basic-addon6">
                            </div>
                        </div>

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
            </div>
        </div>