<?php 
    /**
     * Template name: Contact Us
     */
?>
<?php get_header() ?>
<?php get_template_part("template_parts/navbar") ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_content() ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>