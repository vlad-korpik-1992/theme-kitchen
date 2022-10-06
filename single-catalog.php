<?php get_header('single');?>
    <section class="cart">
        <div class="wrapper">
            <div class="box">
                <div class="box__half about__col">
                    <?php if ( $slides = get_field('gallery_cart') ):?>
                        <div class="cart__slider">
                            <?php foreach ( $slides as $slide ): ?>
                                <img class="cart__slider__img" src="<?php echo $slide;?>" alt="">
                            <?php endforeach; ?>
                        </div>
                        <div class="cart__sliderprev">
                            <?php foreach ( $slides as $slide ): ?>
                                <img class="cart__sliderprev__img" src="<?php echo $slide;?>" alt="">
                            <?php endforeach; ?>
                        </div>
                        <? else:?>
                            <img class="cart__slider__img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>" alt="">
                    <? endif;?>
                </div>
                <div class="box__half about__content">
                    <div class="cart__info">
                        <h1><?php the_title();  ?></h1>
                        <span>Описание</span>
                        <?php echo wpautop(the_content());?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="process">
        <div class="wrapper">
            <?php if( get_field('process_cart') || get_field('gallery_on_the_right_cart')): ?>
                <div class="box">
                    <div class="process__items">
                        <h2 class="section-title">Процесс</h2>
                        <?php echo wpautop(the_field('process_cart'));?>
                    </div>
                    <div class="process__col">
                        <?php if ( $images = get_field('gallery_on_the_right_cart') ): $item=1;
                            foreach ( $images as $img ): 
                                if ($item == 1):?>
                                    <img class="process__col__img-left" src="<? echo $img;?>" alt="">
                                <?endif;
                                if ($item == 2):?>
                                    <img class="process__col__img-right" src="<? echo $img;?>" alt="">
                                <?endif; $item++;
                            endforeach; ?>
                        <? endif;?>
                    </div>
                </div>
            <?php endif;?>
            <?php if( get_field('content_process_cart')): ?>
                <div class="box <?php if( get_field('process_cart') || get_field('gallery_on_the_right_cart')): ?> process__row<?endif;?>">
                    <div class="box__half about__col">
                        <img class="process__img" src="<?php the_field('img_on_the_left_cart')?>" alt="">
                    </div>
                    <div class="box__half about__content">
                        <?php echo wpautop(the_field('content_process_cart'));?>
                    </div>
                </div>
            <?endif;?>
        </div>
    </section>
    <?php if( get_field('img_thanks')): ?>
        <section class="thanks">
            <div class="wrapper">
                <div class="thanks__box">
                    <h2 class="section-title">Отзыв</h2>
                    <div class="thanks__box__items">
                        <img class="thanks__img" src="<? the_field('img_thanks')?>" alt="">
                        <a class="thanks__box__items__link" href="<? the_field('url_thanks')?>" target="_blank">Первоисточник</a>
                    </div>
                </div>
            </div>
        </section>
    <?endif;?>
    <section class="price">
        <div class="wrapper">
            <div class="box">
                <div class="box__half about__col">
                    <img class="price__img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( 180 ) ); ?>" alt="">
                </div>
                <div class="box__half about__content">
                    <h3 class="price__title"><? the_field('price_title')?></h3>
                    <?php echo wpautop(the_field('price_content'));?>
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
<?php get_footer();?>