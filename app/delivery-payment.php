<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <title>Алдога - Доставка и оплата</title>
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
                        <a href="delivery-payment.php" class="breadcrumb__link">Доставка и оплата</a>
                    </li>
                </ul>
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

        </div>
    </main>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/modals.php'; ?>


    <script src="js/app.min.js"></script>

</body>

</html>