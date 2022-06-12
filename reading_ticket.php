<?php
require_once "header.php";
session_start();
?>
	<!-- Основная часть страницы -->
	<div class="container my-3 bg-light bg-opacity-75 border border-3 border-info rounded">
		<form id="ticket" name="ticket" action="/ticket_registration.php" method="post">
			<div class="dropend my-2 row">
				<div class="d-flex col-7">
					<label class="input-group-text col-8" for="ticketStudent">Выберите ученика</label>
					<select type="text" class="form-select ticketStudent col-1" aria-label="ticketStudent" name="ticketStudent">
						<?php 
						$db = new Database();
						$query = "SELECT * FROM student";
						$students = $db->all_res($query);                    
						foreach($students as $student){
							echo "<option value=\"{$student[0]}\">{$student[1]} {$student[2]} {$student[3]}</option>";
						}
						?>
					</select>
				</div>
			</div>
			<div class="dropend my-2 row">
				<div class="d-flex col-7">
					<label class="input-group-text col-8" for="ticketBook">Выберите книгу</label>
					<select type="text" class="form-select ticketBook col-1" aria-label="ticketBook" name="ticketBook">
						<?php 
						$db = new Database();
						$query = "SELECT * FROM books";	
						$books = $db->all_res($query);                    
						foreach($books as $book){
							echo "<option value=\"{$book[0]}\">{$book[1]}</option>";
						}
						?>
					</select>
				</div>
			</div>
			<div class="my-2 row">
				<div class="d-flex col-7">
					<label class="input-group-text col-8" for="ticketDate">Выберите дату</label>
					<input type="date" name="ticketDate" id="ticketDate">
				</div>
			</div>
			<div class="my-2 row">
				<div class="d-flex col-7">
					<button type="submit" class="btn btn-secondary">Записать в читательский билет</button>
				</div>
			</div>
		</form>
	</div>

    <div class="container my-3 bg-light bg-opacity-75 border border-3 border-info rounded">
		<?php
		$query = "SELECT * FROM reading_ticket";
		$reading_tickets = $db->all_res($query);
		foreach($reading_tickets as $reading_ticket) { ?>
		<div class="row">
			<div class="card">
				<div class="card-body">
					Номер читательского билета:
					<?php
						echo "{$reading_ticket[0]}";
					?><br/>
					Временный владелец книги: 
					<?php 
						$student = $db->first_res("SELECT * FROM student WHERE id_student = '{$reading_ticket[1]}'");
						echo "{$student[1]} {$student[2]} {$student[3]}";?><br/><?php 
						echo "Телефон / телефон родителя - {$student[6]} / {$student[7]}";
					?><br/>
					Название книги: 
					<?php 
						$book = $db->first_res("SELECT * FROM books WHERE id_book = '{$reading_ticket[2]}'");
						echo "{$book[1]}";
					?><br/>
					Дата открытия билета: 
					<?php 
						$open_date = $db->first_res("SELECT * FROM reading_ticket WHERE open_date = '{$reading_ticket[3]}'");
						echo "{$open_date[3]}";
					?><br/>
					<!-- <a class="btn btn-secondary mt-3" href="/ticket_delete.php?value=<?=$reading_ticket[0]?>" role="button">Удалить запись из читательского билета</a> -->
				</div>
			</div>
		</div>
		<?php } ?>
	</div>

<?php
require_once "footer.php";
?>