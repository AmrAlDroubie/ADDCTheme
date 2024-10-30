<?php
    require_once get_template_directory() . "/inc/init_variables.php";
    $post_id = pll_get_post(get_queried_object_id(), $current_lang ? 'ar' : 'en');
    $home =  pll_get_post(get_page_by_path('homepage')->ID,$lang_code);
    $about_us =  pll_get_post(get_page_by_path('about-us')->ID,$lang_code);
    $our_interests =  pll_get_post(get_page_by_path('our-interests')->ID,$lang_code);
    $our_services =  pll_get_post(get_page_by_path('our-services')->ID,$lang_code);
    $blog =  pll_get_post(get_page_by_path('blog')->ID,$lang_code);
?>

<nav class="navbar navbar-expand-lg  main-nav">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="<?= $current_lang ?  $site_url :  $site_url . '/' . $lang_code ?>">
                    <img src=<?= $current_lang ? $images . "logo_en.svg" : $images . "logo_ar.svg"  ?> alt="Logo">
                </a>
                <button class="navbar-toggler shadow-none fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Navbar Links -->
                <ul class="navbar-nav ms-lg-5 text-center mb-2 mb-lg-0 mt-lg-0 mt-3">
                    <li class="nav-item ms-xl-5">
                        <a class="nav-link <?= $post->ID==$home?'active':'' ?>" aria-current="page" href="<?= $current_lang ? $site_url : $site_url . '/ar' ?>">
                            <?= pll__("Home") ?>
                        </a>
                    </li>
                    <li class="nav-item ms-xl-4">
                        <a class="nav-link <?= $post->ID==$our_interests?'active':'' ?>"
                            href="<?= $current_lang ? $site_url . '/our-interests' : $site_url . '/ar/اهتماماتنا' ?>">
                            <?= pll__("Our interests") ?>
                        </a>
                    </li>
                    <li class="nav-item ms-xl-4">
                        <a class="nav-link <?= $post->ID==$our_services?'active':'' ?>"
                            href="<?= $current_lang ? $site_url .'/our-services': $site_url . '/ar/خدماتنا' ?>">
                            <?= pll__("Our Services") ?>
                        </a>
                    </li>
                    <li class="nav-item ms-xl-4">
                        <a class="nav-link <?= get_queried_object_id()==$blog?'active':'' ?>"
                            href="<?= $current_lang ? $site_url . '/blog':$current_lang . '/ar/المقالات-والتقارير'  ?>">
                            <?= pll__("Articles and Reports") ?>
                        </a>
                    </li>
                    <li class="nav-item ms-xl-4">
                        <a class="nav-link <?= $post->ID==$about_us?'active':'' ?>"
                            href="<?= $current_lang ? $site_url . '/about-us' : $site_url . '/ar/من-نحن' ?>">
                            <?= pll__("About us") ?>
                        </a>
                    </li>
                </ul>
                    <a href="<?= get_permalink($post_id)  ?>" class="btn primary-back d-block  text-white change-language-nav mx-auto  ms-lg-auto me-0 "
                    type="button"><?= pll__("ع") ?></a>
                </div>
            </div>
</nav>