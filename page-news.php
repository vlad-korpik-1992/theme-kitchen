<?php
/**
  * Template Name: Новости
*/
?>
<?php get_header('single');?>
    <section class="news">
        <div class="wrapper">
            <div class="box">
                <?php
                    if ( get_query_var('paged') ) { 
                        $paged = get_query_var('paged'); 
                    } 
                    else if ( get_query_var('page') ) {
                        $paged = get_query_var('page'); 
                    } else {
                        $paged = 1; 
                    }
                    $item = 1;							
                    $args = array(
                                    'post_type' => 'post',
                                    'post_status'       => 'publish',
                                    'paged'             => $paged,
                                    'posts_per_page'    => 20
                                );
                    $temp = $wp_query;
                    $wp_query= null;
                    $wp_query = new WP_Query($args);
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();?>
                        <div class="box__half <? if($item==3 || $item==4 || $item==5 || $item==8 || $item==9 || $item==10):?>box__half--news<?endif;?>">
                            <a class="news__blog <? if($item==3 || $item==4 || $item==5 || $item==8 || $item==9 || $item==10):?>news__blog--three<?endif;?>" href="<?php echo get_permalink($posts['ID']); ?>">
                                <img class="news__prev" src="<?php the_post_thumbnail_url(  )?>" alt="<?php the_title(); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                        </div>
                    <? $item++; endwhile;
                    the_posts_pagination( array('mid_size' => 3) );								
                    $wp_query = null;								
                    $wp_query = $temp;								
                    wp_reset_query();?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>