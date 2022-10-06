<footer class="footer">
        <div class="wrapper">
            <div class="footer__box">
                <div class="footer__box__items">
                    <a class="footer__box__logo" href="<?php echo site_url(); ?>">
                        <img class="logo__svg" src="<? the_field('logo_footer_general_settings', 14); ?>" alt="На Главную">
                    </a>
                    <div class="footer__menu">
                        <div class="footer__menu__items">
                            <h6 class="footer__menu__items__title">Ссылки</h6>
                            <ul class="footer__menu__list">
                                <li class="footer__menu__list__items">
                                    <a class="footer__menu__list__items__link" href="<?php echo get_page_link(95)?>">О компании</a>
                                </li>
                                <li class="footer__menu__list__items">
                                    <a class="footer__menu__list__items__link" href="<?php echo get_page_link(199)?>">Каталог мебели</a>
                                </li>
                                <li class="footer__menu__list__items">
                                    <a class="footer__menu__list__items__link" href="#">Дизайн-проекты</a>
                                </li>
                                <li class="footer__menu__list__items">
                                    <a class="footer__menu__list__items__link" href="<?php echo get_page_link(148)?>">Блог</a>
                                </li>
                                <li class="footer__menu__list__items">
                                    <a class="footer__menu__list__items__link" href="<?php echo get_page_link(180)?>">Контакты</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__menu__items">
                            <h6 class="footer__menu__items__title">Продукция</h6>
                            <ul class="footer__menu__list">
                                <li class="footer__menu__list__items">
                                    <a class="footer__menu__list__items__link" href="<?php echo get_page_link(95)?>">О компании</a>
                                </li>
                                <li class="footer__menu__list__items">
                                    <a class="footer__menu__list__items__link" href="<?php echo get_page_link(199)?>">Каталог мебели</a>
                                </li>
                                <li class="footer__menu__list__items">
                                    <a class="footer__menu__list__items__link" href="#">Дизайн-проекты</a>
                                </li>
                                <li class="footer__menu__list__items">
                                    <a class="footer__menu__list__items__link" href="<?php echo get_page_link(148)?>">Блог</a>
                                </li>
                                <li class="footer__menu__list__items">
                                    <a class="footer__menu__list__items__link" href="<?php echo get_page_link(180)?>">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__box__items">
                    <h6 class="footer__title"><? the_field('title_form_footer_general_settings', 14); ?></h6>
                    <form action="#" class="form" id="form-footer">
                        <div class="status status--error" id="status"></div>
                        <input class="form__input" type="text" name="firstname" id="firstname" placeholder="Ваше имя">
                        <input class="form__input" type="tel" name="phone" id="phone">
                        <input class="form__input" type="text" name="desc" id="desc" placeholder="Какая мебель вас интересует?">
                        <button class="header__content__link form__btn" type="submit" id="send">
                            <div class="header__content__circle">
                                <svg class="header__content__circle__icon" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16">
                                    <path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="white"></path>
                                </svg>
                            </div>
                            <span class="header__contetn__text">Отправить</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>