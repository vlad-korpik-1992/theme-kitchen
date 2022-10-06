<?php
/**
  * Template Name: Главная
*/
?>
<? get_header(); ?>
    <section class="stages">
        <div class="wrapper">
            <div class="box">
                <div class="box__three" data-aos="fade-up" data-aos-duration="800">
                    <div class="stages__inner" style="background-image: url(<?the_field('img_stages--one');?>);">
                        <h2><?the_field('title_stages--one');?></h2>
                        <?php echo wpautop(the_field('desc_stages--one'));?>
                    </div>
                </div>
                <div class="box__three" data-aos="fade-up" data-aos-duration="1200">
                    <div class="stages__inner" style="background-image: url(<?the_field('img_stages--two');?>);">
                        <h2><?the_field('title_stages--two');?></h2>
                        <?php echo wpautop(the_field('desc_stages--two'));?>
                    </div>
                </div>
                <div class="box__three" data-aos="fade-up" data-aos-duration="1600">
                    <div class="stages__inner" style="background-image: url(<?the_field('img_stages--three');?>);">
                        <h2><?the_field('title_stages--three');?></h2>
                        <?php echo wpautop(the_field('desc_stages--three'));?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project">
        <div class="wrapper">
            <h2 class="section-title"><?the_field('project_title')?></h2>
            <div class="box">
                <?php if ( $slides = get_field('project_gallery--one')): ?>
                    <div class="box__half">
                        <a class="project__slider project__slider--vertical" href="<?php echo get_page_link(199)?>">
                            <?php foreach ( $slides as $slide ): ?>
                                <img class="project__slider__img" src="<?php echo $slide; ?>" alt="">
                            <?php endforeach;?>
                        </a>
                    </div>
                    <div class="box__half">
                        <a class="project__slider project__slider--horisontal" href="<?php echo get_page_link(199)?>">
                            <? for ($i=count($slides)-1; $i>=0; $i--) :?>
                                <img class="project__slider__img" src="<?php echo $slides[$i]; ?>" alt="">
                            <?endfor;?>
                        </a>
                    </div>
                <?php endif; ?>
                <div class="box__half">
                    <div class="box">
                        <?php if ( $slides = get_field('project_gallery--two')): ?>
                            <div class="box__half">
                                <a class="project__slider project__slider--vertical" href="<?php echo get_page_link(199)?>">
                                    <?php foreach ( $slides as $slide ): ?>
                                        <img class="project__slider__img" src="<?php echo $slide; ?>" alt="">
                                    <?php endforeach;?>
                                </a>
                                <a class="project__slider project__slider--horisontal" href="<?php echo get_page_link(199)?>">
                                    <? for ($i=count($slides)-1; $i>=0; $i--) :?>
                                        <img class="project__slider__img" src="<?php echo $slides[$i]; ?>" alt="">
                                    <?endfor;?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="box__half">
                            <a class="project__slider" href="<?php echo get_page_link(199)?>">
                                <img class="project__slider__img" src="<?the_field('project_img--one');?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box__half">
                    <a class="project__slider" href="<?php echo get_page_link(199)?>">
                        <img class="project__slider__img" src="<?the_field('project_img--two');?>" alt="">
                    </a>
                    <div class="box">
                        <?php if ( $slides = get_field('project_gallery--three')): ?>
                            <div class="box__half">
                                <a class="project__slider project__slider--horisontal" href="<?php echo get_page_link(199)?>">
                                    <?php foreach ( $slides as $slide ): ?>
                                        <img class="project__slider__img" src="<?php echo $slide; ?>" alt="">
                                    <?php endforeach;?>
                                </a>
                            </div>
                            <div class="box__half">
                                <a class="project__slider project__slider--horisontal" href="<?php echo get_page_link(199)?>">
                                    <? for ($i=count($slides)-1; $i>=0; $i--) :?>
                                        <img class="project__slider__img" src="<?php echo $slides[$i]; ?>" alt="">
                                    <?endfor;?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="project__center">
                <div class="project__center__btn">
                    <a class="header__content__link header__content__link--project" href="<?php echo get_page_link(199)?>">
                        <div class="header__content__circle header__content__circle--black">
                            <svg class="header__content__circle__icon" fill="black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16">
                                <path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="black"></path>
                            </svg>
                        </div>
                        <span class="header__contetn__text header__contetn__text--black">Перейти в каталог </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="wrapper">
            <h2 class="section-title"><?the_field('reviews_title')?></h2>
            <div class="box">
                <div class="box__half d-flex">
                    <img class="reviews__img" src="<?the_field('reviews_img--one');?>" alt="">
                </div>
                <div class="box__quarter">
                    <img class="reviews__img reviews__img--center" src="<?the_field('reviews_img--two');?>" alt="">
                </div>
                <div class="box__quarter">
                    <img class="reviews__img reviews__img--center" src="<?the_field('reviews_img--three');?>" alt="">
                </div>
            </div>
            <a class="header__content__link header__content__link--reviews" href="<?php echo get_page_link(186)?>">
                <div class="header__content__circle header__content__circle--black">
                    <svg class="header__content__circle__icon" fill="black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16">
                        <path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="black"></path>
                    </svg>
                </div>
                <span class="header__contetn__text header__contetn__text--black">Больше отзывов</span>
            </a>
        </div>
    </section>
    <section class="design">
        <div class="wrapper">
            <div class="design__inner">
                <h2><?the_field('title_desing');?></h2>
                <?php echo wpautop(the_field('content_desing'));?>
                <a class="header__content__link start" href="#">
                    <div class="header__content__circle">
                        <svg class="header__content__circle__icon" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16">
                            <path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="white"></path>
                        </svg>
                    </div>
                    <span class="header__contetn__text">Перейти</span>
                </a>
                <img class="design__img" src="<?the_field('img_desing');?>" alt="">
            </div>
        </div>
    </section>
    <section class="materials">
        <div class="wrapper">
            <h2 class="section-title"><?the_field('title_materials');?></h2>
        </div>
        <div class="material__bg" style="background-image: url(<?the_field('bg_materials');?>);">
            <hr class="grid-line grid-line--left">
            <hr class="grid-line grid-line--right">
            <hr class="grid-block grid-block--right--one">
            <hr class="grid-block grid-block--right--two">
            <hr class="grid-block grid-block--right--three">
            <div class="material__menu">
                <?if( have_rows('materials') ):?>
                    <div class="wrapper">
                        <ul class="material__menu__list">
                            <?while ( have_rows('materials') ) : the_row();?>
                                <li class="material__menu__list__items">
                                    <a class="material__menu__list__link" id="material<?php echo get_row_index(); ?>" href="#"><? the_sub_field('name_materials'); ?></a>
                                </li>
                            <?endwhile;?>
                        </ul>
                    </div>
                <?endif;?>
            </div>
            <?if( have_rows('materials') ): $item=0;?>
                <div class="wrapper">
                    <?while ( have_rows('materials') ) : the_row();?>
                        <div class="material__content <?if($item==0):?>material__content--active<?endif;?>" id="1material<?php echo get_row_index(); ?>">
                            <h3><? the_sub_field('name_materials'); ?></h3>
                            <?php echo wpautop(the_sub_field('content_materials')); $item++;?>
                        </div>
                    <?endwhile;?>
                </div>
            <?endif;?>
        </div>
    </section>
    <section class="fittings">
        <div class="wrapper">
            <div class="box box--baseline">
                <div class="fittings__col">
                    <h2 class="section-title"><?the_field('title_fittings');?></h2>
                </div>
                <?if( have_rows('fittings') ):?>
                    <div class="fittings__col">
                        <ul class="material__menu__list material__menu__list--dsb">
                            <?while ( have_rows('fittings') ) : the_row();?>
                                <li class="material__menu__list__items material__menu__list__items--pr0">
                                    <a class="fittings__link" id="fittings<?php echo get_row_index(); ?>" href="#"><? the_sub_field('name_fittings'); ?></a>
                                </li>
                            <?endwhile;?>
                        </ul>
                    </div>
                <?endif;?>
            </div>
            <?if( have_rows('fittings') ): $item=0;
                while ( have_rows('fittings') ) : the_row();?>
                    <div class="box box--center fittings__content <?if($item==0):?>fittings__content--active<?endif;?>" id="1fittings<?php echo get_row_index(); ?>">
                        <div class="fittings__col">
                            <img class="fitting__col__img" src="<? the_sub_field('img_fittings'); ?>" alt="<? the_sub_field('name_fittings'); ?>">
                        </div>
                        <div class="fittings__col">
                            <img class="fitting__col__logo" src="<? the_sub_field('logo_fittings'); ?>" alt="<? the_sub_field('name_fittings'); ?>">
                            <?php echo wpautop(the_sub_field('content_fittings')); $item++;?>
                        </div>
                    </div>
                <?endwhile;
            endif;?>
        </div>
    </section>
    <section class="quiz quiz--start">
        <div class="wrapper">
            <div class="quiz__body">
                <button class="quiz__close">
                    <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                        <path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"></path>
                    </svg>
                </button>
                <div class="quiz__body__content">
                    <div class="quiz__body__top">
                        <div class="progress__num">10%</div>
                        <div class="progress">
                            <div class="progress__bar" style="width: 10%;"></div>
                        </div>
                        <div class="quiz__body__title">Какой стиль кухни вам нравится?</div>
                        <div class="quiz__box" id="quiz__box">
                            <div class="quiz__box__fifth">
                                <input class="checkbox" type="checkbox" id="input11" name="answer1[]" value="img1">
                                <label class="quiz__label" id="answer11">
                                    <img class="quiz__label__img" src="<?php bloginfo('template_url'); ?>/assets/img/quiz/quiz-answer-1.jpg" alt="">
                                </label>
                            </div>
                            <div class="quiz__box__fifth">
                                <input class="checkbox" type="checkbox" id="input12" name="answer1[]" value="img2">
                                <label class="quiz__label" id="answer12">
                                    <img class="quiz__label__img" src="<?php bloginfo('template_url'); ?>/assets/img/quiz/quiz-answer-2.jpg" alt="">
                                </label>
                            </div>
                            <div class="quiz__box__fifth">
                                <input class="checkbox" type="checkbox" id="input13" name="answer1[]" value="img3">
                                <label class="quiz__label" id="answer13">
                                    <img class="quiz__label__img" src="<?php bloginfo('template_url'); ?>/assets/img/quiz/quiz-answer-3.jpg" alt="">
                                </label>
                            </div>
                            <div class="quiz__box__fifth">
                                <input class="checkbox" type="checkbox" id="input14" name="answer1[]" value="img4">
                                <label class="quiz__label" id="answer14">
                                    <img class="quiz__label__img" src="<?php bloginfo('template_url'); ?>/assets/img/quiz/quiz-answer-4.jpg" alt="">
                                </label>
                            </div>
                            <div class="quiz__box__fifth">
                                <input class="checkbox" type="checkbox" id="input15" name="answer1[]" value="img5">
                                <label class="quiz__label" id="answer15">
                                    <img class="quiz__label__img" src="<?php bloginfo('template_url'); ?>/assets/img/quiz/quiz-answer-5.jpg" alt="">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="quiz__body__bottom" id="quiz__body__bottom">
                        <a class="header__content__link quiz-send" href="#" id="1">
                            <div class="header__content__circle header__content__circle--black quiz-send--id" id="1">
                                <svg class="header__content__circle__icon quiz-send--id" fill="black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16" id="1">
                                    <path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="black"></path>
                                </svg>
                            </div>
                            <span class="header__contetn__text header__contetn__text--black quiz-send--id" id="1">Пройти</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="quiz quiz--finish">
        <div class="wrapper">
            <div class="quiz__body">
                <button class="quiz__close">
                    <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                        <path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"></path>
                    </svg>
                </button>
                <form class="quiz__body__content" id="quiz-form" action="#">
                    <div class="quiz__body__top">
                        <div class="progress__num">100%</div>
                        <div class="progress">
                            <div class="progress__bar" style="width: 100%;"></div>
                        </div>
                        <div class="quiz__body__title"></div>
                        <div class="quiz__box" id="quiz__box">
                            <div class="quiz__box__half quiz__box__fifth--column quiz__box__fifth--full">
                                <input class="quiz__input quiz__input--mb" type="text" name="firstname" id="firstname" placeholder="Имя">
                                <input class="quiz__input quiz__input--mb" type="phone" name="mobile" id="mobile" placeholder="+48999999999">
                                <input class="quiz__file quiz__input--mb" type="file" name="file[]" id="file" multiple>
                                <label class="quiz__file__btn" for="file">
                                    <div class="quiz-fake">Прикрепить файл или информацию о проекте</div>
                                </label>
                                <div class="quiz__error error" id="quiz-error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="quiz__body__bottom" id="quiz__body__bottom">
                        <button class="header__content__link" type="submit" id="quiz-send">
                            <div class="header__content__circle header__content__circle--black quiz-send--id">
                                <svg class="header__content__circle__icon quiz-send--id" fill="black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16">
                                    <path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="black"></path>
                                </svg>
                            </div>
                            <span class="header__contetn__text header__contetn__text--black quiz-send--id">Отправить</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<? get_footer(); ?>