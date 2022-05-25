<?php
require_once "header.php";
?>
		<!-- Основная часть страницы -->
		<div class="d-flex border border-secondary border-5">
			<div class="list-group mx-auto my-4 minheight">
				<div class="accordion" id="accordionExample">

					<div class="accordion-item"> <!-- Категории книг -->
						<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Категории книг &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;
						</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Категория №1
									</label>
								</div>	
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Категория №2
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Категория №3
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Категория №4
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Категория №5
									</label>
								</div>
							</div>
						</div>
					</div>	

					<div class="accordion-item"> <!-- Автор -->
						<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							Автор &ensp; &ensp; &ensp;
						</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Автор №1
									</label>
								</div>	
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Автор №2
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Автор №3
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Автор №4
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Автор №5
									</label>
								</div>
							</div>
						</div>
					</div>	

					<div class="accordion-item"> <!-- Год выпуска -->
						<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
							Год издания &ensp; &ensp; &ensp;
						</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										2010
									</label>
								</div>	
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										2011
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										2012
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										2013
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										2014
									</label>
								</div>
							</div>
						</div>
					</div>	

				</div>
			</div>
			<div class="container my-4 mx-auto justify-content-right">
				<div class="row">
					<div class="card col-3 mx-5">
						<img src="/imgs/book.jpg" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Название книги</h5>
						<p class="card-text">Информация о книге, год, издание, автор</p>
						<a href="#" class="btn btn-primary">Переход на страницу</a>
						</div>
					</div>
					<div class="card col-3 mx-5">
						<img src="/imgs/book.jpg" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Название книги</h5>
						<p class="card-text">Информация о книге, год, издание, автор</p>
						<a href="#" class="btn btn-primary">Переход на страницу</a>
						</div>
					</div>
					<div class="card col-3 mx-5">
						<img src="/imgs/book.jpg" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Название книги</h5>
						<p class="card-text">Информация о книге, год, издание, автор</p>
						<a href="#" class="btn btn-primary">Переход на страницу</a>
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="card col-3 mx-5">
						<img src="/imgs/book.jpg" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Название книги</h5>
						<p class="card-text">Информация о книге, год, издание, автор</p>
						<a href="#" class="btn btn-primary">Переход на страницу</a>
						</div>
					</div>
					<div class="card col-3 mx-5">
						<img src="/imgs/book.jpg" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Название книги</h5>
						<p class="card-text">Информация о книге, год, издание, автор</p>
						<a href="#" class="btn btn-primary">Переход на страницу</a>
						</div>
					</div>
					<div class="card col-3 mx-5">
						<img src="/imgs/book.jpg" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Название книги</h5>
						<p class="card-text">Информация о книге, год, издание, автор</p>
						<a href="#" class="btn btn-primary">Переход на страницу</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
require_once "footer.php";
?>