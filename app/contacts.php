<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <title>Алдога - Контакты</title>
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
                        <a href="contacts.php" class="breadcrumb__link">Контакты</a>
                    </li>
                </ul>
            </div>

            <div class="contact-map">
                <div class="contact-map__wrapper">
                    <h1 class="contact-map__title site-title">Контакты</h1>

                    <div class="contact-map__map">

                        <!-- Карта -->
                        <div class="contact-map__iframe-wrapper">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae62e1fe1204303ec32f24bf6c174d2df23748eb258a165092ea06bd1ef4dd968&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
                        </div>

                        <!-- Список -->
                        <div class="contact-map__information-wrapper">
                            <div class="contact-map__cart">
                                <ul class="contact-list contact-list_cart">
                                    <li class="contact-list__item">
                                        <a href="#" class="contact-list__link contact-list__link_address">
                                            р. Карелия, о. Кильпола
                                            Форелевое хоз-ва “Алдога
                                        </a>
                                    </li>
                                    <li class="contact-list__item">
                                        <a href="mailto:manager@aldoga.ru" class="contact-list__link contact-list__link_mail">manager@aldoga.ru</a>
                                    </li>
                                    <li class="contact-list__item">
                                        <a href="tel:88005553535" class="contact-list__link contact-list__link_phone">8 (800) 555-35-35</a>
                                    </li>
                                    <li class="contact-list__item contact-list__item_text">
                                        Небольшой подробный текст о местоположении хозяйства, как добраться, и т.д.
                                        Небольшой подробный текст о местоположении хозяйства, как добраться, и т.д.
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Обратная связь -->
            <div class="feedback">
                <div class="feedback__wrapper wrapper">

                    <h2 class="feedback__title site-title">Обратная связь</h2>


                    <form class="feedback__form contact-form">
                        <div class="contact-form__inputs">

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
                        </div>

                        <div class="contact-form__group contact-form__group_textarea">
                            <textarea class="contact-form__textarea" placeholder="Ваше сообщение"></textarea>
                        </div>

                        <div class="feedback__payment payment">
                            <div class="payment__btn-with-check">
                                <button class="payment__btn-submit site-btn">Отправить</button>
                                <input name="totalPaymentName" id="totalPayment" type="checkbox" class="payment__custom-input">
                                <label for="totalPayment" class="payment__custom-label">
                                    Я СОГЛАСЕН на обработку и хранение моих персональных данных
                                </label>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </main>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/modals.php'; ?>


    <script src="js/app.min.js"></script>

</body>

</html>