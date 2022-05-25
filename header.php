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
                            <a class="nav-link btn btn-secondary" aria-current="page" data-bs-toggle="modal" data-bs-target="#feedback">Обратная связь</a>
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
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Модерация
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" aria-current="page" data-bs-toggle="modal" data-bs-target="#add_book">Добавить книгу</a></li>
                            <li><a class="dropdown-item" href="/book_requests.php">Зарегистрировать ученика</a></li>
                        </ul>
                        </div>
                    <div class="login_registration mx-2">
                        <button type="button" class="btn btn-secondary mx-1" data-bs-toggle="modal" data-bs-target="#login-modal">
                            Вход
                        </button>
                        <button type="button" class="btn btn-secondary mx-1" data-bs-toggle="modal" data-bs-target="#registration-modal">
                            Регистрация
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
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Добавить новую книгу</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <form> <!-- Форма добавления -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01">Выберите файл книги</label>
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                            <div class="row">
                                <div class="input-group mb-2">
                                    <label class="input-group-text" for="exampleInputText">Автор</label>
                                    <input type="text" placeholder="Формат заполнения: 'И. И. Иванович'" class="form-control" id="exampleInputText">
                                </div>
                            </div>
                            <div class="dropend my-2 row">
                                <div class="d-flex justify-content-start col-8">
                                    <button class="btn btn-secondary dropdown-toggle col-8" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Категория книги
                                    </button>
                                    <ul class="dropdown-menu justify-content-end" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Действие</a></li>
                                        <li><a class="dropdown-item" href="#">Другое действие</a></li>
                                        <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                                    </ul>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-secondary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Окно входа -->
        <div class="modal fade login-modal" id="login-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Вход</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <form id="auth_form" class="needs-validation"> <!-- Форма входа -->
                            <div class="mb-3">
                                <label for="authPhone" class="form-label">Номер телефона</label>
                                <input required type="email" class="form-control" id="authPhone" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="authPassword" class="form-label">Пароль</label>
                                <input required type="password" class="form-control" id="authPassword">
                            </div>
                            <div class="form-check form-switch my-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="authShowPassword" checked>
                                <label class="form-check-label" for="authShowPassword">Показать пароль</label>
                            </div>
                            <button type="submit" class="btn btn-secondary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Окно регистрации -->
        <div class="modal fade registration-modal" id="registration-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body container">

                <!-- Форма регистрации -->
                <form id="reg_form" action="registration.php" method="post" novalidate class="needs-validation">

                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text col-4 d-flex justify-content-center">Фамилия</span>
                            <input required id="regSurname" type="text" class="regSurname form-control" placeholder="" name="surname" aria-label="surname" aria-describedby="basic-addon1">
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
                            <span class="input-group-text col-4 d-flex justify-content-center">Телефон родителя</span>
                            <input required id="regParentPhone" type="text" class="regParentPhone form-control" placeholder="" name="parentphone" aria-label="parentphone" aria-describedby="basic-addon4">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text col-4 d-flex justify-content-center">Буква Класса</span>
                            <input required id="regClassLet" type="text" class="regClassLet form-control" placeholder="" name="class_let" aria-label="student_class" aria-describedby="basic-addon5">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text col-4 d-flex justify-content-center">Номер класса</span>
                            <input required id="regClassNum" type="text" class="regClassNum form-control" placeholder="" name="class_num" aria-label="student_class" aria-describedby="basic-addon5">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text col-4 d-flex justify-content-center">Пароль</span>
                            <input required id="regPassword" type="text" class="regPassword form-control" placeholder="" name="password" aria-label="password" aria-describedby="basic-addon6">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text col-4 d-flex justify-content-center">Повторите пароль</span>
                            <input required id="regCheck" type="text" class="regCheck form-control" placeholder="" name="checkpassword" aria-label="password_check" aria-describedby="basic-addon7">
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

        <!-- Окно записи на получение книги -->
<!--         <div class="modal fade" id="book_registration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Запись на получение книги</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="dropend my-2 ms-2 row">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-secondary dropdown-toggle col-7" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Категория книги
                                    </button>
                                    <ul class="dropdown-menu justify-content-end" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Действие</a></li>
                                        <li><a class="dropdown-item" href="#">Другое действие</a></li>
                                        <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dropend my-2 ms-2 row">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-secondary dropdown-toggle col-7" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Автор
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Действие</a></li>
                                        <li><a class="dropdown-item" href="#">Другое действие</a></li>
                                        <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dropend my-2 ms-2 row">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-secondary dropdown-toggle col-7" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Выберете книгу из списка
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Действие</a></li>
                                        <li><a class="dropdown-item" href="#">Другое действие</a></li>
                                        <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-secondary mt-3">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->