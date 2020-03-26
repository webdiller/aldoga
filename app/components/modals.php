<div class="all-modals">

    <!-- Задать вопрос из шапки -->
    <div data-bind="modal_question" class="modal modal_question" data-type="modal">
        <div class="modal__header">
            <button data-bind="modal_close" class="modal__close icon-cancel"></button>
        </div>
        <p class="modal__title">Задать вопрос</p>
        <p class="modal__description">Заполните поля ниже и в ближайшее время наш сотрудник с вами свяжется!</p>
        <div class="feedback">

            <form class="feedback__form contact-form">
                <div class="contact-form__inputs">

                    <div class="contact-form__group">
                        <input placeholder="Как вас зовут?" type="text" class="contact-form__input">
                        <span class="contact-form__icon icon-user"></span>
                    </div>

                    <div class="contact-form__group">
                        <input placeholder="Ваш email адрес" type="email" required class="contact-form__input">
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

                <div class="modal__btn-wrapper">
                    <button class="site-btn modal__btn">Свяжитесь со мной</button>
                </div>

            </form>

        </div>
    </div>

    <!-- Успех - Заказ принят. Страницы: basket.php orders.php  -->
    <div data-bind="modal_success_order" class="modal modal_success" data-type="modal">
        <div class="modal__header">
            <button data-bind="modal_close" class="modal__close icon-cancel"></button>
        </div>
        <div class="modal__center">
            <p class="modal__title">Спасибо, ваш заказ принят!</p>
            <p class="modal__description">Спасибо! В ближайшее время наш сотрудник с вами свяжется!</p>
            <div class="feedback">

                <form class="feedback__form contact-form">

                    <div class="modal__btn-wrapper">
                        <a href="index.php" class="site-btn modal__btn">Вернуться на главную</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Успех - Отправка данных в форме. Страница contacts.php -->
    <div data-bind="modal_success" class="modal modal_success" data-type="modal">
        <div class="modal__header">
            <button data-bind="modal_close" class="modal__close icon-cancel"></button>
        </div>
        <div class="modal__center">
            <p class="modal__title">Спасибо!</p>
            <p class="modal__description">Спасибо! В ближайшее время наш сотрудник с вами свяжется!</p>
            <div class="feedback">

                <form class="feedback__form contact-form">

                    <div class="modal__btn-wrapper">
                        <a href="index.php" class="site-btn modal__btn">Вернуться на главную</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Смотреть отзыв. Страницы: reviews.php  -->
    <div data-bind="modal_review" class="modal modal_review" data-type="modal">
        <div class="modal__document">
            <div class="modal__header">
                <button data-bind="modal_close" class="modal__close icon-cancel"></button>
            </div>
            <div class="modal__center">
                <div class="modal__review">
                    <div class="modal__images cart-images">
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
                    <div class="modal__review-content">
                        <p class="modal__author-name">Максим Л.</p>
                        <p class="modal__author-text">
                            Я люблю пить чай с разными вкусняшками. А в сезон вирусных заболеваний хочется, чтобы эти
                            вкусняшки приносили еще и пользу.
                        </p>
                        <p class="modal__author-text">Как раз о таком десертике хочется Вам рассказать. Вкус у десерта
                            натуральный: лимон за счет Я
                            люблю пить чай с разными вкусняшками. А в сезон вирусных заболеваний хочется, чтобы эти
                            вкусняшки приносили еще и пользу. Как раз о таком десертике хочется Вам рассказать. Вкус у
                            десерта натуральный: лимон за счет
                        </p>
                        <p class="modal__author-text">Я люблю пить чай с разными вкусняшками. А в сезон вирусных
                            заболеваний
                            хочется, чтобы эти
                            вкусняшки приносили еще и пользу.
                        </p>
                        <div class="modal__links">
                            <p class="modal__links-title">Ссылка на отзыв:</p>
                            <a href="#!" class="modal__links-link modal__links-link_ok icon-odnoklassniki">
                            </a>
                            <a href="#!" class="modal__links-link modal__links-link_vk icon-vk"></a>
                            <a href="#!" class="modal__links-link modal__links-link_fb icon-facebook"></a>
                            <a href="#!" class="modal__links-link modal__links-link_insta icon-instagram"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Оставить отзыв. Страницы: reviews.php -->
    <div data-bind="modal_leave_review" class="modal modal_leave-review" data-type="modal">
        <div class="modal__header">
            <button data-bind="modal_close" class="modal__close icon-cancel"></button>
        </div>
        <p class="site-title">Оставить отзыв</p>
        <div class="feedback">
            <form class="feedback__form contact-form contact-form_leave-review">

                <div class="contact-form__group">
                    <input placeholder="Ваше имя и фамилия" type="text" class="contact-form__input">
                </div>

                <div class="contact-form__group contact-form__group_textarea">
                    <textarea class="contact-form__textarea" placeholder="Текст отзыва"></textarea>
                </div>

                <div class="contact-form__group contact-form__group_file">
                    <input type="file" name="file" id="file" class="inputfile contact-form__input contact-form__input_file" data-multiple-caption="{count} files selected" multiple />
                    <label class="contact-form__file-label" for="file">
                        <span class="contact-form__label-help" data-bind="help">Прикрепить фото</span>
                        <span class="contact-form__label-icon icon-attach"></span>
                    </label>
                </div>

                <div class="modal__btn-wrapper">
                    <button class="site-btn modal__btn">Отправить</button>
                </div>

            </form>
        </div>
    </div>

    <div data-bind="overlay" class="site-overlay">
    </div>
</div>