<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<title>Алдога - Каталог</title>
	<meta name="description" content="Алдога описание">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="img/favicon.png">
	<meta property="og:image" content="img/dest/preview.jpg">
	<link rel="stylesheet" href="css/app.min.css">

</head>

<body>

	<?php include 'components/header.php'; ?>


	<main class="main">
		<div class="main__wrapper">

			<!-- Хлебные крошки -->
			<div class="breadcrumb">
				<ul class="breadcrumb__list wrapper">
					<li class="breadcrumb__item">
						<a href="index.php" class="breadcrumb__link">Главная</a>
					</li>
					<li class="breadcrumb__item">
						<a href="cart.php" class="breadcrumb__link">Стейки форели</a>
					</li>
				</ul>
			</div>

			<div class="site-title">Стейки форели</div>

			<!-- Здесь начало верстки карточки -->
			<div class="cart">
				<div class="cart__wrapper wrapper wrapper_md">

					<div class="cart__main">
						<div class="cart__images cart-images">
							<div class="cart-images__thumbnails">
								<a data-fancybox="cart" href="./images/dest/products/product_5.jpg" class="cart-images__thumbnail-wrapper active">
									<img src="./images/dest/products/product_5-min.jpg" alt="" class="cart-images__thumbnail">
								</a>
								<a data-fancybox="cart" href="./images/dest/products/product_7.jpg" class="cart-images__thumbnail-wrapper">
									<img src="./images/dest/products/product_7-min.jpg" alt="" class="cart-images__thumbnail">
								</a>
								<a data-fancybox="cart" href="./images/dest/products/product_6.jpg" class="cart-images__thumbnail-wrapper">
									<img src="./images/dest/products/product_6-min.jpg" alt="" class="cart-images__thumbnail">
								</a>
								<a data-fancybox="cart" href="./images/dest/products/product_1.jpg" class="cart-images__thumbnail-wrapper">
									<img src="./images/dest/products/product_1-min.jpg" alt="" class="cart-images__thumbnail">
								</a>
							</div>

							<a data-fancybox="cart" href="./images/dest/products/product_5.jpg" class="cart-images__main-img-wrapper">
								<img src="./images/dest/products/product_5.jpg" alt="" class="cart-images__main-img">
							</a>
						</div>
						<div class="cart__content">
							<p class="cart__content-title">Стейки форели </p>
							<p class="cart__content-tags">свежие, охлаждённые, в упаковке по 250 шт.</p>
							<p class="cart__content-description">Товар в наличии!</p>
							<div class="cart__content-price-counter">
								<p class="cart__content-price">3000 р</p>
								<div class="site-counter cart__content-counter">
									<button class="site-counter__control site-counter__control_minus icon-minus"></button>
									<input type="number" value="1" class="site-counter__input">
									<button class="site-counter__control site-counter__control_plus icon-plus"></button>
								</div>
							</div>
							<div class="site-btn cart__content-btn">В корзину</div>
						</div>
					</div>

					<p class="cart__text site-text">
						Задача организации, в особенности же сложившаяся структура организации влечет за собой процесс
						внедрения и модернизации модели развития. Задача организации, в особенности же консультация с
						широким активом позволяет выполнять важные.
					</p>

					<div class="cart__descriptions">
						<div class="cart__descriptions-item">
							<p class="cart__descriptions-title">Энергетическая ценность:</p>
							<p class="cart__descriptions-value">1000 ккал (100 г)</p>
						</div>
						<div class="cart__descriptions-item">
							<p class="cart__descriptions-title">Состав:</p>
							<p class="cart__descriptions-value">Филе форели, соль</p>
						</div>
						<div class="cart__descriptions-item">
							<p class="cart__descriptions-title">Производитель:</p>
							<p class="cart__descriptions-value">Алдога</p>
						</div>
						<div class="cart__descriptions-item">
							<p class="cart__descriptions-title">Срок годности:</p>
							<p class="cart__descriptions-value">2 суток</p>
						</div>
						<div class="cart__descriptions-item">
							<p class="cart__descriptions-title">Упаковка:</p>
							<p class="cart__descriptions-value">Вакуумная</p>
						</div>
					</div>

				</div>
			</div>

			<!-- Преимущества -->
			<div class="features">
				<div class="features__wrapper wrapper wrapper_md">
					<div class="features__item">
						<img src="./images/dest/static/feature-1.png" alt="" class="features__img">
						<div class="features__content">
							<p class="features__title">Доставка в СПБ</p>
							<p class="features__descr">свежей рыбы в течении 24 часов</p>
						</div>
					</div>
					<div class="features__item">
						<img src="./images/dest/static/feature-2.png" alt="" class="features__img">
						<div class="features__content">
							<p class="features__title">Выгодные цены</p>
							<p class="features__descr">С нами можно экономить!</p>
						</div>
					</div>
					<div class="features__item">
						<img src="./images/dest/static/feature-3.png" alt="" class="features__img">
						<div class="features__content">
							<p class="features__title">По настоящему качественный</p>
							<p class="features__descr">и экологически чистый продукт</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Вас также может заинтересовать -->
			<section class="popular-goods">
				<div class="popular-goods__wrapper popular-goods__wrapper_slider popular-goods__wrapper_cart wrapper wrapper_md">
					<h3 class="site-title popular-goods__title">Вас также может заинтересовать</h3>
					<ul id="popularGoodsCardSlider" class="popular-goods__list goods-list goods-list_cart owl-carousel owl-theme">
						<!-- 1 -->
						<li class="goods-list__item goods-list__item_full">
							<a href="cart.php" class="goods-list__link">
								<div class="goods-list__img-wrapper">
									<img data-src="./images/dest/products/product_5.jpg" src="./images/dest/products/product_5-min.jpg" alt="" class="goods-list__img lazy">
								</div>
								<div class="goods-list__content">
									<p class="goods-list__title">Стейки форели</p>
									<p class="goods-list__tags">
										<span class="goods-list__tags-tag">свежие</span>
										<span class="goods-list__tags-tag">охлаждённые</span>
									</p>
									<p class="goods-list__price">
										<span class="goods-list__price-number">3000 Р</span>
										<span class="goods-list__price-measure"></span>
									</p>
								</div>
							</a>
						</li>
						<!-- 2 -->
						<li class="goods-list__item goods-list__item_full">
							<a href="cart.php" class="goods-list__link">
								<div class="goods-list__img-wrapper">
									<img data-src="./images/dest/products/product_6.jpg" src="./images/dest/products/product_6-min.jpg" alt="" class="goods-list__img lazy">
								</div>
								<div class="goods-list__content">
									<p class="goods-list__title">Форель охлаждённая </p>
									<p class="goods-list__tags">
										<span class="goods-list__tags-tag">тушка потрошённая</span>
										<span class="goods-list__tags-tag">без головы</span>
									</p>
									<p class="goods-list__price">
										<span class="goods-list__price-number">500 Р</span>
										<span class="goods-list__price-measure">КГ</span>
									</p>
								</div>
							</a>
						</li>
						<!-- 3 -->
						<li class="goods-list__item goods-list__item_full">
							<a href="cart.php" class="goods-list__link">
								<div class="goods-list__img-wrapper">
									<img data-src="./images/dest/products/product_7.jpg" src="./images/dest/products/product_7-min.jpg" alt="" class="goods-list__img lazy">
								</div>
								<div class="goods-list__content">
									<p class="goods-list__title">Форель малосольная</p>
									<p class="goods-list__tags">
										<span class="goods-list__tags-tag">филе форели слабого посола</span>
									</p>
									<p class="goods-list__price">
										<span class="goods-list__price-number">1000 Р</span>
										<span class="goods-list__price-measure">КГ</span>
									</p>
								</div>
							</a>
						</li>
						<!-- 4 -->
						<li class="goods-list__item goods-list__item_full">
							<a href="cart.php" class="goods-list__link">
								<div class="goods-list__img-wrapper">
									<img data-src="./images/dest/products/product_8.jpg" src="./images/dest/products/product_8-min.jpg" alt="" class="goods-list__img lazy">
								</div>
								<div class="goods-list__content">
									<p class="goods-list__title">Морс клюквенный</p>
									<p class="goods-list__tags">
										<span class="goods-list__tags-tag">свежий</span>
									</p>
									<p class="goods-list__price">
										<span class="goods-list__price-number">300 Р</span>
										<span class="goods-list__price-measure">Л</span>
									</p>
								</div>
							</a>
						</li>
						<!-- 5 -->
						<li class="goods-list__item goods-list__item_full">
							<a href="cart.php" class="goods-list__link">
								<div class="goods-list__img-wrapper">
									<img data-src="./images/dest/products/product_9.jpg" src="./images/dest/products/product_9-min.jpg" alt="" class="goods-list__img lazy">
								</div>
								<div class="goods-list__content">
									<p class="goods-list__title">Икра форели </p>
									<p class="goods-list__tags">
										<span class="goods-list__tags-tag">лососёвая отборная красная икра</span>
									</p>
									<p class="goods-list__price">
										<span class="goods-list__price-number">500 Р</span>
										<span class="goods-list__price-measure">КГ</span>
									</p>
								</div>
							</a>
						</li>
						<!-- 6 -->
						<li class="goods-list__item goods-list__item_full">
							<a href="cart.php" class="goods-list__link">
								<div class="goods-list__img-wrapper">
									<img data-src="./images/dest/products/product_10.jpg" src="./images/dest/products/product_10-min.jpg" alt="" class="goods-list__img lazy">
								</div>
								<div class="goods-list__content">
									<p class="goods-list__title">Сыр фермерский</p>
									<p class="goods-list__tags">
										<span class="goods-list__tags-tag">сладковатый, ореховый</span>
										<span class="goods-list__tags-tag">ореховый</span>
									</p>
									<p class="goods-list__price">
										<span class="goods-list__price-number">600 Р</span>
										<span class="goods-list__price-measure">КГ</span>
									</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</section>

			<?php include 'components/promo.php'; ?>
		</div>
	</main>

	<?php include 'components/footer.php'; ?>
	<?php include 'components/modals.php'; ?>


	<script src="js/app.min.js"></script>

</body>

</html>