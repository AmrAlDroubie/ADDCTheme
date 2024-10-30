<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() . "/assets/images/favicon.svg" ?>" type="image/x-icon">
    <?php wp_head();?>
</head>
<body>
<?php 
global $assets;
global $current_lang;
global $images;
global $site_url;
global $lang_code;
?>
<?php if(current_user_can('administrator')): ?>
<a id='admin-settings' class='d-flex' href='<?= $site_url . '/wp-admin' ?>'>
    <i class="fa-solid fa-gear"></i>
</a>
<?php endif; ?>