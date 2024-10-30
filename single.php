<?php get_header() ?>
<?php
    get_template_part("template_parts/navbar");
    wp_reset_postdata();
?>

<section class="single-post my-5 py-4">
    <div class="container col-12 col-xl-10">
        <div class="row">
            <div class="col-12 col-lg-9 mb-4">
                <h2 class='fw-bold fs-3 lh-lg'>
                    <?= get_the_title() ?>
                </h2>
                <div class="d-flex align-items-center my-4">
                    <svg class='d-block' width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="30" height="30" rx="8" fill="#DCFFF8" />
                        <path
                            d="M14.3154 19.9837C13.2704 19.9837 12.2252 19.9837 11.1799 19.9837C10.4573 19.9837 10.0008 19.5293 10 18.8101C10 18.1452 10 17.48 10 16.8148C10 16.115 10.4599 15.6556 11.1622 15.6552C13.2736 15.6552 15.3851 15.6552 17.4966 15.6552C18.193 15.6552 18.6461 16.11 18.6482 16.8051C18.6499 17.4807 18.6499 18.1564 18.6482 18.8321C18.6461 19.5289 18.193 19.9833 17.4987 19.9841C16.4382 19.9847 15.3771 19.9845 14.3154 19.9837Z"
                            fill="#04AC8B" />
                        <path
                            d="M11.6301 14.561V13.4947H11.8071C12.4827 13.4947 13.1584 13.4926 13.8341 13.4968C13.9414 13.4968 14.003 13.4744 14.0452 13.3642C14.199 12.9926 14.4279 12.6567 14.7175 12.3777C14.9908 12.1062 15.2665 11.8355 15.5334 11.5593C15.5911 11.4993 15.6365 11.4286 15.6669 11.3511C16.5989 8.92331 18.3666 7.51664 20.9126 7.07534C21.5921 6.95752 22.2775 6.98328 23 7.11504C22.8809 7.50904 22.7977 7.90262 22.6457 8.26833C21.6968 10.5487 19.9853 11.8942 17.56 12.3203C17.158 12.3912 16.7412 12.3773 16.3316 12.4047C16.2821 12.4081 16.218 12.4127 16.1875 12.4432C15.8784 12.7531 15.5744 13.0681 15.2703 13.3832C15.2446 13.4165 15.2219 13.4519 15.2023 13.4892H17.0182V14.561H11.6301Z"
                            fill="#04AC8B" />
                    </svg>
                    <span class='fw-bold fs-5 ms-2'><?= get_the_author() ?></span>
                </div>
                <h1><?= get_the_tag_list() ?></h1>
                <div class="lh-lg fs-5">
                    <?php the_content() ?>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-4">
                <h4 class='primary-clr fw-bold mb-4'><?= pll__("Other articles") ?></h4>
                <?php
                    $category_id = get_the_terms(get_the_ID(),'category');
                    $other_posts = new WP_Query([
                        'post_type'=>'post',
                        'post__not_in'=>[get_the_ID()],
                        'category__in'=>[$category_id[0]->term_id],
                        'posts_per_page'=>3
                    ]);
                    while($other_posts->have_posts()):
                        $other_posts->the_post();
                ?>
                <a class='my-4 d-block' href="<?= get_the_permalink() ?>">
                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">
                    <h5 class='mt-3 secondry-clr lh-base'>
                        <?= get_the_title() ?>
                    </h5>
                </a>
                <?php endwhile;?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>