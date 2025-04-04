<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании - Aliance Production</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>
<body>
<div class="mobile-menu">
    <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Контрактное производство</a>
            <ul class="mobile-submenu">
                <li class="mobile-submenu-item">
                    <a href="#" class="mobile-submenu-link">Автомобильная химия</a>
                </li>
                <li class="mobile-submenu-item">
                    <a href="#" class="mobile-submenu-link">Бытовая химия</a>
                </li>
                <li class="mobile-submenu-item">
                    <a href="#" class="mobile-submenu-link">Дезинфицирующие средства</a>
                </li>
                <li class="mobile-submenu-item">
                    <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
                </li>
                <li class="mobile-submenu-item">
                    <a href="#" class="mobile-submenu-link">Косметическая продукция</a>
                </li>
                <li class="mobile-submenu-item">
                    <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
                </li>
            </ul>
        </li>
        <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
            <ul class="mobile-submenu">
                <li class="mobile-submenu-item">
                    <a href="#" class="mobile-submenu-link">Автохимия AG-Tech</a>
                </li>
                <li class="mobile-submenu-item">
                    <a href="#" class="mobile-submenu-link">Автохимия AP</a>
                </li>
            </ul>
        </li>
        <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
        <img src = "img/mark.svg" class="mobile-icon" width="24" height="24" alt="mobile-icon">
        <address class="mobile-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
    </div>
    <div class="mobile-info">
        <img src = "img/mail.svg" class="mobile-icon" width="24" height="24" alt="mobile-icon">
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
    </div>
    <div class="mobile-img">
    <a href="./" class="mobile-img-link">
        <img src="img/vk.svg" alt="" class="mobile-img-items">
    </a>
    <a href="./" class="mobile-img-link">
        <img src="img/inst.svg" alt="" class="mobile-img-items">
    </a>
    </div>
</div>
<nav class="navbar navbar-light">
    <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
            <use href="img/sprite.svg#logo-light"></use>
        </svg> 
        <svg class="logo-svg logo-logo-dark">
            <use href="img/sprite.svg#logo"></use>
        </svg> 
    </a>
    <ul class="header-nav">
        <li class="header-nav-item">
            <a href="#" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
            <a href="#" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
            <a href="#" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
            <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
            <a href="#" class="header-nav-link">Контакты</a>
        </li>
    </ul>
    <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
            <use href="img/sprite.svg#phone"></use>
        </svg>  
        <a href="tel:87028374810" class="header-phone-link">+7(702) 837-48-10</a>
    </div>
    <!-- /.header-phone -->
     <button class="navbar-button button" data-toggle ="modal" data-target="#feedback-modal">
        <svg class="button-icon" width="24" height="24">
            <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
    </button>
</nav>
<header class="single-block">
    <div class="container">
            <div class="seporator"></div>
            <h1 class="single-block-title">
                О компании
            </h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#" class="breadcrumb-link">Главная</a>
                </li>
                <li class="breadcrumb-item">О компании</li>
            </ul>
    </div>
</header>
<?php include_once('footer.php'); ?>
<div class="modal">
    <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="" class="modal-close" data-toggle="modal">
            <svg class="close-icon" width="24" height="24">
                <use href="img/sprite.svg#close"></use>
            </svg>
        </a>
        <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все 
            интересующие вопросы и поможем даже в самых сложных случаях!</p>
        <form action="" class="modal-form">
            <div class="input-group-wrapper input-group-vertical">
                <div class="input-group modal-input-group">
                    <input id="modal-user-name" type="text" class="input modal-input" placeholder=" ">
                    <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
                </div>
                <div class="input-group modal-input-group">
                    <input id="modal-user-phone" type="tel" class="input modal-input" placeholder=" ">
                    <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
                </div>
            </div>
            <div class="modal-form-footer">
                <button type="submit" class="button cta-form-button modal-form-button">Отправить заявку</button>
                <div class="notify">
                    <svg class= "notify-icon" width="14" height="14">
                        <use href="img/sprite.svg#shield"></use>
                    </svg>
                  <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и 
                    абсолютную конфиденциальность информации!</p>  
                </div>
            </div>
        </form>
    </div>
</div>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>