<?php
/*
Template Name: Наша история 
*/
?>

<?php get_header(); ?>
<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('history_title'); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle"><?php the_field('history_subtitle'); ?></div>
                <div class="aboutus__text"><?php the_field('history_text'); ?></div>
            </div>
            <div class="col-lg-6"><img class="specialists__img" src="<?php the_field('history_img'); ?>" alt="история"></div>
        </div>

        <div class="row">
            <div class="col-lg-6"><img class="specialists__img" src="<?php the_field('quality_img'); ?>" alt="история"></div>
            <div class="col-lg-6">
                <div class="subtitle"><?php the_field('quality_title'); ?></div>
                <div class="aboutus__text"><?php the_field('quality_text'); ?></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle"><?php the_field('tec_title'); ?></div>
                <div class="aboutus__text"><?php the_field('tec_text'); ?></div>
            </div>
            <div class="col-lg-6"><img class="specialists__img" src="<?php the_field('tec_img'); ?>" alt="tec"></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>