<section class="cta">
        <div class="bg-grey section-cta">
            <img src="img/cta.png" alt="cta" class="cta-image">
            <div class="cta-form-wrapper container">
                <form action="handler.php" method="POST" class="cta-form">
                    <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
                    <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит 
                        на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
                        <div class="input-group-wrapper">
                            <div class="input-group">
                                <input id="user-name" type="text" class="input" name="username" placeholder="" maxlength="100" required >
                                <label class="input-group-label" for="user-name">Имя</label>
                            </div>
                            <div class="input-group">
                                <input id="user-phone" type="tel" class="input" name="userphone" placeholder="" maxlength="30" required>
                                <label class="input-group-label" for="user-phone">Номер телефона</label>
                            </div>
                        </div>
                        <div class="cta-form-footer">
                            <button type="submit" class="button cta-form-button">Отправить заявку</button>
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
</section>
<footer class="footer">
        <div class="container">
            <div class="footer-top">
                <svg class="logo-svg footer-logo">
                    <use href="img/sprite.svg#logo"></use>
                </svg> 
                <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
                <div class="footer-info">
                    <img src = "img/mark.svg" class="mobile-icon" width="24" height="24" alt="mobile-icon">
                    <address class="footer-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
                </div>
                <div class="footer-info">
                    <img src = "img/mail.svg" class="mail-icon" width="24" height="24" alt="mobile-icon">
                    <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
                </div>
                <div class="footer-social">
                    <a href="#" class="footer-social-link">
                        <svg class="footer-social-icon" width="24" height="24">
                            <use href="img/sprite.svg#vk"></use>
                        </svg> 
                    </a>
                    <a href="#" class="footer-social-link">
                        <svg class="footer-social-icon" width="24" height="24">
                            <use href="img/sprite.svg#inst"></use>
                        </svg> 
                    </a>
                </div>
            </div> 
        </div>
        <hr class="footer-seporator">
        <div class="container">
            <div class="footer-bottom">
                <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Контрактное производство</h2>
                    <ul class="footer-menu-list footer-menu-column-2">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Автомобильная химия</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Бытовая химия</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Косметическая продукция</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Краски аэрозольные</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Собственные марки</h2>
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-menu-wrapper">
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link footer-menu-link-bold">О компании</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <hr class="footer-seporator">
        <div class="container">
            <div class="footer-wrapper">
                <div class="footer-legal">
                    <p class="copyright">&copy; <? echo date('d.m.Y'); ?> «Aliance Production». Все права защищены.</p>
                    <a href="#" class="footer-polyci">Политики конфиденциальности</a>
                </div>
                <div class="footer-author">
                    <span class="made-in">Сделано в</span>
                    <svg width="52" height="11">
                        <use href="img/sprite.svg#ruso"></use>
                    </svg>
                </div>
            </div>
        </div>
</footer>
<div class="modal" id="feedback-modal">
        <div class="modal-dialog">
            <h2 class="modal-title">Есть вопросы?</h2>
            <a href="" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
                <svg class="close-icon" width="24" height="24">
                    <use href="img/sprite.svg#close"></use>
                </svg>
            </a>
            <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все 
                интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <form action="handler.php" method ="POST" class="modal-form">
                <div class="input-group-wrapper input-group-vertical">
                    <div class="input-group modal-input-group">
                        <input id="modal-user-name" type="text" class="input modal-input" name="username" placeholder=" ">
                        <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
                    </div>
                    <div class="input-group modal-input-group">
                        <input id="modal-user-phone" type="tel" class="input modal-input phone-mask" name="userphone" placeholder=" ">
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

<div class="modal" id="alert-modal">
        <div class="modal-dialog">
            <img src="img/thanks.png" alt="alert" class="alert-modal-image">
            <h2 class="modal-title">Спасибо за заявку!</h2>
            <a href="" class="modal-close" data-toggle="modal" data-target="alert-modal">
                <svg class="close-icon" width="24" height="24">
                    <use href="img/sprite.svg#close"></use>
                </svg>
            </a>
            <p class="modal-text">Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы 
                и поможем даже в самых сложных случаях!</p>
            <div class="modal-form-footer">
                <button type="submit" class="button cta-form-button modal-form-button">Отправить заявку</button>
            </div>    
        </div>
</div>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="https://unpkg.com/imask"></script>
    <script src="js/js.js"></script>
</body>
</html>