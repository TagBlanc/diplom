<?php
require_once "header.php";
?>
	<!-- Основная часть страницы -->
	<div class="profile_badge container my-3">
		<div class="row justify-content-center">
			<div class="col-5 bg-light bg-opacity-75 border border-3 border-info rounded text-left mx-3">
			<span>Информация о профиле: (в случае, если ученик)</span><br>
			<span class="profile_badge_info">ФИО:</span><br>
			<span class="profile_badge_info">Класс:</span><br>
			<span class="profile_badge_info">Почта:</span><br>
			<span class="profile_badge_info">Пароль:</span><br>
			</div>

<!-- 			<div class="col-5 bg-light bg-opacity-75 border border-3 border-info rounded text-left mx-3">
			<span>Книги на руках: (в случае, если ученик)</span><br>
			<div class="onhands_books d-flex justify-content-center">
				<span class="onhands_books">*список книг*</span>
			</div>
			</div> -->
		</div> 
	</div>
	
	<div class="profile_badge container my-3">
		<div class="row justify-content-center">
			<div class="col-5 bg-light bg-opacity-75 border border-3 border-info rounded text-left mx-3">
			<span>Информация о профиле: (в случае, если библиотекарь)</span><br>
			<span class="profile_badge_info">ФИО:</span><br>
			<span class="profile_badge_info">Почта:</span><br>
			<span class="profile_badge_info">Пароль:</span><br>
			</div>
		</div>
	</div>
<?php
require_once "footer.php";
?>