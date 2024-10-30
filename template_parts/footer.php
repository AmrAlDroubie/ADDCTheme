<?php 
global $assets;
global $current_lang;
global $images;
global $site_url;
global $lang_code;
?>

<!-- ----------------------- footer ------------------------ -->
<footer class="footer pt-5 pb-3">
        <div class="container col-xl-9 col-12">
            <!-- newsletter -->
            <div class="row justify-content-between align-items-center newsletter bg-white rounded-3 py-2 px-2 ">
                <div class="col-lg-6 col-12 mb-2 newsletter-info py-4 d-flex align-items-center">
                    <svg class="me-2" width="76" height="76" viewBox="0 0 76 76" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="76" height="76" rx="11" fill="#DCFFF8" />
                        <path
                            d="M24 35.868V43.75C24 45.1424 24.5531 46.4777 25.5377 47.4623C26.5223 48.4469 27.8576 49 29.25 49H46.75C48.1424 49 49.4777 48.4469 50.4623 47.4623C51.4469 46.4777 52 45.1424 52 43.75V35.868L38.7175 41.846C38.4919 41.9474 38.2474 41.9998 38 41.9998C37.7526 41.9998 37.5081 41.9474 37.2825 41.846L24 35.868ZM24.1295 32.088L38 38.332L51.8705 32.088C51.607 30.927 50.9567 29.89 50.0263 29.1472C49.0958 28.4043 47.9406 27.9998 46.75 28H29.25C28.0594 27.9998 26.9042 28.4043 25.9737 29.1472C25.0433 29.89 24.393 30.927 24.1295 32.088Z"
                            fill="#04AC8B" />
                    </svg>
                    <div>
                        <h6 class="fs-5 fw-bold mb-2">
                            <?= pll__("Subscribe to the newsletter.") ?>
                        </h6>
                        <span class="light-text">
                            <?= pll__("Stay up to date on the latest news and offers") ?>
                        </span>
                    </div>
                </div>
                <div class="newsletter-email col-lg-6 col-12 mb-2  py-4">
                    <form class="input-field d-flex" data-ok="<?= pll__("ok") ?>" data-failed="<?= pll__("email failed"); ?>"  data-succ="<?= pll__("email succ"); ?>" >
                        <input type="hidden" name='action' value='add_new_subscriper' >
                        <input name="email" required  class="ps-3" type="email" placeholder="<?= pll__('Enter your email to subscribe to our email list'); ?>">
                        <button class="border-0 px-3 primary-back secondry-back-hover text-white"><?= pll__("Subscribe") ?></button>
                    </form>
                </div>
            </div>

            <!-- footer body -->
            <div class="footer-body row justify-content-between">
                <div class="footer-image mb-2 col-12 col-lg-3 mb-4">
                    <img src=<?= $current_lang ? $images ."footer_logo_en.svg" : $images ."footer_logo_ar.svg" ?> alt="logo">
                </div>
                <div class="footer-contact-us mb-2 col-12 col-lg-4">
                    <div class="d-flex align-items-center mb-2">
                        <img class="me-2" src="<?=$images?>email_icon.svg" alt="email">
                        <span class="light-text"><?= get_post_meta(10,"email")[0] ?></span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <img class="me-2" src="<?=$images?>call_icon.svg" alt="phone number">
                        <span class="light-text"><?= get_post_meta(10,'phone_number')[0] ?></span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <img class="me-2" src="<?=$images?>location_icon.svg" alt="address location">
                        <span class="light-text">
                        <?= get_post_meta(10,"address")[0] ?>
                        </span>
                    </div>
                </div>
                <div class="footer-social-media col-12 col-lg-4 mb-2">
                    <h6 class="fs-5">
                        <?= pll__("Stay connected with us on social media") ?>
                    </h6>
                    <div class="d-flex align-items-center my-3">
                        <a href="<?= get_post_meta(10,"X_profile")[0] ?>" class="footer-social-link me-3">
                            <i class="primary-clr fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="<?= get_post_meta(10,"linkedin_profile")[0] ?>" class="footer-social-link me-3">
                            <i class="primary-clr fa-brands fa-linkedin"></i>
                        </a>
                        <a href="<?= get_post_meta(10,"instagram_profile")[0] ?>" class="footer-social-link me-3">
                            <i class="primary-clr fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- copyright -->
            <div class="footer-copyright d-flex flex-md-nowrap flex-wrap justify-content-between mt-2">
                <span class="light-text mb-md-0 mb-2 d-block">
                    <?= pll__("All rights reserved by ADDC for Developmental
                    Consulting") ?>
                </span>
                <a href="<?= $current_lang ? $site_url . "/privacy-policy" : $site_url . "/ar/سياسة-الخصوصية" ?>" class="light-text d-block">
                    <?= pll__("Privacy Policy") ?>
                </a>
            </div>
        </div>
    </footer>