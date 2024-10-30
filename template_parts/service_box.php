<!-- box -->
<div class="row service-box mb-5 py-3 shadow-sm">
    <div class="col-md-4 col-12">
        <div class="image h-100">
            <img src="<?= get_the_post_thumbnail_url() ?>" class="rounded-2 object-fit-cover" alt="<?= get_the_title() ?>">
        </div>
    </div>
    <div class="col-md-8 col-12">
        <div class="text py-2">
            <h4 class="primary-clr font-22"><?= get_the_title() ?></h4>
            <span class="light-text fw-bold mb-3 d-block fs-6">
                <?= pll__("Some of our services in the field:") ?>
            </span>

            <div class="service-feats row">
                <?php
                    $service_options = rwmb_get_value( 'service_name', '', get_the_ID());
                    foreach($service_options as $service):
                ?>
                <!-- box -->
                <div class="col-12 col-md-6 mb-2 d-flex align-items-center">
                    <i class="fas fa-square text-black me-2"></i>
                    <span class="fs-6">
                        <?= $service ?>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>