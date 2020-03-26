<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<title>Алдога - Главная</title>
	<meta name="description" content="Алдога описание">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="images/favicon.png">
	<link rel="stylesheet" href="css/app.min.css">

</head>

<body>

	<?php include 'components/header-index.php'; ?>

	<main class="main">
		<div class="main__wrapper">

			<!-- Баннер в шапке -->
			<div id="mainBanner" class="main-banner">
				<div class="main-banner__wrapper wrapper wrapper_lg">
					<div class="main-banner__carousel owl-carousel owl-theme">
						<div class="main-banner__item item">
							<img src="./images/dest/static/main-banner-1-min.jpg" data-src="./images/dest/static/main-banner-1.jpg" alt="" class="main-banner__img lazy">
							<img src="./images/dest/static/banner-logo.png" alt="Сделано в Карелии" class="main-banner__img-logo">
							<div class="main-banner__content">
								<p class="main-banner__top-text">Весь июнь</p>
								<p class="main-banner__main-text">скидка -20% на филе форели</p>
								<button class="main-banner__btn site-btn site-btn_banner">подробнее</button>
							</div>
						</div>
						<div class="main-banner__item item">
							<img src="./images/dest/static/main-banner-1-min.jpg" data-src="./images/dest/static/main-banner-1.jpg" alt="" class="main-banner__img lazy">
							<img src="./images/dest/static/banner-logo.png" alt="Сделано в Карелии" class="main-banner__img-logo">
							<div class="main-banner__content">
								<p class="main-banner__top-text">Весь июль</p>
								<p class="main-banner__main-text">скидка -30% на икру форели</p>
								<button class="main-banner__btn site-btn site-btn_banner">подробнее</button>
							</div>
						</div>
						<div class="main-banner__item item">
							<img src="./images/dest/static/main-banner-1-min.jpg" data-src="./images/dest/static/main-banner-1.jpg" alt="" class="main-banner__img lazy">
							<img src="./images/dest/static/banner-logo.png" alt="Сделано в Карелии" class="main-banner__img-logo">
							<div class="main-banner__content">
								<p class="main-banner__top-text">Весь август</p>
								<p class="main-banner__main-text">скидка -40% на весь ассортимент</p>
								<button class="main-banner__btn site-btn site-btn_banner">подробнее</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Наша продукция -->
			<section class="our-production">
				<div class="our-production__wrapper wrapper wrapper_lg">
					<h2 class="our-production__title site-title">Наша продукция</h2>
					<ul class="our-production__list production-list">
						<li class="production-list__item">
							<a href="catalog.php" class="production-list__link">
								<img data-src="./images/dest/products/product_5.jpg" src="./images/dest/products/product_5-min.jpg" alt="" class="production-list__img lazy">
								<div class="production-list__content">
									<p class="production-list__title">форель</p>
									<p class="production-list__tags">
										<span class="production-list__tags-item">соленая</span>
										<span class="production-list__tags-item">копченая</span>
										<span class="production-list__tags-item">свежая</span>
									</p>
								</div>
							</a>
						</li>
						<li class="production-list__item">
							<a href="catalog.php" class="production-list__link">
								<img data-src="./images/dest/products/product_6.jpg" src="./images/dest/products/product_6-min.jpg" alt="" class="production-list__img lazy">
								<div class="production-list__content">
									<p class="production-list__title">икра форели</p>
									<p class="production-list__tags">
										<span class="production-list__tags-item">лососёвая отборная красная икра</span>
									</p>
								</div>
							</a>
						</li>
						<li class="production-list__item">
							<a href="catalog.php" class="production-list__link">
								<img data-src="./images/dest/products/product_7.jpg" src="./images/dest/products/product_7-min.jpg" alt="" class="production-list__img lazy">
								<div class="production-list__content">
									<p class="production-list__title">сыры</p>
									<p class="production-list__tags">
										<span class="production-list__tags-item">вкуснейшие фермерские сыры</span>
									</p>
								</div>
							</a>
						</li>
						<li class="production-list__item">
							<a href="catalog.php" class="production-list__link">
								<img data-src="./images/dest/products/product_8.jpg" src="./images/dest/products/product_8-min.jpg" alt="" class="production-list__img lazy">
								<div class="production-list__content">
									<p class="production-list__title">ягоды</p>
									<p class="production-list__tags">
										<span class="production-list__tags-item">варенья, морсы, джемы</span>
									</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</section>

			<!-- О нас -->
			<section class="about">
				<div class="about__wrapper wrapper wrapper_md">
					<h2 class="site-title about__title">О нас</h2>
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
			</section>

			<!-- Популярные товары -->
			<section class="popular-goods">
				<div class="popular-goods__wrapper popular-goods__wrapper_slider wrapper wrapper_md">
					<h3 class="site-title popular-goods__title">Популярные товары</h3>
					<ul id="popularGoodsSlider" class="popular-goods__list goods-list goods-list_slider owl-carousel owl-theme">
						<!-- 1 -->
						<li class="goods-list__item">
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
						<li class="goods-list__item">
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
						<li class="goods-list__item">
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
						<li class="goods-list__item">
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
						<li class="goods-list__item">
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
						<li class="goods-list__item">
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
					<a href="cart.php" class="site-btn popular-goods__btn">Перейти в каталог
					</a>
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

			<!-- Доставка -->
			<section class="delivery">
				<div class="delivery__wrapper wrapper wrapper_md">
					<h3 class="site-title delivery__title">Доставка</h3>
					<p class="site-text delivery__text">
						На данным момент мы доставляем нашу продукцию в три города: Москва, Санкт-Петербург и
						Петрозаводск. Ниже можно узнать ближайшую дату доставки для вашего города. Ещё какой-нибудь
						текст, например, о возможности самовывоза или планов.
					</p>

					<!-- desktop -->
					<form class="delivery-form delivery-form_desktop">
						<div class="delivery-form__wrapper">
							<div id="deliveryTabs" class="delivery-form__tabs">
								<input class="delivery-form__tabs-input" checked type="radio" value="moscow" name="deliveryFormCity" id="deliveryFormMoscow">
								<label class="delivery-form__tabs-label" for="deliveryFormMoscow">Москва</label>
								<input class="delivery-form__tabs-input" type="radio" value="spb" name="deliveryFormCity" id="deliveryFormSPB">
								<label class="delivery-form__tabs-label" for="deliveryFormSPB">Санкт-Петербург</label>
								<input class="delivery-form__tabs-input" type="radio" value="petrozavodsk" name="deliveryFormCity" id="deliveryFormPetrozavodsk">
								<label class="delivery-form__tabs-label" for="deliveryFormPetrozavodsk">Петрозаводск</label>
							</div>
							<div id="deliveryContent" class="delivery-form__content">
								<div class="delivery-form__data">
									<div class="delivery-form__header">
										<p class="delivery-form__header-title">Служба</p>
										<p class="delivery-form__header-title">
											<span class="delivery-form__header-title_lg">Ближайшая дата доставки</span>
											<span class="delivery-form__header-title_md">Дата</span>
										</p>
										<p class="delivery-form__header-title delivery-form__header-title_price">
											Стоимость</p>
									</div>

									<div class="delivery-form__body-item">
										<p class="delivery-form__body-text">Самовывоз</p>
										<p id="deliveryDatePickup" class="delivery-form__body-text delivery-form__body-text_date">14.04.2020
										</p>
										<p id="deliveryPricePickup" class="delivery-form__body-text delivery-form__body-text_price">0 Р</p>
									</div>

									<div class="delivery-form__body-item">
										<p class="delivery-form__body-text">Курьером службы DPD до подъезда</p>
										<p id="deliveryDateDPD" class="delivery-form__body-text delivery-form__body-text_date">13.04.2020
										</p>
										<p id="deliveryPriceDPD" class="delivery-form__body-text delivery-form__body-text_price">450 Р</p>
									</div>

									<div class="delivery-form__body-item">
										<p class="delivery-form__body-text">Курьером Яндекс.Еда до подъезда</p>
										<p id="deliveryDateYandex" class="delivery-form__body-text delivery-form__body-text_date">14.04.2020
										</p>
										<p id="deliveryPriceYandex" class="delivery-form__body-text delivery-form__body-text_price">500 Р</p>
									</div>
								</div>

								<div class="delivery-form__footer">
									<p class="site-text site-text_bold delivery-form__footer-title">Оплата:</p>
									<p class="site-text delivery-form__footer-text">Картой на сайте</p>
									<p class="site-text delivery-form__footer-text">Картой курьеру</p>
									<p class="site-text delivery-form__footer-text">Наличными курьеру</p>
								</div>

							</div>
						</div>
					</form>

					<!-- mobile -->
					<div class="delivery-form delivery-form_mobile">
						<div id="deliverySlider" class="delivery-form__wrapper owl-carousel owl-theme">

							<div class="delivery-form__item">
								<p class="delivery-form__item-title">Москва</p>
								<div class="delivery-form__content">
									<div class="delivery-form__data">
										<div class="delivery-form__header">
											<p class="delivery-form__header-title delivery-form__header-title_service">
												Служба</p>
											<p class="delivery-form__header-title">
												<span class="delivery-form__header-title_lg">Ближайшая дата
													доставки</span>
												<span class="delivery-form__header-title_md">Дата</span>
											</p>
											<p class="delivery-form__header-title delivery-form__header-title_price">
												Стоимость</p>
										</div>

										<div class="delivery-form__body-item">
											<p class="delivery-form__body-text delivery-form__body-text_service">
												Самовывоз</p>
											<p class="delivery-form__body-text delivery-form__body-text_date">17.04.2020
											</p>
											<p class="delivery-form__body-text delivery-form__body-text_price">0 Р</p>
										</div>

										<div class="delivery-form__body-item">
											<p class="delivery-form__body-text delivery-form__body-text_service">
												Курьером службы DPD до подъезда</p>
											<p class="delivery-form__body-text delivery-form__body-text_date">17.04.2020
											</p>
											<p class="delivery-form__body-text delivery-form__body-text_price">750 Р</p>
										</div>

										<div class="delivery-form__body-item">
											<p class="delivery-form__body-text delivery-form__body-text_service">
												Курьером Яндекс.Еда до подъезда</p>
											<p class="delivery-form__body-text delivery-form__body-text_date">17.04.2020
											</p>
											<p class="delivery-form__body-text delivery-form__body-text_price">800 Р</p>
										</div>
									</div>

									<div class="delivery-form__footer">
										<p class="site-text site-text_bold delivery-form__footer-title">Оплата:</p>
										<p class="site-text delivery-form__footer-text">Картой на сайте</p>
										<p class="site-text delivery-form__footer-text">Картой курьеру</p>
										<p class="site-text delivery-form__footer-text">Наличными курьеру</p>
									</div>

								</div>
							</div>

							<div class="delivery-form__item">
								<p class="delivery-form__item-title">Петрозаводск</p>
								<div class="delivery-form__content">
									<div class="delivery-form__data">
										<div class="delivery-form__header">
											<p class="delivery-form__header-title delivery-form__header-title_service">
												Служба</p>
											<p class="delivery-form__header-title">
												<span class="delivery-form__header-title_lg">Ближайшая дата
													доставки</span>
												<span class="delivery-form__header-title_md">Дата</span>
											</p>
											<p class="delivery-form__header-title delivery-form__header-title_price">
												Стоимость</p>
										</div>

										<div class="delivery-form__body-item">
											<p class="delivery-form__body-text delivery-form__body-text_service">
												Самовывоз</p>
											<p class="delivery-form__body-text delivery-form__body-text_date">17.04.2020
											</p>
											<p class="delivery-form__body-text delivery-form__body-text_price">0 Р</p>
										</div>

										<div class="delivery-form__body-item">
											<p class="delivery-form__body-text delivery-form__body-text_service">
												Курьером службы DPD до подъезда</p>
											<p class="delivery-form__body-text delivery-form__body-text_date">17.04.2020
											</p>
											<p class="delivery-form__body-text delivery-form__body-text_price">750 Р</p>
										</div>

										<div class="delivery-form__body-item">
											<p class="delivery-form__body-text delivery-form__body-text_service">
												Курьером Яндекс.Еда до подъезда</p>
											<p class="delivery-form__body-text delivery-form__body-text_date">17.04.2020
											</p>
											<p class="delivery-form__body-text delivery-form__body-text_price">800 Р</p>
										</div>
									</div>

									<div class="delivery-form__footer">
										<p class="site-text site-text_bold delivery-form__footer-title">Оплата:</p>
										<p class="site-text delivery-form__footer-text">Картой на сайте</p>
										<p class="site-text delivery-form__footer-text">Картой курьеру</p>
										<p class="site-text delivery-form__footer-text">Наличными курьеру</p>
									</div>

								</div>
							</div>

							<div class="delivery-form__item">
								<p class="delivery-form__item-title">Санкт-Петербург</p>
								<div class="delivery-form__content">
									<div class="delivery-form__data">
										<div class="delivery-form__header">
											<p class="delivery-form__header-title delivery-form__header-title_service">
												Служба</p>
											<p class="delivery-form__header-title">
												<span class="delivery-form__header-title_lg">Ближайшая дата
													доставки</span>
												<span class="delivery-form__header-title_md">Дата</span>
											</p>
											<p class="delivery-form__header-title delivery-form__header-title_price">
												Стоимость</p>
										</div>

										<div class="delivery-form__body-item">
											<p class="delivery-form__body-text delivery-form__body-text_service">
												Самовывоз</p>
											<p class="delivery-form__body-text delivery-form__body-text_date">17.04.2020
											</p>
											<p class="delivery-form__body-text delivery-form__body-text_price">0 Р</p>
										</div>

										<div class="delivery-form__body-item">
											<p class="delivery-form__body-text delivery-form__body-text_service">
												Курьером службы DPD до подъезда</p>
											<p class="delivery-form__body-text delivery-form__body-text_date">17.04.2020
											</p>
											<p class="delivery-form__body-text delivery-form__body-text_price">750 Р</p>
										</div>

										<div class="delivery-form__body-item">
											<p class="delivery-form__body-text delivery-form__body-text_service">
												Курьером Яндекс.Еда до подъезда</p>
											<p class="delivery-form__body-text delivery-form__body-text_date">17.04.2020
											</p>
											<p class="delivery-form__body-text delivery-form__body-text_price">800 Р</p>
										</div>
									</div>

									<div class="delivery-form__footer">
										<p class="site-text site-text_bold delivery-form__footer-title">Оплата:</p>
										<p class="site-text delivery-form__footer-text">Картой на сайте</p>
										<p class="site-text delivery-form__footer-text">Картой курьеру</p>
										<p class="site-text delivery-form__footer-text">Наличными курьеру</p>
									</div>

								</div>
							</div>

						</div>
					</div>

				</div>
			</section>

			<!-- О нас пишут -->
			<section class="about-reviews">
				<div class="about-reviews__wrapper wrapper wrapper_md">
					<h4 class="site-title about-reviews__title">О нас пишут</h4>
					<div id="aboutReviews" class="about-reviews__slider owl-carousel owl-theme">
						<div class="about-reviews__item item">
							<p class="about-reviews__name">Алиса Н.</p>
							<p class="site-text about-reviews__text">
								Я люблю рыбу. Но проживаю в Средней Азии - а у нас, к сожалению, с естественными
								водоемами напряженка - есть единственно море (Аральское), и то в состоянии экологической
								катастрофы. А две реки на всю страну еле выповишь, чтобы нормально поесть. И вот я
								собралась погуглить как решить
								данный вопрос. В ответ на запрос, мне пришел ваш сайт с богатой продукцией. Я очень рада
								что есть возможность заказать много рыбы
								и угостить ею всю мою деревню. Спасибо!
							</p>
							<button class="site-more about-reviews__more">Отзыв полностью</button>
							<ul class="about-reviews__images">
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
							</ul>
						</div>
						<div class="about-reviews__item item">
							<p class="about-reviews__name">Максим Л</p>
							<p class="site-text about-reviews__text">
								Я люблю пить чай с разными вкусняшками. А в сезон вирусных заболеваний хочется, чтобы
								эти вкусняшки приносили еще и пользу.
								Как раз о таком десертике хочется Вам рассказать. Вкус у десерта натуральный: лимон за
								счет
							</p>
							<button class="site-more about-reviews__more">Отзыв полностью</button>
							<ul class="about-reviews__images">
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
							</ul>
						</div>
						<div class="about-reviews__item item">
							<p class="about-reviews__name">Настя Т.</p>
							<p class="site-text about-reviews__text">
								Спасибо огромное! Сегодня купили две рыбы, и заказывала первый раз. В одной рыбе была
								икра. Спасибо за икорку, приятный бонус. Засолила икру на 5 минут, сразу же попробовала,
								вкусно получилось.
								Рыба очень свежая, на засол
							</p>
							<button class="site-more about-reviews__more">Отзыв полностью</button>
							<ul class="about-reviews__images">
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
							</ul>
						</div>
						<div class="about-reviews__item item">
							<p class="about-reviews__name">Настя Т.</p>
							<p class="site-text about-reviews__text">
								Спасибо огромное! Сегодня купили две рыбы, и заказывала первый раз. В одной рыбе была
								икра. Спасибо за икорку, приятный бонус. Засолила икру на 5 минут, сразу же попробовала,
								вкусно получилось.
								Рыба очень свежая, на засол
							</p>
							<button class="site-more about-reviews__more">Отзыв полностью</button>
							<ul class="about-reviews__images">
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
							</ul>
						</div>
						<div class="about-reviews__item item">
							<p class="about-reviews__name">Максим Л</p>
							<p class="site-text about-reviews__text">
								Я люблю пить чай с разными вкусняшками. А в сезон вирусных заболеваний хочется, чтобы
								эти вкусняшки приносили еще и пользу.
								Как раз о таком десертике хочется Вам рассказать. Вкус у десерта натуральный: лимон за
								счет
							</p>
							<button class="site-more about-reviews__more">Отзыв полностью</button>
							<ul class="about-reviews__images">
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
							</ul>
						</div>
						<div class="about-reviews__item item">
							<p class="about-reviews__name">Алиса Н.</p>
							<p class="site-text about-reviews__text">
								Я люблю рыбу. Но проживаю в Средней Азии - а у нас, к сожалению, с естественными
								водоемами напряженка - есть единственно море (Аральское), и то в состоянии экологической
								катастрофы. А две реки на всю страну еле выповишь, чтобы нормально поесть. И вот я
								собралась погуглить как решить
								данный вопрос. В ответ на запрос, мне пришел ваш сайт с богатой продукцией. Я очень рада
								что есть возможность заказать много рыбы
								и угостить ею всю мою деревню. Спасибо!
							</p>
							<button class="site-more about-reviews__more">Отзыв полностью</button>
							<ul class="about-reviews__images">
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
								<li class="about-reviews__images-item">
									<a href="#" class="about-reviews__images-link">
										<img src="./images/dest/static/fishman.jpg" alt="" class="about-reviews__images-img">
									</a>
								</li>
							</ul>
						</div>
					</div>
					<a href="reviews.php" class="site-btn site-btn_wide about-reviews__btn">Все отзывы
					</a>
				</div>
			</section>

			<!-- Баннеры в подвале -->
			<?php include 'components/promo.php'; ?>
		</div>
	</main>

	<?php include 'components/footer.php'; ?>
	<?php include 'components/modals.php'; ?>

	<script src="js/app.min.js"></script>

</body>

</html>