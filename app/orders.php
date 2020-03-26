<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <title>Алдога - Заказы</title>
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
                        <a href="basket.php" class="breadcrumb__link">Заказы</a>
                    </li>
                </ul>
            </div>


            <!-- Оформление заказа -->
            <div class="orders">
                <div class="orders__wrapper wrapper wrapper_sm">

                    <div class="site-title">Заказы</div>

                    <div class="orders__content">

                        <div id="ordersSelectOrder" class="orders__select-order">
                            <p class="orders__select-order-title">Заказ №</p>

                            <input class="orders__select-order-input" checked value="#12b92lk" type="radio" name="selectOrder" id="order1">
                            <label class="orders__select-order-label" for="order1">#12b92lk
                            </label>

                            <input class="orders__select-order-input" value="#13b92lk" type="radio" name="selectOrder" id="order2">
                            <label class="orders__select-order-label" for="order2">#13b92lk
                            </label>

                            <input class="orders__select-order-input" value="#14b92lk" type="radio" name="selectOrder" id="order3">
                            <label class="orders__select-order-label" for="order3">#14b92lk
                            </label>

                        </div>

                        <div class="orders__options">
                            <div class="orders__options-item">
                                <p class="orders__options-item-title">Статус заказа</p>
                                <p class="orders__options-item-value">В обработке</p>
                            </div>
                            <div class="orders__options-item">
                                <p class="orders__options-item-title">Дата доставки</p>
                                <p class="orders__options-item-value">28.06.2020</p>
                            </div>
                            <div class="orders__options-item">
                                <p class="orders__options-item-title">Способ доставки</p>
                                <p class="orders__options-item-value">
                                    Курьером до подъезда
                                    ООО “СДЭК”
                                </p>
                                <p class="orders__options-item-value">
                                    г. Москва, ул. Московская,
                                    д 1, кв. 186
                                </p>
                            </div>
                            <div class="orders__options-item">
                                <p class="orders__options-item-title">Оплата</p>
                                <p class="orders__options-item-value">Картой на сайте</p>
                            </div>
                        </div>

                        <div class="basket-orders orders__basket-orders">
                            <div class="basket-orders__list">
                                <div class="basket-orders__table">
                                    <div class="basket-orders__header">
                                        <p class="basket-orders__header-title basket-orders__header-title_product">Товар
                                        </p>
                                        <p class="basket-orders__header-title basket-orders__header-title_price">Цена
                                        </p>
                                        <p class="basket-orders__header-title basket-orders__header-title_number">
                                            Количество
                                        </p>
                                        <p class="basket-orders__header-title basket-orders__header-title_total">Итого
                                        </p>
                                    </div>

                                    <div class="basket-orders__content">
                                        <div class="basket-orders__content-col basket-orders__content-col_product">
                                            <div class="basket-orders__description">
                                                <p class="basket-orders__name">Стейки форели</p>
                                                <p class="basket-orders__tags">свежие, охлажденные</p>
                                            </div>
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_price">3300 Р
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_number">
                                            30 кг
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_total"> 3300 Р
                                        </div>

                                    </div>

                                    <div class="basket-orders__content">
                                        <div class="basket-orders__content-col basket-orders__content-col_product">
                                            <div class="basket-orders__description">
                                                <p class="basket-orders__name">Стейки форели</p>
                                                <p class="basket-orders__tags">свежие, охлажденные</p>
                                            </div>
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_price">2300 Р
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_number">
                                            1 кг
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_total"> 2300 Р
                                        </div>

                                    </div>

                                    <div class="basket-orders__content">
                                        <div class="basket-orders__content-col basket-orders__content-col_product">
                                            <div class="basket-orders__description">
                                                <p class="basket-orders__name">Стейки форели</p>
                                                <p class="basket-orders__tags">свежие, охлажденные</p>
                                            </div>
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_price">300 Р
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_number">
                                            30 кг
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_total">300 Р
                                        </div>

                                    </div>

                                    <div class="basket-orders__content">
                                        <div class="basket-orders__content-col basket-orders__content-col_product">
                                            <div class="basket-orders__description">
                                                <p class="basket-orders__name">Стейки форели</p>
                                                <p class="basket-orders__tags">свежие, охлажденные</p>
                                            </div>
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_price">1300 Р
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_number">
                                            1 кг
                                        </div>

                                        <div class="basket-orders__content-col basket-orders__content-col_total"> 1300 Р
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="payment orders__payment">
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
                            <button type="button" data-bind="modal_success_order_button" class="payment__btn-submit site-btn">Повторить заказ</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/modals.php'; ?>


    <script src="js/app.min.js"></script>

</body>

</html>