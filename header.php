<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title("", true); ?></title>
</head>
<body>
    <header class="header" style="background-image: url(<?if( get_field('img_hero') ): the_field('img_hero'); else:bloginfo('template_url'); ?>/assets/img/hero-catalog.jpg<?endif;?>);">
        <hr class="grid-line grid-line--left">
        <hr class="grid-line grid-line--right">
        <hr class="grid-block grid-block--right--one">
        <hr class="grid-block grid-block--right--two <?php if ( is_page_template('page-contacts.php')):?>grid-block--dn<?endif;?>">
        <hr class="grid-block grid-block--right--three <?php if ( is_page_template('page-contacts.php')):?>grid-block--dn<?endif;?>">
        <div class="header__top">
            <div class="wrapper">
                <div class="header__box">
                    <nav class="menu">
                        <a class="logo" href="<?php echo site_url(); ?>">
                            <img class="logo__svg" src="<? the_field('logo_header_main_general_settings', 14); ?>" alt="На Главную">
                        </a>
                        <a href="#" class="menu__btn ">
                            <span class="menu__btn-element"></span>
                        </a>
                        <ul class="menu__list">
                            <li class="munu__list__items">
                                <a class="menu__list__link" href="<?php echo get_page_link(95)?>">О компании</a>
                            </li>
                            <li class="munu__list__items">
                                <a class="menu__list__link" href="<?php echo get_page_link(199)?>">Каталог мебели</a>
                            </li>
                            <li class="munu__list__items">
                                <a class="menu__list__link" href="#">Дизайн-проекты</a>
                            </li>
                            <li class="munu__list__items">
                                <a class="menu__list__link" href="<?php echo get_page_link(148)?>">Блог</a>
                            </li>
                            <li class="munu__list__items">
                                <a class="menu__list__link" href="<?php echo get_page_link(180)?>">Контакты</a>
                            </li>
                            <li class="munu__list__items">
                                <a class="menu__list__link" href="<?php echo get_page_link(186)?>">Отзывы</a>
                            </li>
                            <div class="menu__list__social">
                                <li class="header__social__items">
                                    <a class="header__social__link" href="<? the_field('link_instagram', 14); ?>" target="_blank">
                                        <svg class="header__social__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                            <g clip-path="url(#clip0_30_1230)">
                                              <path d="M17.4998 12.8496C14.9343 12.8496 12.8506 14.9298 12.8506 17.4999C12.8506 20.0689 14.9354 22.1514 17.4998 22.1514C20.0653 22.1514 22.1513 20.0689 22.1513 17.4999C22.1513 14.9298 20.0653 12.8496 17.4998 12.8496ZM17.4998 20.5403C15.8151 20.5403 14.4583 19.1788 14.4583 17.4999C14.4583 15.8211 15.8151 14.4596 17.4998 14.4596C19.1669 14.4596 20.5413 15.8211 20.5413 17.4999C20.5413 19.1788 19.1844 20.5403 17.4998 20.5403Z" fill="white"></path>
                                              <path d="M22.6163 11.1487C22.0178 11.1487 21.543 11.6247 21.543 12.2232C21.543 12.8205 22.0178 13.2953 22.6163 13.2953C23.2148 13.2953 23.6908 12.8205 23.6908 12.2232C23.6908 11.6247 23.2136 11.1487 22.6163 11.1487Z" fill="white"></path>
                                              <path d="M17.5023 0.175049C7.93099 0.175049 0.173828 7.92988 0.173828 17.5C0.173828 27.0679 7.93099 34.825 17.5023 34.825C27.0678 34.825 34.8273 27.069 34.8273 17.5C34.8273 7.92988 27.0678 0.175049 17.5023 0.175049ZM26.4437 21.3092C26.4437 24.136 24.1348 26.4437 21.2917 26.4437H13.7083C10.864 26.4437 8.55516 24.1349 8.55516 21.3267V13.6897C8.55516 10.864 10.8628 8.55638 13.7083 8.55638H21.2917C24.136 8.55638 26.4437 10.864 26.4437 13.6897V21.3092Z" fill="white"></path>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_30_1230">
                                                <rect width="35" height="35" fill="white"></rect>
                                              </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li class="header__social__items">
                                    <a class="header__social__link" href="<? the_field('link_facebook', 14); ?>" target="_blank">
                                        <svg class="header__social__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                            <path d="M35 17.5C35 27.164 27.1651 35 17.5022 35C7.8349 35 0 27.164 0 17.5C0 7.83376 7.8349 0 17.5022 0C27.1651 0 35 7.83376 35 17.5ZM14.5783 28.4375H19.1203V17.5074H22.1864L22.5833 13.6465H19.1203V11.3757C19.1203 10.5243 19.6867 10.3247 20.0836 10.3247H22.5274V6.57576L19.163 6.5625C15.4275 6.5625 14.5783 9.35838 14.5783 11.1467V13.6465H12.4181V17.5074H14.5783V28.4375Z" fill="white"></path>
                                        </svg>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </nav>
                    <ul class="header__social">
                        <li class="header__social__items">
                            <a class="header__social__link" href="<? the_field('link_instagram', 14); ?>" target="_blank">
                                <svg class="header__social__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <g clip-path="url(#clip0_30_1230)">
                                      <path d="M17.4998 12.8496C14.9343 12.8496 12.8506 14.9298 12.8506 17.4999C12.8506 20.0689 14.9354 22.1514 17.4998 22.1514C20.0653 22.1514 22.1513 20.0689 22.1513 17.4999C22.1513 14.9298 20.0653 12.8496 17.4998 12.8496ZM17.4998 20.5403C15.8151 20.5403 14.4583 19.1788 14.4583 17.4999C14.4583 15.8211 15.8151 14.4596 17.4998 14.4596C19.1669 14.4596 20.5413 15.8211 20.5413 17.4999C20.5413 19.1788 19.1844 20.5403 17.4998 20.5403Z" fill="white"></path>
                                      <path d="M22.6163 11.1487C22.0178 11.1487 21.543 11.6247 21.543 12.2232C21.543 12.8205 22.0178 13.2953 22.6163 13.2953C23.2148 13.2953 23.6908 12.8205 23.6908 12.2232C23.6908 11.6247 23.2136 11.1487 22.6163 11.1487Z" fill="white"></path>
                                      <path d="M17.5023 0.175049C7.93099 0.175049 0.173828 7.92988 0.173828 17.5C0.173828 27.0679 7.93099 34.825 17.5023 34.825C27.0678 34.825 34.8273 27.069 34.8273 17.5C34.8273 7.92988 27.0678 0.175049 17.5023 0.175049ZM26.4437 21.3092C26.4437 24.136 24.1348 26.4437 21.2917 26.4437H13.7083C10.864 26.4437 8.55516 24.1349 8.55516 21.3267V13.6897C8.55516 10.864 10.8628 8.55638 13.7083 8.55638H21.2917C24.136 8.55638 26.4437 10.864 26.4437 13.6897V21.3092Z" fill="white"></path>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_30_1230">
                                        <rect width="35" height="35" fill="white"></rect>
                                      </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li class="header__social__items">
                            <a class="header__social__link" href="<? the_field('link_facebook', 14); ?>" target="_blank">
                                <svg class="header__social__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <path d="M35 17.5C35 27.164 27.1651 35 17.5022 35C7.8349 35 0 27.164 0 17.5C0 7.83376 7.8349 0 17.5022 0C27.1651 0 35 7.83376 35 17.5ZM14.5783 28.4375H19.1203V17.5074H22.1864L22.5833 13.6465H19.1203V11.3757C19.1203 10.5243 19.6867 10.3247 20.0836 10.3247H22.5274V6.57576L19.163 6.5625C15.4275 6.5625 14.5783 9.35838 14.5783 11.1467V13.6465H12.4181V17.5074H14.5783V28.4375Z" fill="white"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="header__content <?if ( is_page_template('page-home.php')) : else:?>scrollto<?endif;?>">
                <h1><?php single_post_title();?><?if (  is_post_type_archive()) : wp_title("", true);?><?endif;?></h1>
				<?if ( is_page_template('page-home.php')) :?>
					<?php echo wpautop(the_field('desc_hero'));?>
					<a class="header__content__link" href="<?php echo get_page_link(199)?>">
						<div class="header__content__circle">
							<svg class="header__content__circle__icon" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16">
								<path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="white"></path>
							</svg>
						</div>
						<span class="header__contetn__text">Перейти в каталог</span>
					</a>
                <?else:?>
                    <a class="header__content__link" href="#<?if (  is_post_type_archive()) :?>catalog<?else:echo get_page_uri();endif;?>">
                        <div class="header__content__circle">
                            <svg class="header__content__circle__icon header__content__circle__icon--down" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16">
                                <path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="white"></path>
                            </svg>
                        </div>
                    </a>
				<?endif;?>
            </div>
        </div>
    </header>