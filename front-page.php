<?php get_header();?>
<!-- --------------- Landing ------------------- -->
<img src="<?=$images?>landing_header2.png" class="d-none">
<img src="<?=$images?>landing_header3.png" class="d-none">
<header class="landing">
    <?php get_template_part("template_parts/inner_navbar") ?>
    <div class="container col-xl-10 col-12">
        <div class="landing-content text-white py-5 mt-5">
            <h2 class="fs-1">
                <?= pll__("header title") ?>
            </h2>
            <p class="lh-lg fs-5 fw-light">
                <?= pll__("header paragraph") ?>
            </p>

            <a href="<?=  $current_lang ? $site_url . "/about-us" : $site_url . "/ar/من-نحن" ?>"
                class="mt-3 rounded-3 d-inline-flex text-white primary-back align-items-center py-3 fs-5 px-5 secondry-back-hover">
                <span class="me-3">
                    <?= pll__("read more") ?>
                </span>
                <?php if($current_lang): ?>
                <i class="fas fa-arrow-right-long"></i>
                <?php else: ?>
                <i class="fas fa-arrow-left-long"></i>
                <?php endif;?>
            </a>
        </div>
    </div>
</header>




<!-- --------------- Latest Posts ------------------- -->
<section class="latest-posts my-5">
    <div class="container col-xl-9 col-12">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center mb-3">
                <svg class="d-block me-2" width="26" height="24" viewBox="0 0 26 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.1477 19.2722H10.4041V18.6576H10.362C9.44237 19.0583 8.45358 19.2618 7.45556 19.2559H3.71199V3.87856H7.45556C8.44379 3.8738 9.42239 4.07933 10.3304 4.48234C10.3559 4.49089 10.3805 4.50182 10.4041 4.51498V3.87856H14.1477C14.7565 3.87738 15.3631 3.95411 15.9536 4.10702C15.7641 3.87312 15.5587 3.64466 15.3481 3.42709C14.321 2.36866 13.1099 1.51979 11.7783 0.924936C10.4144 0.313651 8.94225 0.00243197 7.45556 0.0111016H0V23.1506H7.45556C8.94916 23.1604 10.4284 22.8492 11.7994 22.2368C13.1312 21.6477 14.3413 20.8002 15.3639 19.74C15.5745 19.5225 15.7694 19.294 15.9589 19.0601C15.3665 19.2121 14.758 19.2871 14.1477 19.2831"
                        fill="#04AC8B" />
                    <path
                        d="M24.4624 7.10412C23.3038 4.32581 21.1599 2.11095 18.4706 0.914011C17.1067 0.302725 15.6345 -0.00849332 14.1478 0.000176272H6.69226V23.1397H14.1478C15.6412 23.1468 17.1199 22.8357 18.4916 22.2258C19.8234 21.6368 21.0335 20.7892 22.0562 19.7291C23.0731 18.6629 23.889 17.4104 24.4624 16.0357C25.0461 14.6241 25.347 13.105 25.347 11.5699C25.347 10.0349 25.0461 8.51575 24.4624 7.10412ZM21.0242 14.5399C20.6521 15.4564 20.1162 16.2923 19.4446 17.004C18.7696 17.7171 17.9643 18.2848 17.0753 18.6739C16.7214 18.8314 16.355 18.957 15.9801 19.0492C15.3877 19.2012 14.7792 19.2761 14.1689 19.2722H10.4253V3.87852H14.1689C15.1564 3.87585 16.1342 4.07937 17.0437 4.47686C17.9343 4.87171 18.7438 5.43848 19.4288 6.14677C20.1174 6.85397 20.6664 7.6927 21.0452 8.6163C21.4274 9.55573 21.6242 10.5645 21.6242 11.5835C21.6242 12.6025 21.4274 13.6113 21.0452 14.5507"
                        fill="#04AC8B" />
                </svg>
                <h3 class="m-0">
                    <?= pll__("Latest articles and reports") ?>
                </h3>
            </div>
            <?php 
                $post_id = pll_get_post(get_option('page_for_posts'), $current_lang ? 'en' : 'ar');
            ?>
            <a href="<?= get_permalink($post_id) ?>" class="primary-clr secondry-clr-hover fs-5">
                <?= pll__("More") ?>
            </a>
        </div>
        <div class="row mt-3 ">
            <?php
                $latest_posts = new  WP_Query(
                    [
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'orderby'        => 'date', 
                        'order'          => 'DESC'
                    ]
                );
                if($latest_posts->have_posts()):
                    while($latest_posts->have_posts()):
                        $latest_posts->the_post();
            ?>
            <?php get_template_part("template_parts/post_box") ?>
            <?php endwhile; ?>
            <?php 
                wp_reset_postdata();
                endif; 
            ?>
        </div>
    </div>
