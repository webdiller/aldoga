<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<title>Алдога - Каталог</title>
	<meta name="description" content="Алдога описание">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="images/favicon.png">
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
						<a href="catalog.php" class="breadcrumb__link">Каталог</a>
					</li>
				</ul>
			</div>

			<div class="wrapper">

				<div class="isotop-example123">

					<div class="vheader">
						<div class="container">
							<img src="./images/dest/logo.png" alt="" class="logo">
							<div class="menu">
								<ul>
									<li><a data-filter=".all" href="#">All</a></li>
									<li><a data-filter=".finance" href="#">Finance</a></li>
									<li><a data-filter=".tehnology" href="#">Tehnology</a></li>
									<li><a data-filter=".ideas" href="#">Ideas</a></li>
									<li><a data-filter=".news" href="#">News</a></li>
									<li><a data-filter=".entertaiment" href="#">Entertaiment</a></li>
									<li><a data-filter=".leadership" href="#">Leadership</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="contenct">
						<div class="ccontainer2">

							<figure class="card all finance">
								<img src="./images/dest/products/product_1-min.jpg" alt="">
								<figcaption>
									<h3>finance</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias labore totam distinctio recusandae perspiciatis in! Nam ducimus architecto assumenda, aliquam officiis quo laudantium reiciendis impedit atque hic, quas, blanditiis perferendis.</p>

								</figcaption>
							</figure>

							<figure class="card all tehnology">
								<img src="./images/dest/products/product_1-min.jpg" alt="">
								<figcaption>
									<h3>Tehnology</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias labore totam distinctio recusandae perspiciatis in! Nam ducimus architecto assumenda, aliquam officiis quo laudantium reiciendis impedit atque hic, quas, blanditiis perferendis.</p>

								</figcaption>
							</figure>

							<figure class="card all ideas">
								<img src="./images/dest/products/product_1-min.jpg" alt="">
								<figcaption>
									<h3>Iideas</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias labore totam distinctio recusandae perspiciatis in! Nam ducimus architecto assumenda, aliquam officiis quo laudantium reiciendis impedit atque hic, quas, blanditiis perferendis.</p>

								</figcaption>
							</figure>

							<figure class="card all news">
								<img src="./images/dest/products/product_1-min.jpg" alt="">
								<figcaption>
									<h3>News</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias labore totam distinctio recusandae perspiciatis in! Nam ducimus architecto assumenda, aliquam officiis quo laudantium reiciendis impedit atque hic, quas, blanditiis perferendis.</p>

								</figcaption>
							</figure>

							<figure class="card all entertaiment">
								<img src="./images/dest/products/product_1-min.jpg" alt="">
								<figcaption>
									<h3>Entertaiment</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias labore totam distinctio recusandae perspiciatis in! Nam ducimus architecto assumenda, aliquam officiis quo laudantium reiciendis impedit atque hic, quas, blanditiis perferendis.</p>

								</figcaption>
							</figure>

							<figure class="card all leadership">
								<img src="./images/dest/products/product_1-min.jpg" alt="">
								<figcaption>
									<h3>Leadership</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias labore totam distinctio recusandae perspiciatis in! Nam ducimus architecto assumenda, aliquam officiis quo laudantium reiciendis impedit atque hic, quas, blanditiis perferendis.</p>

								</figcaption>
							</figure>

						</div>
					</div>

				</div>

			</div>

			<!-- Каталог -->
			<!-- <div id="catalogWithFilter" class="catalog">
				<div class="catalog__wrapper wrapper">
					<p class="catalog__title site-title">Каталог</p>

					<div class="catalog__header catalog-header">
						<div class="catalog-header__wrapper">
							<div class="catalog-header__categories">

								<input class="catalog-header__categories-input" type="radio" checked name="catalogSorting" id="catalog1">
								<label class="catalog-header__categories-label" for="catalog1">Форель</label>

								<input class="catalog-header__categories-input" type="radio" name="catalogSorting" id="catalog2">
								<label class="catalog-header__categories-label" for="catalog2">Икра форели</label>

								<input class="catalog-header__categories-input" type="radio" name="catalogSorting" id="catalog3">
								<label class="catalog-header__categories-label" for="catalog3">Сыры</label>

								<input class="catalog-header__categories-input" type="radio" name="catalogSorting" id="catalog4">
								<label class="catalog-header__categories-label" for="catalog4">Ягоды</label>
							</div>
							<div class="catalog-header__sorting">
								<p class="catalog-header__sorting-title">Сортировать по:</p>
								<div class="catalog-header__sorting-select">
									<button id="catalogWithFilterPriceToggle" class="catalog-header__sorting-button">
										Цене
										<span class="catalog-header__sorting-icon icon-up-small active"></span>
									</button>
								</div>
							</div>
						</div>
					</div>

					<ul class="goods-list catalog__goods-list">

						<li class="goods-list__item goods-list__item_catalog">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_1.jpg" src="./images/dest/products/product_1-min.jpg" alt="" class="goods-list__img lazy">
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
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<li class="goods-list__item goods-list__item_catalog">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_2.jpg" src="./images/dest/products/product_2-min.jpg" alt="" class="goods-list__img lazy">
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
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<li class="goods-list__item goods-list__item_catalog">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_3.jpg" src="./images/dest/products/product_3-min.jpg" alt="" class="goods-list__img lazy">
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
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<li class="goods-list__item goods-list__item_catalog">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_4.jpg" src="./images/dest/products/product_4-min.jpg" alt="" class="goods-list__img lazy">
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
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<li class="goods-list__item goods-list__item_catalog">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_5.jpg" src="./images/dest/products/product_5-min.jpg" alt="" class="goods-list__img lazy">
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
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<li class="goods-list__item goods-list__item_catalog">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_6.jpg" src="./images/dest/products/product_6-min.jpg" alt="" class="goods-list__img">
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
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>
					</ul>

					<ul class="catalog__pagination pagination wrapper">
						<li class="pagination__item">
							<a class="pagination__link pagination__link_btn" href="#">Показать еще</a>
						</li>
						<li class="pagination__item">
							<a class="pagination__link pagination__link_selected" href="#">1</a>
						</li>
						<li class="pagination__item">
							<a class="pagination__link" href="#">2</a>
						</li>
						<li class="pagination__item">
							<a class="pagination__link" href="#">3</a>
						</li>
						<li class="pagination__item">
							<a class="pagination__link pagination__link_next  icon-right-open-mini" href="#">
							</a>
						</li>
					</ul>
				</div>
			</div> -->


			<!-- Текст -->
			<!-- <section class="about">
				<div class="about__wrapper wrapper wrapper_md">
					<h2 class="site-title about__title">Текст</h2>
					<p class="about__text site-text">
						Задача организации, в особенности же сложившаяся структура организации влечет за собой процесс
						внедрения и модернизации модели развития. Задача организации, в особенности же консультация с
						широким активом позволяет выполнять важные по разработке модели развития. С другой стороны новая
						модель организационной деятельности представляет собой интересный эксперимент проверки. Не
						следует, однако забывать, что реализация намеченных плановых заданий в значительной степени
						обуславливает создание систем массового участия. Товарищи! укрепление и развитие структуры
						требуют от нас анализа модели развития.
					</p>
					<a href="#" class="about__more site-more">Читать подробнее</a>
				</div>
			</section> -->


			<!-- Преимущества -->
			<!-- <div class="features">
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
			</div> -->

			<?php include 'components/promo.php'; ?>

		</div>
	</main>

	<?php include 'components/footer.php'; ?>
	<?php include 'components/modals.php'; ?>

	<script src="js/app.min.js"></script>
	<style>
	</style>

</body>

</html>