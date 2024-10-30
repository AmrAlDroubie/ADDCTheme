<?php 
/**
 * Template Name: services
 */
?>
<?php 
    get_header();
    get_template_part("template_parts/navbar");
?>

<h1 class="text-center primary-clr fs-3 my-5"><?= pll__("Our Services") ?></h1>
<section class="our-services my-5">
    <div class="container col-12 col-xl-9">
        <?php
            $services = new WP_Query([
                'post_type'=>'services',
                'order'=>'asc',
                'ordeyby'=>'date',
                'posts_per_page'=>-1
            ]);
            if($services->have_posts()):
                while($services->have_posts()){
                    $services->the_post();
                    get_template_part("template_parts/service_box");
                }
            endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
