<?php
/**
  * Template Name: О компании
*/
?>
<? get_header(); ?>
    <section class="about" id="about">
        <hr class="about__line">
        <div class="wrapper">
            <div class="box">
                <div class="box__half about__col">
                    <img class="about__img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>" alt="about">
                </div>
                <div class="box__half about__content">
                    <h2 class="section-title section-title--bottom"><?php the_field('title_about')?></h2>
                    <?php echo wpautop(the_content());?>
                </div>
            </div>
        </div>
    </section>
    <section class="benefits">
        <div class="wrapper">
            <div class="box">
                <div class="box__three">
                    <div class="benefits__content">
                        <div class="benefits__content__num">01</div>
                        <div class="benefits__content__circle"></div>
                        <h2><?php the_field('title_benefits_01')?></h2>
                        <p><?php echo wpautop(the_field('content_benefits_01'));?></p>
                    </div>
                </div>
                <div class="box__three">
                    <div class="benefits__content">
                        <div class="benefits__content__num">02</div>
                        <div class="benefits__content__circle"></div>
                        <h2><?php the_field('title_benefits_02')?></h2>
                        <p><?php echo wpautop(the_field('content_benefits_02'));?></p>
                    </div>
                </div>
                <div class="box__three">
                    <div class="benefits__content">
                        <div class="benefits__content__num">03</div>
                        <div class="benefits__content__circle"></div>
                        <h2><?php the_field('title_benefits_03')?></h2>
                        <p><?php echo wpautop(the_field('content_benefits_03'));?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="price">
        <div class="wrapper">
            <h2 class="section-title"><?php the_field('title_price')?></h2>
            <div class="box">
                <div class="box__half about__col">
                    <img class="price__img" src="<?php the_field('img_price')?>" alt="">
                </div>
                <div class="box__half about__content">
                    <h3 class="price__title"><?php the_field('subtitle_price')?></h3>
                    <p class="price__content"><?php the_field('content_price')?></p>
                    <a class="header__content__link start" href="#">
                        <div class="header__content__circle header__content__circle--black">
                            <svg class="header__content__circle__icon" fill="black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16">
                                <path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="black"></path>
                            </svg>
                        </div>
                        <span class="header__contetn__text header__contetn__text--black">Пройти</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="stages">
        <div class="wrapper">
            <h2 class="section-title"><?php the_field('title_stages')?></h2>
            <div class="box box--jcenter">
                <?if( have_rows('stages') ):?>
                    <?while ( have_rows('stages') ) : the_row();?>
                        <div class="box__quarter">
                            <div class="stages__content">
                                <div class="stages__content__circle">
                                    <img src="<? the_sub_field('icon_stages'); ?>" alt="<? the_sub_field('subtitle_stages'); ?>">
                                </div>
                                <h3><? the_sub_field('subtitle_stages'); ?></h3>
                                <?php echo wpautop(the_sub_field('content_stages'));?>
                            </div>
                        </div>
                    <?endwhile;?>
                <?endif;?>
            </div>
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