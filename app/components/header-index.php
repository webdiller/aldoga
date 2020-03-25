<header class="header">
    <div class="header__wrapper wrapper wrapper_lg">

        <h2 class="header__logo site-logo">
            <a href="index.php" class="site-logo__link">
                <img src="./images/dest/logo.png" alt="Форелевое хозяйство Алдога" class="site-logo__img">
            </a>
        </h2>

        <ul class="header__list header-list">
            <li class="header-list__item">
                <a href="catalog.php" class="header-list__link">Наша продукция</a>
            </li>
            <li class="header-list__item">
                <a href="#" class="header-list__link">О Хозяйстве</a>
            </li>
            <li class="header-list__item">
                <a href="delivery-payment.php" class="header-list__link">Доставка и оплата</a>
            </li>
            <li class="header-list__item">
                <a href="news.php" class="header-list__link">Рецепты</a>
            </li>
            <li class="header-list__item">
                <a href="reviews.php" class="header-list__link">Отзывы</a>
            </li>
            <li class="header-list__item">
                <a href="contacts.php" class="header-list__link">Контакты</a>
            </li>
        </ul>

        <div class="header__contact-bar contact-bar">
            <div class="contact-bar__wrapper">
                <a href="tel:89214504515" class="contact-bar__link">8 921 450 45 15</a>
                <button data-bind="modal_question_button" class="contact-bar__interactive-link">Задать вопрос</button>
            </div>
        </div>

        <div id="basket" class="header__basket basket">
            <div class="basket__wrapper">
                <a href="#" class="basket__icon icon-shop">
                    <span class="basket__count">10</span>
                </a>
            </div>
        </div>

        <div class="header__status status">
            <button id="statusBtn" class="status__wrapper">
                <span class="status__text">Статус заказа</span>
            </button>
            <!-- Выслать код -->
            <div id="statusOverlay1" class="status__overlay">
                <p class="status__title site-text_lg site-text_bold">Вход на сайт</p>
                <p class="status__descr site-text_small">Введите свой номер телефона и мы вам вышлем на него смс с
                    кодом для входа
                </p>
                <div class="status__phone">
                    <input id="statusInputGetCode" type="number" placeholder="Ваш телефон" class="status__phone-input">
                    <span class="status__phone-icon icon-phone"></span>
                </div>
                <button id="statusBtnGetCode" class="status__btn site-btn">Выслать код</button>
            </div>

            <!-- Подтвердить код -->
            <div id="statusOverlay2" class="status__overlay">
                <p class="status__title site-text_lg site-text_bold">Вход на сайт</p>
                <p class="status__descr site-text_small">
                    Код подтверждения выслан на номер <span id="statusOverlayPhoneChecker">+7 800 555 35 35</span>
                    .Введите его в поле ниже:
                </p>
                <div class="status__phone">
                    <input type="number" placeholder="Код подтверждения" class="status__phone-input">
                </div>
                <button class="status__btn site-btn">Войти</button>
            </div>
        </div>

        <button id="hamburger" class="hamburger header__hamburger hamburger--vortex" type="button">
            <span class="hamburger-box hamburger__box">
                <span class="hamburger-inner hamburger__inner"></span>
            </span>
        </button>

        <div class="hamburger-overlay" id="hamburgerOverlay">
            <ul class="hamburger-overlay__list">
                <li class="hamburger-overlay__list-item">
                    <a href="catalog.php" class="hamburger-overlay__list-link">
                        Наша продукция
                    </a>
                </li>
                <li class="hamburger-overlay__list-item">
                    <a href="#" class="hamburger-overlay__list-link">
                        О Хозяйстве
                    </a>
                </li>
                <li class="hamburger-overlay__list-item">
                    <a href="delivery-payment.php" class="hamburger-overlay__list-link">
                        Доставка и оплата
                    </a>
                </li>
                <li class="hamburger-overlay__list-item">
                    <a href="news.php" class="hamburger-overlay__list-link">
                        Рецепты
                    </a>
                </li>
                <li class="hamburger-overlay__list-item">
                    <a href="reviews.php" class="hamburger-overlay__list-link">
                        Отзывы
                    </a>
                </li>
                <li class="hamburger-overlay__list-item">
                    <a href="contacts.php" class="hamburger-overlay__list-link">
                        Контакты
                    </a>
                </li>
            </ul>
            <div class="contact-bar hamburger-overlay__contact-bar">
                <div class="contact-bar__wrapper">
                    <a href="tel:89214504515" class="contact-bar__link">8 921 450 45 15</a>
                    <button data-bind="modal_question_button" class="contact-bar__interactive-link">Задать вопрос</button>
                </div>
            </div>
        </div>

        <div class="basket-overlay" id="basketOverlay">
            <ul class="basket-overlay__list">
                <li class="basket-overlay__item">
                    <button class="basket-overlay__item-btn icon-cancel"></button>
                    <a href="#" class="basket-overlay__item-link">
                        <img data-src="./images/dest/products/product_1.jpg" src="./images/dest/products/product_1-min.jpg" alt="" class="basket-overlay__item-img lazy">
                        <div class="basket-overlay__item-content">
                            <p class="basket-overlay__item-content-name">Стейки форели</p>
                            <p class="basket-overlay__item-content-tags">Свежие, охлажденные</p>
                            <span class="basket-overlay__item-content-price">5500 Р</span>
                        </div>
                    </a>
                </li>
                <li class="basket-overlay__item">
                    <button class="basket-overlay__item-btn icon-cancel"></button>
                    <a href="#" class="basket-overlay__item-link">
                        <img data-src="./images/dest/products/product_2.jpg" src="./images/dest/products/product_2-min.jpg" alt="" class="basket-overlay__item-img lazy">
                        <div class="basket-overlay__item-content">
                            <p class="basket-overlay__item-content-name">Стейки форели</p>
                            <p class="basket-overlay__item-content-tags">Свежие, охлажденные</p>
                            <span class="basket-overlay__item-content-price">5500 Р</span>
                        </div>
                    </a>
                </li>
                <li class="basket-overlay__item">
                    <button class="basket-overlay__item-btn icon-cancel"></button>
                    <a href="#" class="basket-overlay__item-link">
                        <img data-src="./images/dest/products/product_3.jpg" src="./images/dest/products/product_3-min.jpg" alt="" class="basket-overlay__item-img lazy">
                        <div class="basket-overlay__item-content">
                            <p class="basket-overlay__item-content-name">Стейки форели</p>
                            <p class="basket-overlay__item-content-tags">Свежие, охлажденные</p>
                            <span class="basket-overlay__item-content-price">5500 Р</span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="basket-overlay__total-price">
                <span class="basket-overlay__total-price-title">Итого:</span>
                <span class="basket-overlay__total-price-count">16 500 Р</span>
            </div>
            <div class="basket-overlay__btn-wrapper">
                <a href="basket.php" class="site-btn basket-overlay__btn">Оформить заказ</a>
            </div>
        </div>

    </div>
</header>