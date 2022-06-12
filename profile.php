<?php
require_once "header.php";
session_start();
/* switch($_SESSION['role']){
	case 'student':
	?>
	<div class="profile_badge container my-3">
		<div class="row justify-content-center">
			<div class="col-5 bg-light bg-opacity-75 border border-3 border-info rounded text-left mx-3">
			<span>Информация о профиле:</span><br>
			<span class="profile_badge_info">ФИО: <?= $_SESSION['student']['sname'].' '.$_SESSION['student']['name'].' '.$_SESSION['student']['pname'] ?> </span><br>
			<span class="profile_badge_info">Класс: <?= $_SESSION['student']['class_num'].'-'.$_SESSION['student']['class_let'] ?></span><br>
			<span class="profile_badge_info">Телефон: <?= $_SESSION['student']['phone']?></span><br>
			<span class="profile_badge_info">Телефон родителей: <?= $_SESSION['student']['parent_phone']?></span><br>
			<span class="profile_badge_info">Пароль: <?= $_SESSION['student']['password']?></span><br>
			</div>
		</div> 
	</div>
	<?php
	break;

	case 'worker':
	?>
	<div class="profile_badge container my-3">
		<div class="row justify-content-center">
			<div class="col-5 bg-light bg-opacity-75 border border-3 border-info rounded text-left mx-3">
			<span>Информация о профиле: </span><br>
			<span class="profile_badge_info">ФИО: <?= $_SESSION['worker']['sname'].' '.$_SESSION['worker']['name'].' '.$_SESSION['worker']['pname'] ?></span><br>
			<span class="profile_badge_info">Телефон: <?= $_SESSION['worker']['phone']?></span><br>
			<span class="profile_badge_info">Пароль: <?= $_SESSION['worker']['password']?></span><br>
			</div>
		</div>
	</div>
	<?php
	break;

	case 'admin':
	?>
	<div class="profile_badge container mt-4">
		<div class="row justify-content-center">
			<div class="col-9 bg-light bg-opacity-75 border border-3 border-info rounded text-center">
			<span>Обранужена активная сессия администратора</span><br>
			</div>
		</div>
	<?php
	break;
	
    defaut:
	?>
	<div class="profile_badge container mt-4">
		<div class="row justify-content-center">
			<div class="col-9 bg-light bg-opacity-75 border border-3 border-info rounded text-center">
			<span>Вы не вошли в учётную запись</span><br>
		</div>
	</div>
	<?php
    } */
if ($_SESSION['student']) { ?>
	<div class="profile_badge container my-3">
		<div class="row justify-content-center">
			<div class="col-5 bg-light bg-opacity-75 border border-3 border-info rounded text-left mx-3">
			<span>Информация о профиле:</span><br>
			<span class="profile_badge_info">ФИО: <?= $_SESSION['student']['sname'].' '.$_SESSION['student']['name'].' '.$_SESSION['student']['pname'] ?> </span><br>
			<span class="profile_badge_info">Класс: <?= $_SESSION['student']['class_num'].'-'.$_SESSION['student']['class_let'] ?></span><br>
			<span class="profile_badge_info">Телефон: <?= $_SESSION['student']['phone']?></span><br>
			<span class="profile_badge_info">Телефон родителей: <?= $_SESSION['student']['parent_phone']?></span><br>
			<span class="profile_badge_info">Пароль: <?= $_SESSION['student']['password']?></span><br>
			</div>
		</div> 
	</div>
	<?php } else if ($_SESSION['worker']) { ?>
	<div class="profile_badge container my-3">
		<div class="row justify-content-center">
			<div class="col-5 bg-light bg-opacity-75 border border-3 border-info rounded text-left mx-3">
			<span>Информация о профиле: </span><br>
			<span class="profile_badge_info">ФИО: <?= $_SESSION['worker']['sname'].' '.$_SESSION['worker']['name'].' '.$_SESSION['worker']['pname'] ?></span><br>
			<span class="profile_badge_info">Телефон: <?= $_SESSION['worker']['phone']?></span><br>
			<span class="profile_badge_info">Пароль: <?= $_SESSION['worker']['password']?></span><br>
			</div>
		</div>
	</div> <?php } else if ($_SESSION['admin']) { ?>
	<div class="profile_badge container mt-4">
		<div class="row justify-content-center">
			<div class="col-9 bg-light bg-opacity-75 border border-3 border-info rounded text-center">
			<span>Обранужена активная сессия администратора</span><br>
			</div>
		</div>
	<?php } else { ?>
		<div class="profile_badge container mt-4">
		<div class="row justify-content-center">
			<div class="col-9 bg-light bg-opacity-75 border border-3 border-info rounded text-center">
			<span>Вы не вошли в учётную запись</span><br>
		</div>
	</div>
	<?php }

require_once "footer.php";
?>