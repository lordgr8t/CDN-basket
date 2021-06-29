<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>hello</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/gr8t.css">
	<link rel="stylesheet" href="css/media.css">
</head>
<body>


	
	<div class="basket_btn" onclick="basket_btn()">
		<img src="img/basket.svg">
	</div>
	<div class="bg_4_basket"></div>


	<form action="#">
		<div class="basket_body">
			<div class="basket dn"> <!-- dn -->
				<div class="basket_header d-flex jcsb aic mb-4">
					<div class="line"></div>
					<h3>Корзина</h3>
					<div class="line"></div>
				</div>

				<?php
				require('html/basket_item.html');
				?>
				<?php
				require('html/basket_item.html');
				?>
				<?php
				require('html/basket_item.html');
				?>
				<?php
				require('html/basket_item.html');
				?>
				<?php
				require('html/basket_item.html');
				?>
				<div class="tac allsummstyle">
					<span>Итого:</span><span class="allsumm">1125р</span>
				</div>
				<button class="btn basket_next">Оформить заказ</button>
			</div>

			<div class="order">
				<div class="basket_header d-flex jcsb aic mb-4">
					<div class="line"></div>
					<h3>Связь</h3>
					<div class="line"></div>
				</div>
				<div class="input">
					<div class="title">Как к вам обращяться?*</div>
					<input type="text">
				</div>
				<div class="input inputphone">
					<div class="title">Ваш номер телефона*</div>
					<div class="d-flex jcsb aic">
						<input type="text"> 
						<div class="checker">Проверить</div>
					</div>
				</div>
				<div class="info_order">
					Вы делаете 3ий заказ, при следующем заказе вы получите подарок.
				</div>
				<div class="input">
					<div class="title">Почта</div>
					<input type="text">
				</div>
				<div class="input">
					<div class="title">Коментарий к заказу</div>
					<textarea name="#" cols="10" rows="2"></textarea>
				</div>
				<div class="basket_header d-flex jcsb aic mt-4 mb-4">
					<div class="line"></div>
					<h3>Доставка</h3>
					<div class="line"></div>
				</div>
				<div class="deliver deleverdel">
					<div class="d-flex jcsb">
						<div class="deliv onedel">
							<h3>Почтой</h3>
							<p>Мы отправим Ваш закач, через СДЭК или почту России</p>
						</div>
						<div class="deliv twodel activedel">
							<h3>Курьером</h3>
							<p>Мы доставим Ваш заказ, в течении дня, по Санкт-Петербургу</p>
						</div>

					</div>
				</div>
				<div class="infodeliver mt-3">
					Стоимость доставки расчитвыется после оформления заказа. С Вами свяжутся, для уточнения деталей.
				</div>
				<div class="basket_header d-flex jcsb aic mt-4 mb-4">
					<div class="line"></div>
					<h3>Оплата</h3>
					<div class="line"></div>
				</div>
				<div class="deliver payment">
					<div class="d-flex jcsb">
						<div class="deliv threedel activedel">
							<h3>Онлайн</h3>
							<p>Вы можете оплатить товар онлайн, через любой банк</p>
						</div>
						<div class="deliv fourdel">
							<h3>Курьером</h3>
							<p>Вы можете оплатить товар при получении, курьеру</p>
						</div>						
					</div>
				</div>
				<div class="infodeliver mt-3">
					После оформления заказа, Вам на почту придёт чек для оплаты.
				</div>
			</div>
			<div class="tac allsummstyle">
				<span>Итого:</span><span class="allsumm">1125р</span>
			</div>
			<button class="btn basket_next">Оформить заказ</button>
		</div>
	</form>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>