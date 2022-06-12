<?php
require_once "header.php";
session_start();
?>
		<!-- Основная часть страницы -->
		<div class="container-fluid ms-5 books_container">
			<div class="row">
				<!-- <div class="container col-2 mx-5 my-4 justify-content-right border border-secondary border-3 p-3 bg-light bg-opacity-75">
				категории
				</div> -->
				<div class="container col-12 my-4 mx-1 justify-content-right border border-secondary border-3 p-3 bg-light bg-opacity-75">
					<div class="row justify-content-evenly">
						<?php
							$db = new Database();
							$query = "SELECT * FROM books";
							$books = $db->all_res($query);
							foreach($books as $book) { ?>
								<div class="container card col-3 mx-1 my-2">
									<div class="card-body container">
										<span class="card_text row">
											<?php 
												echo "{$book[1]}";
											?>
										</span>
										<span class="card_text row">
											Автор: 
											<?php 
												$author = $db->first_res("SELECT * FROM author WHERE id_author = '{$book[2]}'");
												echo "{$author[1]} {$author[2]} {$author[3]}";
											?>
										</span>
										<span class="card_text row">
											Издание  
											<?php 
												$edition = $db->first_res("SELECT * FROM book_edition WHERE id_edition = '{$book[3]}'");
												echo "{$edition[1]}";
											?>
										</span>
										<span class="card_text row">
											Категория:   
											<?php 
												$category = $db->first_res("SELECT * FROM book_category WHERE id_category = '{$book[4]}'");
												echo "{$category[1]}";
											?>
										</span>
										<div class="row justify-content-center mt-4 book_button">
											<a href="/book_page.php?value=<?=$book[0]?>" class="btn btn-primary col-4">Подробнее</a>
										</div>
									</div>
								</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
<?php
require_once "footer.php";
?>