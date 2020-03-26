<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <title>Алдога - Корзина</title>
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
                        <a href="basket.php" class="breadcrumb__link">Корзина</a>
                    </li>
                </ul>
            </div>

            <!-- Оформление заказа -->
            <div class="basket-orders">
                <div class="basket-orders__wrapper wrapper wrapper_md">
                    <h2 class="site-title">Корзина</h2>
                    <div class="basket-orders__list">
                        <div class="basket-orders__table">
                            <div class="basket-orders__header">
                                <p class="basket-orders__header-title basket-orders__header-title_product">Товар</p>
                                <p class="basket-orders__header-title basket-orders__header-title_price">Цена</p>
                                <p class="basket-orders__header-title basket-orders__header-title_number">Количество</p>
                                <p class="basket-orders__header-title basket-orders__header-title_total">Итого</p>
                                <p class="basket-orders__header-title basket-orders__header-title_delete">Удалить</p>
                            </div>

                            <div class="basket-orders__content">
                                <div class="basket-orders__content-col basket-orders__content-col_product">
                                    <img data-src="./images/dest/products/product_1.jpg" src="./images/dest/products/product_1.jpg" alt="" class="basket-orders__img lazy">
                                    <div class="basket-orders__description">
                                        <p class="basket-orders__name">Стейки форели</p>
                                        <p class="basket-orders__tags">свежие, охлажденные</p>
                                    </div>
                                </div>

                                <div class="basket-orders__content-col basket-orders__content-col_price">3300 Р</div>

                                <div class="basket-orders__content-col basket-orders__content-col_number">
                                    <div class="site-counter site-counter_basket">
                                        <button class="site-counter__control site-counter__control_minus icon-minus"></button>
                                        <input type="number" value="1" class="site-counter__input">
                                        <button class="site-counter__control site-counter__control_plus icon-plus"></button>
                                    </div>
                                </div>

                                <div class="basket-orders__content-col basket-orders__content-col_total"> 3300 Р</div>

                                <div class="basket-orders__content-col basket-orders__content-col_delete icon-cancel">
                                </div>

                            </div>

                            <div class="basket-orders__content">
                                <div class="basket-orders__content-col basket-orders__content-col_product">
                                    <img data-src="./images/dest/products/product_2.jpg" src="./images/dest/products/product_2.jpg" alt="" class="basket-orders__img lazy">
                                    <div class="basket-orders__description">
                                        <p class="basket-orders__name">Стейки форели</p>
                                        <p class="basket-orders__tags">свежие, охлажденные</p>
                                    </div>
                                </div>

                                <div class="basket-orders__content-col basket-orders__content-col_price">2300 Р</div>

                                <div class="basket-orders__content-col basket-orders__content-col_number">
                                    <div class="site-counter site-counter_basket">
                                        <button class="site-counter__control site-counter__control_minus icon-minus"></button>
                                        <input type="number" value="1" class="site-counter__input">
                                        <button class="site-counter__control site-counter__control_plus icon-plus"></button>
                                    </div>
                                </div>

                                <div class="basket-orders__content-col basket-orders__content-col_total"> 2300 Р</div>

                                <div class="basket-orders__content-col basket-orders__content-col_delete icon-cancel">
                                </div>

                            </div>

                            <div class="basket-orders__content">
                                <div class="basket-orders__content-col basket-orders__content-col_product">
                                    <img data-src="./images/dest/products/product_4.jpg" src="./images/dest/products/product_4.jpg" alt="" class="basket-orders__img lazy">
                                    <div class="basket-orders__description">
                                        <p class="basket-orders__name">Стейки форели</p>
                                        <p class="basket-orders__tags">свежие, охлажденные</p>
                                    </div>
                                </div>

                                <div class="basket-orders__content-col basket-orders__content-col_price">300 Р</div>

                                <div class="basket-orders__content-col basket-orders__content-col_number">
                                    <div class="site-counter site-counter_basket">
                                        <button class="site-counter__control site-counter__control_minus icon-minus"></button>
                                        <input type="number" value="1" class="site-counter__input">
                                        <button class="site-counter__control site-counter__control_plus icon-plus"></button>
                                    </div>
                                </div>

                                <div class="basket-orders__content-col basket-orders__content-col_total">300 Р</div>

                                <div class="basket-orders__content-col basket-orders__content-col_delete icon-cancel">
                                </div>

                            </div>

                            <div class="basket-orders__content">
                                <div class="basket-orders__content-col basket-orders__content-col_product">
                                    <img data-src="./images/dest/products/product_3.jpg" src="./images/dest/products/product_3.jpg" alt="" class="basket-orders__img lazy">
                                    <div class="basket-orders__description">
                                        <p class="basket-orders__name">Стейки форели</p>
                                        <p class="basket-orders__tags">свежие, охлажденные</p>
                                    </div>
                                </div>

                                <div class="basket-orders__content-col basket-orders__content-col_price">1300 Р</div>

                                <div class="basket-orders__content-col basket-orders__content-col_number">
                                    <div class="site-counter site-counter_basket">
                                        <button class="site-counter__control site-counter__control_minus icon-minus"></button>
                                        <input type="number" value="1" class="site-counter__input">
                                        <button class="site-counter__control site-counter__control_plus icon-plus"></button>
                                    </div>
                                </div>

                                <div class="basket-orders__content-col basket-orders__content-col_total"> 1300 Р</div>

                                <div class="basket-orders__content-col basket-orders__content-col_delete icon-cancel">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Оформление заказа -->
            <div class="checkout">
                <div class="checkout__wrapper wrapper wrapper_md">
                    <div class="site-title">Оформление заказа</div>
                    <p class="site-text checkout__description-text">
                        На данным момент мы доставляем нашу продукцию в три города: Москва, Санкт-Петербург и
                        Петрозаводск.
                        Ниже можно узнать ближайшую дату доставки для вашего города. Ещё какой-нибудь текст,
                        например, о
                        возможности самовывоза или планов.
                    </p>

                    <div class="checkout-form checkout__form">

                        <div id="checkoutFormCities" class="checkout-form__cities">
                            <input class="checkout-form__header-input" checked type="radio" value="moscow" name="checkoutFormCity" id="checkoutFormMoscow">
                            <label class="checkout-form__header-label" data-link="table1" for="checkoutFormMoscow">Москва
                            </label>

                            <input class="checkout-form__header-input" type="radio" value="spb" name="checkoutFormCity" id="checkoutFormSPB">
                            <label class="checkout-form__header-label" data-link="table2" for="checkoutFormSPB">Санкт-Петербург
                            </label>

                            <input class="checkout-form__header-input" type="radio" value="petrozavodsk" name="checkoutFormCity" id="checkoutFormPetrozavodsk">
                            <label class="checkout-form__header-label" data-link="table3" for="checkoutFormPetrozavodsk">Петрозаводск
                            </label>
                        </div>

                        <div id="tableTabs" class="checkout-form__city-content">

                            <!-- 1 Москва -->
                            <div id="table1" class="checkout-form__table active">

                                <div class="checkout-form__header">
                                    <p class="checkout-form__header-text checkout-form__header-text_service">Служба</p>
                                    <p class="checkout-form__header-text checkout-form__header-text_date">
                                        <span class="checkout-form__header-text_md">Дата</span>
                                        <span class="checkout-form__header-text_lg">
                                            Ближайшая дата доставки
                                        </span>
                                    </p>
                                    <p class="checkout-form__header-text checkout-form__header-text_price">Стоимость</p>
                                </div>

                                <div class="checkout-form__body">

                                    <input name="CheckoutFormSelectCity" checked id="checkoutFormPickup" type="radio" class="checkout-form__body-input">

                                    <!-- 1 MOSCOW -->
                                    <label class="checkout-form__label" for="checkoutFormPickup">
                                        <span class="checkout-form__label-text checkout-form__label-text_service">Самовывоз</span>
                                        <span id="checkouPickupDate" class="checkout-form__label-text checkout-form__label-text_date">14.04.2020</span>
                                        <span id="checkouPickupPrice" class="checkout-form__label-text checkout-form__label-text_price">
                                            0 Р
                                        </span>
                                    </label>

                                    <input name="CheckoutFormSelectCity" id="checkoutFormPDP" type="radio" class="checkout-form__body-input">

                                    <!-- 2 DPD -->
                                    <label class="checkout-form__label" for="checkoutFormPDP">
                                        <span class="checkout-form__label-text checkout-form__label-text_service">Курьером
                                            службы DPD до подъезда</span>
                                        <span id="checkouDateDPD" class="checkout-form__label-text checkout-form__label-text_date">13.04.2020</span>
                                        <span id="checkouPriceDPD" class="checkout-form__label-text checkout-form__label-text_price">450
                                            Р</span>
                                    </label>

                                    <input name="CheckoutFormSelectCity" id="checkoutFormYandex" type="radio" class="checkout-form__body-input">

                                    <!-- 3 Yandex -->
                                    <label class="checkout-form__label" for="checkoutFormYandex">
                                        <span class="checkout-form__label-text checkout-form__label-text_service">Курьером
                                            Яндекс.Еда до подъезда</span>
                                        <span id="checkouDateYandex" class="checkout-form__label-text checkout-form__label-text_date">14.04.2020</span>
                                        <span id="checkouPriceYandex" class="checkout-form__label-text checkout-form__label-text_price">500
                                            Р</span>
                                    </label>
                                </div>
                            </div>

                            <form class="checkout-form__form contact-form">

                                <div class="contact-form__group">
                                    <input placeholder="Как вас зовут?" type="text" class="contact-form__input">
                                    <span class="contact-form__icon icon-user"></span>
                                </div>

                                <div class="contact-form__group">
                                    <input placeholder="Ваш email адрес" type="email" class="contact-form__input">
                                    <span class="contact-form__icon icon-envelope-open"></span>
                                </div>

                                <div class="contact-form__group">
                                    <input placeholder="Телефон для связи" type="number" class="contact-form__input">
                                    <span class="contact-form__icon icon-phone"></span>
                                </div>

                                <div class="contact-form__description">
                                    <p class="contact-form__description-title">
                                        Текущий пункт самовывоза:
                                    </p>
                                    <p class="contact-form__description-text">
                                        ул. Московская, 50, ТЦ “Московский”,
                                        2 этаж, служба доставки Boxberry
                                    </p>
                                    <a href="#!" class="contact-form__description-link">Выбрать пункт доставки</a>
                                </div>
                            </form>

                            <div class="checkout-form__footer">
                                <p class="checkout-form__footer-title">Оплата:</p>

                                <!-- 1 -->
                                <input name="CheckoutFormPayment" checked id="payment1" type="radio" class="checkout-form__footer-input">
                                <label for="payment1" class="checkout-form__footer-label">
                                    Картой на сайте
                                </label>

                                <!-- 2 -->
                                <input name="CheckoutFormPayment" checked id="payment2" type="radio" class="checkout-form__footer-input">
                                <label for="payment2" class="checkout-form__footer-label">
                                    Картой курьеру
                                </label>

                                <!-- 3 -->
                                <input name="CheckoutFormPayment" checked id="payment3" type="radio" class="checkout-form__footer-input">
                                <label for="payment3" class="checkout-form__footer-label">
                                    Наличными курьеру
                                </label>

                            </div>

                        </div>

                    </div>

                    <div class="checkout__payment payment">
                        <div id="promoBasket" class="payment__group">
                            <input placeholder="Есть промокод?" type="text" class="payment__input">
                            <button class="payment__btn-apply">Применить</button>
                        </div>
                        <div class="payment__total">
                            <div class="payment__total-group">
                                <p class="payment__total-title">Ваша скидка по промокоду</p>
                                <p class="payment__total-description payment__total-description_promocode">-300 Р (10%)
                                </p>
                            </div>
                            <div class="payment__total-group">
                                <p class="payment__total-title">Стоимость доставки</p>
                                <p class="payment__total-description payment__total-description_delivery">550 Р</p>
                            </div>
                            <div class="payment__total-group">
                                <p class="payment__total-title">Итого к оплате</p>
                                <p class="payment__total-description payment__total-description_total">3000 Р</p>
                            </div>
                        </div>
                        <div class="payment__btn-with-check">
                            <button data-bind="modal_success_button" class="payment__btn-submit site-btn">Перейти к оплате</button>
                            <input name="totalPaymentName" id="totalPayment" type="checkbox" class="payment__custom-input">
                            <label for="totalPayment" class="payment__custom-label">
                                Я СОГЛАСЕН на обработку и хранение моих персональных данных
                            </label>
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

</body>

</html>