<?php get_header() ?>
<?php get_template_part("template_parts/header_page") ?>
<section>
    <div class="container col-12 col-lg-10 my-5">
        <div class="row">
            <div class="col-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>