</section>

<!-- --------------- Our interests ------------------- -->
<section class="interests my-5 pt-5">
    <div class="container col-xl-9 col-12">
        <h2 class="fw-bold text-center mb-4">
            <?=pll__("Our Areas Of Interest")?>
        </h2>
        <div class="row">
            <?php
                $interest_page_id = pll_get_post(get_page_by_path('our-interests')->ID,$lang_code);
                $interest_page_url = get_permalink($interest_page_id);
                $our_interests = new WP_Query([
                    'post_type' => "interests",
                    'posts_per_page' =>5,
                    'orderby'        => 'date',       
                    'order'          => 'ASC'
                ]);
                if($our_interests->have_posts()):
                    $i=0;
                    while($our_interests->have_posts()):
                        $our_interests->the_post();
            ?>
            <!-- box -->
            <div class="<?= $i>2 ? 'col-lg-6' : 'col-lg-4' ?> col-12 mb-2">
                <a href="<?= substr($interest_page_url,0,-1) . '#' . get_the_title() ?>" class="d-block">
                    <div style="<?= "background-image:url(" .  get_the_post_thumbnail_url() . ")" ?>"
                        class="shadow-lg  interest-box d-flex align-items-center justify-content-center text-white fw-bold">
                        <?= the_title() ?>
                    </div>
                </a>
            </div>
            <?php $i++; endwhile; ?>
            <?php 
                wp_reset_postdata();
                endif; 
            ?>
        
        </div>
    </div>
</section>


