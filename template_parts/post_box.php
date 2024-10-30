<div class="col-12 col-md-6  col-lg-4 mb-3">
    <div class="post-box shadow pb-3">
        <div class="image">
            <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?>">
        </div>
        <div class="px-2 mt-2">
            <h4 class="fw-bold lh-base">
            <?= the_title() ?>
            </h4>
            <p class="lh-base light-text">
                <?php

                    $short_text = wp_strip_all_tags(substr(trim(get_the_content()),0,300));
                    $short_text .= "....";
                ?>
                <?= $short_text ?>
            </p>
            <a href="<?= get_permalink(get_the_ID()) ?>" class=" primary-back text-white fs-6 py-2 px-3 rounded-3 secondry-back-hover">
                <?= pll__("More") ?>
            </a>
        </div>
    </div>

</div>