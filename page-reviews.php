<?php
/**
  * Template Name: Отзывы клиентов
*/
?>
<?php get_header('single');?>
    <section class="comments">
        <div class="wrapper">
            <div class="box">
                <?if( have_rows('comments') ):
                    while ( have_rows('comments') ) : the_row();?>
                        <div class="box__half">
                            <img class="comments__img" src="<? the_sub_field('img_comments'); ?>" alt="">
                        </div>
                    <?endwhile;
                    else:?>
                        <div class="box__full about__content">
                            <p>Раздел на стадии заполнения</p>
                        </div>
                <?endif;?>
            </div>
        </div>
    </section>
<?php get_footer();?>