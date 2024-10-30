<?php
global $assets;
global $current_lang;
global $images;
global $site_url;
global $lang_code;
?>
<section class="out-interests my-5">
    <div class="container col-12 col-xl-10">
        <?php
            $our_interests = new WP_Query(
                [
                    'post_type' => 'interests',
                    'order'     =>'ASC',
                    'orderby'   =>'date',
                    'posts_per_page'=>-1

                ]
            );
            $i=0;
            if($our_interests->have_posts()):
                while($our_interests->have_posts()):
                    $our_interests->the_post();
        ?>
        <!-- box -->
        <div class="row interest-box my-5 py-5  align-items-center <?= $i%2!=0 ?'flex-row-reverse' :'' ?>" id="<?= get_the_title() ?>">
            <div class="col-12 col-lg-6">
                <div class="interest-box-text mb-2">
                    <h3><?= the_title()?></h3>
                    <p class="light-text fs-5">
                        <?= get_the_content(); ?>
                    </p>
                    <?php $is_arabic = $current_lang ? '' :'/ar'; ?>
                    <a href="<?= $site_url . $is_arabic . '/category/' .  str_replace(" ","-",get_the_title()) ?>" class="fw-light fs-6 primary-clr">
                        <?= pll__("Check out our featured publications in the field") ;?>
                        <i class="fas fa-arrow-<?= $current_lang?'right':'left' ?>"></i>
                    </a>
                    <div>
                        <a href="#"
                            class="d-inline-flex align-items-center my-2 rounded-2 secondry-back text-white text-center py-2 px-4 primary-back-hover">
                            <svg class="me-2" width="11" height="11" viewBox="0 0 11 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.5 0C4.04131 2.17362e-08 2.64236 0.579463 1.61091 1.61091C0.579463 2.64236 0 4.04131 0 5.5C0 6.95869 0.579463 8.35764 1.61091 9.38909C2.64236 10.4205 4.04131 11 5.5 11H8.25C9.10433 11 9.5315 11 9.86822 10.8607C10.0907 10.7685 10.2929 10.6335 10.4632 10.4632C10.6335 10.2929 10.7685 10.0907 10.8607 9.86822C11 9.5315 11 9.10433 11 8.25V5.5C11 4.04131 10.4205 2.64236 9.38909 1.61091C8.35764 0.579463 6.95869 0 5.5 0ZM3.05556 4.88889C3.05556 4.72681 3.11994 4.57137 3.23455 4.45677C3.34915 4.34216 3.50459 4.27778 3.66667 4.27778H7.33333C7.49541 4.27778 7.65085 4.34216 7.76545 4.45677C7.88006 4.57137 7.94444 4.72681 7.94444 4.88889C7.94444 5.05097 7.88006 5.2064 7.76545 5.32101C7.65085 5.43562 7.49541 5.5 7.33333 5.5H3.66667C3.50459 5.5 3.34915 5.43562 3.23455 5.32101C3.11994 5.2064 3.05556 5.05097 3.05556 4.88889ZM4.88889 7.33333C4.88889 7.17126 4.95327 7.01582 5.06788 6.90121C5.18248 6.78661 5.33792 6.72222 5.5 6.72222H7.33333C7.49541 6.72222 7.65085 6.78661 7.76545 6.90121C7.88006 7.01582 7.94444 7.17126 7.94444 7.33333C7.94444 7.49541 7.88006 7.65085 7.76545 7.76545C7.65085 7.88006 7.49541 7.94444 7.33333 7.94444H5.5C5.33792 7.94444 5.18248 7.88006 5.06788 7.76545C4.95327 7.65085 4.88889 7.49541 4.88889 7.33333Z"
                                    fill="white" />
                            </svg>
                            <span>
                                <?= pll__("Lets connect");?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="interest-box-image mb-2">
                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title(); ?>">
                </div>
            </div>
        </div>
        <?php 
            $i++; 
            endwhile; 
            endif;
        ?>
    </div>
</section>