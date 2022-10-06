<?php
/**
  * Template Name: Каталог
*/
?>
<?php get_header();?>
    <section class="catalog" id="catalog">
        <div class="wrapper">
            <div class="catalog__box">
                <div class="catalog__box__items">
                    <a class="catalog__box__items__link catalog__box__items__link--active" id="cuisine" href="#">Кухни</a>
                </div>
                <div class="catalog__box__items">
                    <a class="catalog__box__items__link" id="baths" href="#">Ванны</a>
                </div>
                <div class="catalog__box__items">
                    <a class="catalog__box__items__link" id="cabinets" href="#">Шкафы</a>
                </div>
            </div>
            <div class="box catalog__content catalog__content--open" id="1cuisine">
                <?php  $args = array (
					'post_type' => 'catalog',
					'numberposts' => -1,
					'order' => 'DESC',
					'orderby'   => 'meta_value',
					'suppress_filters' => true,
				);
                $result = wp_get_recent_posts($args);
				foreach ($result as $product):
                    if('cuisine' == get_field('categories', $product['ID'])):?>
                        <div class="box__three">
                            <a class="catalog__link" href="<?php echo get_permalink($product['ID']); ?>">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $product['ID'] ) ); ?>" alt="">
                                <div class="catalog__link__down">
                                    <div class="header__content__circle header__content__circle--dn">
                                        <svg class="header__content__circle__icon" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16">
                                            <path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    <span class="header__contetn__text header__contetn__text--catalog">Подробнее</span>
                                </div>
                            </a>
                        </div>
                    <?endif;?>
                <?endforeach;?>
            </div>
            <div class="box catalog__content" id="1baths">
                <?foreach ($result as $product):
                    if('baths' == get_field('categories', $product['ID'])):?>
                        <div class="box__three">
                            <a class="catalog__link" href="<?php echo get_permalink($product['ID']); ?>">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $product['ID'] ) ); ?>" alt="">
                                <div class="catalog__link__down">
                                    <div class="header__content__circle header__content__circle--dn">
                                        <svg class="header__content__circle__icon" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16">
                                            <path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    <span class="header__contetn__text header__contetn__text--catalog">Подробнее</span>
                                </div>
                            </a>
                        </div>
                    <?endif;?>
                <?endforeach;?>
            </div>
            <div class="box catalog__content" id="1cabinets">
                <?foreach ($result as $product):
                    if('cabinets' == get_field('categories', $product['ID'])):?>
                        <div class="box__three">
                            <a class="catalog__link" href="<?php echo get_permalink($product['ID']); ?>">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $product['ID'] ) ); ?>" alt="">
                                <div class="catalog__link__down">
                                    <div class="header__content__circle header__content__circle--dn">
                                        <svg class="header__content__circle__icon" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 16">
                                            <path d="M169.707 8.70711C170.098 8.31658 170.098 7.68342 169.707 7.29289L163.343 0.928932C162.953 0.538408 162.319 0.538408 161.929 0.928932C161.538 1.31946 161.538 1.95262 161.929 2.34315L167.586 8L161.929 13.6569C161.538 14.0474 161.538 14.6805 161.929 15.0711C162.319 15.4616 162.953 15.4616 163.343 15.0711L169.707 8.70711ZM0 9H169V7H0V9Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    <span class="header__contetn__text header__contetn__text--catalog">Подробнее</span>
                                </div>
                            </a>
                        </div>
                    <?endif;?>
                <?endforeach;?>
            </div>
        </div>
    </section>
<?php get_footer();?>