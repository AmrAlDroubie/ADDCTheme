<?php 
require get_template_directory() . "/inc/init_variables.php";
?>
<section class="about-us-page" style=<?="background-image:url(". get_the_post_thumbnail_url($post) .")" ?>>
    <?php require_once get_template_directory() . "/template_parts/inner_navbar.php"  ?>
    <div class="container col-12 col-xl-9 about-us-text text-white">
        <h2 class="my-2">
            <?php the_title() ?>
        </h2>
    </div>
</section>