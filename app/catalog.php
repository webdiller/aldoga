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

			<!-- <div class="wrapper">

				<div class="isotop-example123">

					<div class="vheader">
						<div class="container">
							<img src="./images/dest/logo.png" alt="" class="logo">
							<div class="menu">
								<ul>
									<li><a data-filter=".all" href="#!">All</a></li>
									<li><a data-filter=".finance" href="#!">Finance</a></li>
									<li><a data-filter=".tehnology" href="#!">Tehnology</a></li>
									<li><a data-filter=".ideas" href="#!">Ideas</a></li>
									<li><a data-filter=".news" href="#!">News</a></li>
									<li><a data-filter=".entertaiment" href="#!">Entertaiment</a></li>
									<li><a data-filter=".leadership" href="#!">Leadership</a></li>
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

			</div> -->

			<!-- Каталог -->
			<div id="catalogWithFilter" class="catalog">
				<div class="catalog__wrapper wrapper">
					<p class="catalog__title site-title">Каталог</p>

					<div class="catalog__header">

						<div class="catalog__filter">
							<button data-filter=".all" class="catalog__filter-btn catalog__filter-btn_all">Все</button>
							<button data-filter=".forel" class="catalog__filter-btn catalog__filter-btn_meat">Форель</button>
							<button data-filter=".ikra" class="catalog__filter-btn catalog__filter-btn_caviar">Икра форели</button>
							<button data-filter=".suri" class="catalog__filter-btn catalog__filter-btn_сheese">Сыры</button>
							<button data-filter=".yagodi" class="catalog__filter-btn catalog__filter-btn_berry">Ягоды</button>
						</div>

						<div class="catalog__sorting">
							<div class="catalog__sorting-item">
								<p class="catalog__sorting-title">Сортировать по:</p>
								<button data-sort-value="number" class="catalog__sorting-btn">
									<span class="catalog__sorting-btn-text_sm">Цена</span>
									<span class="catalog__sorting-btn-text_md">Цене</span>
								</button>
							</div>
						</div>

						<div id="catalogPreloader" class="catalog__preloader">
							<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
								<path fill="#000" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50" transform="rotate(185.007 50 50)">
									<animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite"></animateTransform>
								</path>
							</svg>
						</div>
					</div>



					<ul id="catalogIsotope" class="catalog__list catalog__list_isotope">

						<!-- Стейки форели -->
						<li class="goods-list__item goods-list__item_catalog all forel">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_1.jpg" src="./images/dest/products/product_1-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Стейки форели</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">свежие охлаждённые</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">3000 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure"></span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Форель охлаждённая -->
						<li class="goods-list__item goods-list__item_catalog all forel">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_6.jpg" src="./images/dest/products/product_6-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Форель охлаждённая </p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">тушка потрошённая без головы</span>
								</p>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">500 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">КГ</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Форель малосольная -->
						<li class="goods-list__item goods-list__item_catalog  all forel">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_7.jpg" src="./images/dest/products/product_7-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title"></p>
								<p class="goods-list__title goods-list__title_strict">Форель малосольная</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">филе форели слабого посола</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">1000 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">КГ</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Морс клюквенный -->
						<li class="goods-list__item goods-list__item_catalog all yagodi">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_8.jpg" src="./images/dest/products/product_8-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Морс клюквенный</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">свежий</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">300 Р <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">Л</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Икра форели -->
						<li class="goods-list__item goods-list__item_catalog all ikra">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_9.jpg" src="./images/dest/products/product_9-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Икра форели</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">лососёвая отборная красная икра</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">500 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">КГ</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Сыр фермерский -->
						<li class="goods-list__item goods-list__item_catalog all suri">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_10.jpg" src="./images/dest/products/product_10-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Сыр фермерский</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">сладковатый, ореховый</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">600 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">КГ</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Стейки форели -->
						<li class="goods-list__item goods-list__item_catalog all forel">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_1.jpg" src="./images/dest/products/product_1-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Стейки форели</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">свежие охлаждённые</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">3000 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure"></span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Форель охлаждённая -->
						<li class="goods-list__item goods-list__item_catalog all forel">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_6.jpg" src="./images/dest/products/product_6-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Форель охлаждённая </p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">тушка потрошённая без головы</span>
								</p>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">500 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">КГ</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Форель малосольная -->
						<li class="goods-list__item goods-list__item_catalog  all forel">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_7.jpg" src="./images/dest/products/product_7-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title"></p>
								<p class="goods-list__title goods-list__title_strict">Форель малосольная</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">филе форели слабого посола</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">1000 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">КГ</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Морс клюквенный -->
						<li class="goods-list__item goods-list__item_catalog all yagodi">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_8.jpg" src="./images/dest/products/product_8-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Морс клюквенный</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">свежий</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">300 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">Л</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Икра форели -->
						<li class="goods-list__item goods-list__item_catalog all ikra">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_9.jpg" src="./images/dest/products/product_9-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Икра форели</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">лососёвая отборная красная икра</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">500 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">КГ</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Сыр фермерский -->
						<li class="goods-list__item goods-list__item_catalog all suri">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_10.jpg" src="./images/dest/products/product_10-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Сыр фермерский</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">сладковатый, ореховый</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">600 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">КГ</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Стейки форели -->
						<li class="goods-list__item goods-list__item_catalog all forel">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_1.jpg" src="./images/dest/products/product_1-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Стейки форели</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">свежие охлаждённые</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">3000 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure"></span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Форель охлаждённая -->
						<li class="goods-list__item goods-list__item_catalog all forel">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_6.jpg" src="./images/dest/products/product_6-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Форель охлаждённая </p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">тушка потрошённая без головы</span>
								</p>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">500 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">КГ</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Форель малосольная -->
						<li class="goods-list__item goods-list__item_catalog  all forel">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_7.jpg" src="./images/dest/products/product_7-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title"></p>
								<p class="goods-list__title goods-list__title_strict">Форель малосольная</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">филе форели слабого посола</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">1000 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">КГ</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Морс клюквенный -->
						<li class="goods-list__item goods-list__item_catalog all yagodi">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_8.jpg" src="./images/dest/products/product_8-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Морс клюквенный</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">свежий</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">300 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">Л</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Икра форели -->
						<li class="goods-list__item goods-list__item_catalog all ikra">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_9.jpg" src="./images/dest/products/product_9-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Икра форели</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">лососёвая отборная красная икра</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">500 <span class="icon-rouble goods-list__price-icon"></span></span>
									<span class="goods-list__price-measure">КГ</span>
								</p>
								<div class="goods-list__footer">
									<a href="cart.php" class="site-btn site-btn_grey">Подробнее</a>
									<button class="site-btn">В корзину</button>
								</div>
							</div>
						</li>

						<!-- Сыр фермерский -->
						<li class="goods-list__item goods-list__item_catalog all suri">
							<div class="goods-list__img-wrapper">
								<img data-src="./images/dest/products/product_10.jpg" src="./images/dest/products/product_10-min.jpg" alt="" class="goods-list__img lazy">
							</div>
							<div class="goods-list__content">
								<p class="goods-list__title goods-list__title_strict">Сыр фермерский</p>
								<span class="goods-list__tags-tag goods-list__tags-tag_strict">сладковатый, ореховый</span>
								<p class="goods-list__price">
									<span class="goods-list__price-number number">600 <span class="icon-rouble goods-list__price-icon"></span></span>
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
							<a class="pagination__link pagination__link_btn" href="#!">Показать еще</a>
						</li>
						<li class="pagination__item">
							<a class="pagination__link pagination__link_selected" href="#!">1</a>
						</li>
						<li class="pagination__item">
							<a class="pagination__link" href="#!">2</a>
						</li>
						<li class="pagination__item">
							<a class="pagination__link" href="#!">3</a>
						</li>
						<li class="pagination__item">
							<a class="pagination__link pagination__link_next  icon-right-open-mini" href="#!">
							</a>
						</li>
					</ul>
				</div>


				<!-- Текст -->
				<section class="about">
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
						<a href="#!" class="about__more site-more">Читать подробнее</a>
					</div>
				</section>


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