<?php get_header() ?>
<?php get_template_part("template_parts/navbar")?>

<section class="blog-page my-5 py-3">
    <div class="container col-12 col-xl-9">
        <div class="row">
        <?php
            if(have_posts()):
                while(have_posts()):
                    the_post();
                get_template_part("template_parts/post_box");
                endwhile;
                ?>
                <div class='d-flex posts-pag'>
                <?php
                echo paginate_links( [
                    'total' => $wp_query->max_num_pages, // total number of pages
                    'prev_text' => pll__('Previous'),      // text for previous page
                    'next_text' => pll__('Next')           // text for next page
                ]);
                ?>
                </div>
                <?php
            else:
            ?>
            <div class="text-center my-5">
                <h1><?= pll__("Sorry,no articles to display at the moment.")?></h1>
                <a class='fs-5 primary-clr' href="<?= $current_lang ? $site_url . "/blog" : $site_url . "/ar/blog" ?>">
                    <?= pll__("Back to the articles page.") ?>
                </a>
            </div>

            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer() ?>