<!-- ------------- Contact Us ------------------- -->
<section class="contact-us py-5  my-5 d-flex align-items-center">
    <div class="container col-xl-9">
        <div class="row justify-content-md-between justify-content-center">
            <div class="col-md-6 col-12">
                <div class="contact-us-text">
                    <svg class="d-block" width="45" height="60" viewBox="0 0 45 60" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.3008 38.7439L17.2755 38.6848C16.8952 38.5809 16.5181 38.4655 16.1448 38.3389L16.1166 38.3276C12.2311 36.9982 8.85847 34.4871 6.4709 31.1458C4.08332 27.8046 2.8003 23.8003 2.80142 19.6936C2.80017 14.6536 4.73177 9.80505 8.19836 6.14657C11.6649 2.48809 16.4025 0.298326 21.4353 0.0283007C26.4681 -0.241724 31.4128 1.42856 35.2509 4.69512C39.0891 7.96167 41.5283 12.5757 42.0664 17.587C42.1901 18.7458 41.2338 19.6936 40.0694 19.6936C38.9049 19.6936 37.9739 18.743 37.8192 17.5898C37.4451 14.8679 36.353 12.2947 34.655 10.1346C32.9571 7.97458 30.7146 6.30563 28.158 5.29929C25.6014 4.29295 22.823 3.98552 20.1083 4.40859C17.3936 4.83166 14.8404 5.96998 12.7113 7.70655C10.5822 9.44312 8.95394 11.7153 7.9938 14.2896C7.03366 16.8639 6.77632 19.6474 7.24821 22.354C7.7201 25.0607 8.90421 27.5929 10.6788 29.6904C12.4535 31.7879 14.7546 33.375 17.3458 34.2886C17.8677 33.1088 18.7794 32.1442 19.928 31.5566C21.0765 30.969 22.3922 30.794 23.6544 31.061C24.9166 31.328 26.0487 32.0208 26.8609 33.0232C27.6731 34.0256 28.116 35.2767 28.1155 36.5669C28.1168 37.8671 27.6677 39.1276 26.8445 40.134C26.0213 41.1405 24.8749 41.8307 23.6003 42.0873C22.3256 42.3438 21.0015 42.151 19.853 41.5414C18.7045 40.9319 17.8026 39.9433 17.3008 38.7439ZM14.4178 42.2035C11.1014 41.0124 8.08941 39.103 5.59722 36.6119C4.05627 36.7912 2.63484 37.5302 1.60296 38.6886C0.571081 39.847 0.000639371 41.3441 0 42.8954V45.4831C0 47.0919 0.500656 48.6614 1.43446 49.9721C5.77161 56.0587 12.8708 59.0711 22.4902 59.0711C32.1095 59.0711 39.2115 56.0559 43.5571 49.9721C44.4952 48.6601 44.9997 47.0876 45 45.4746V42.8926C45 41.2151 44.334 39.6063 43.1484 38.4196C41.9628 37.233 40.3546 36.5656 38.6771 36.5641H32.3345C32.335 38.6591 31.667 40.6996 30.4278 42.3889C29.1887 44.0781 27.4429 45.328 25.4444 45.9567C23.446 46.5855 21.2991 46.5602 19.3159 45.8847C17.3328 45.2092 15.6169 43.9214 14.4178 42.2035ZM33.7409 19.6936C33.7409 18.0494 33.3805 16.4252 32.6851 14.9353C31.9897 13.4454 30.9762 12.126 29.7159 11.07C28.546 10.0914 27.1894 9.36084 25.7284 8.9228C24.2675 8.48475 22.7327 8.34833 21.2174 8.52184C19.7021 8.69534 18.2378 9.17514 16.9137 9.93208C15.5896 10.689 14.4332 11.7073 13.5148 12.925C12.5964 14.1427 11.9352 15.5345 11.5713 17.0157C11.2075 18.4968 11.1486 20.0365 11.3983 21.5412C11.6479 23.0458 12.2009 24.484 13.0237 25.7683C13.8464 27.0526 14.9217 28.1562 16.1841 29.012C17.9536 27.5351 20.1853 26.7258 22.4902 26.7253C24.8894 26.7253 27.0889 27.5832 28.799 29.012C30.3215 27.9809 31.5681 26.5924 32.4296 24.9679C33.2911 23.3434 33.7413 21.5325 33.7409 19.6936Z"
                            fill="#04AC8B" />
                    </svg>
                    <h4 class="fw-bold fs-3 mt-3 mb-3">
                        <?= pll__("Lets work together") ?>
                    </h4>
                    <p class="light-text fw-light fs-5">
                        <?= pll__("If you would like to obtain any of our products or services") ?>
                    </p>
                    <a href="#"
                        class="contact-us-btn mb-3 d-inline-flex align-items-center justify-content-center py-2 px-3 primary-back secondry-back-hover text-white fs-5 rounded-3">
                        <svg class="d-block me-2" width="11" height="11" viewBox="0 0 11 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.5 0C4.04131 2.17362e-08 2.64236 0.579463 1.61091 1.61091C0.579463 2.64236 0 4.04131 0 5.5C0 6.95869 0.579463 8.35764 1.61091 9.38909C2.64236 10.4205 4.04131 11 5.5 11H8.25C9.10433 11 9.5315 11 9.86822 10.8607C10.0907 10.7685 10.2929 10.6335 10.4632 10.4632C10.6335 10.2929 10.7685 10.0907 10.8607 9.86822C11 9.5315 11 9.10433 11 8.25V5.5C11 4.04131 10.4205 2.64236 9.38909 1.61091C8.35764 0.579463 6.95869 0 5.5 0ZM3.05556 4.88889C3.05556 4.72681 3.11994 4.57137 3.23455 4.45677C3.34915 4.34216 3.50459 4.27778 3.66667 4.27778H7.33333C7.49541 4.27778 7.65085 4.34216 7.76545 4.45677C7.88006 4.57137 7.94444 4.72681 7.94444 4.88889C7.94444 5.05097 7.88006 5.2064 7.76545 5.32101C7.65085 5.43562 7.49541 5.5 7.33333 5.5H3.66667C3.50459 5.5 3.34915 5.43562 3.23455 5.32101C3.11994 5.2064 3.05556 5.05097 3.05556 4.88889ZM4.88889 7.33333C4.88889 7.17126 4.95327 7.01582 5.06788 6.90121C5.18248 6.78661 5.33792 6.72222 5.5 6.72222H7.33333C7.49541 6.72222 7.65085 6.78661 7.76545 6.90121C7.88006 7.01582 7.94444 7.17126 7.94444 7.33333C7.94444 7.49541 7.88006 7.65085 7.76545 7.76545C7.65085 7.88006 7.49541 7.94444 7.33333 7.94444H5.5C5.33792 7.94444 5.18248 7.88006 5.06788 7.76545C4.95327 7.65085 4.88889 7.49541 4.88889 7.33333Z"
                                fill="white" />
                        </svg>
                        <span>
                            <?= pll__("Lets communicate") ?>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="contact-us-image text-end">
                    <img src="<?= $images ?>contact_us_landing.png" alt="contact us">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>