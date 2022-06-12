<?php
require_once "header.php";
session_start();
$db = new Database();
$query = "SELECT * FROM books WHERE id_book = '{$_GET['value']}'";
$books = $db->all_res($query);
?>

<div class="container-fluid my-1 bg-light bg-opacity-75 border border-3 border-info rounded pdf_container justify-content-center">
	<div class="row justify-content-center">
		<div class="col text-center mt-1">
			<embed src="/books/<?=$books[0][5]?>" width="980" height="900" />
		</div>
		<?php
		if ($_SESSION)
		{
		?>
			<div class="row justify-content-center">
				<a href="/books/<?=$books[0][5]?>" class="btn btn-secondary btn-lg mb-1" role="button" download>Скачать книгу (при переходе на страницу нажмите комбинацию клавиш "ctrl + s")</a>
			</div>
		<?php
		} ?>
	</div>
</div>

<?php
require_once "footer.php";
?>