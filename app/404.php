<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <title>Алдога - 404</title>
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
                        <a href="404.php" class="breadcrumb__link">404</a>
                    </li>
                </ul>
            </div>


            <!-- Ошибка -->
            <section class="error">
                <div class="error__wrapper wrapper wrapper_md">
                    <h3 class="site-title error__title">Ошибка</h3>
                    <img src="./images/dest/static/error.jpg" alt="" class="error__img">
                    <p class="error__description">
                        Ошибка! Страница не найдена или не существует.
                    </p>
                    <p class="error__subtitle">
                        Вернитесь на
                        <a class="error__link" href="index.php">ГЛАВНУЮ</a>
                    </p>
                </div>
            </section>

        </div>
    </main>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/modals.php'; ?>

    <script src="js/app.min.js"></script>

</body>

</html>