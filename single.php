<?php get_header('single');?>
	<section class="single">
        <div class="wrapper">
            <div class="box">
                <div class="box__half box__half--positionr">
                    <img class="single__img" src="<?php the_post_thumbnail_url(  )?>" alt="<? echo the_title(); ?>">
                    <span class="single__date"><?php echo get_the_date('j');?>/<?php echo get_the_date('n')?>/<?php echo get_the_date('Y');?></span>
                </div>
                <div class="box__half">
                    <h1 class="single-title"><? echo the_title(); ?></h1>
                    <p class="single__desc"><?php the_field('preview_single')?></p>
                </div>
            </div>
            <div class="single__content">
				<?php echo wpautop(the_content());?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>