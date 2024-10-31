<?php
if(!function_exists('our_services_custom_fields')){
    function our_services_custom_fields($meta_boxes) {
        $prefix = '';
        $meta_boxes[] = [
            'title'   => esc_html__( 'Our Services', 'online-generator' ),
            'id'      => 'our_services',
            'post_types' => ['services'],
            'context' => 'normal',
            'fields'  => [
                [
                    'type'        => 'text',
                    'name'        => esc_html__( 'خدماتنا في هذا المجال', 'online-generator' ),
                    'id'          => $prefix . 'service_name',
                    'placeholder' => esc_html__( 'اسم الخدمة', 'online-generator' ),
                    'size'        => "100%",
                    'clone'       => true,
                    'class'       => 'custom-input-field',
                ],
            ],
        ];
    
        return $meta_boxes;
    }
    add_filter( 'rwmb_meta_boxes', 'our_services_custom_fields');
}

if(isset($_GET['post']))
if(!function_exists('addc_information') && $_GET['post'] == 10){
    function addc_information($meta_boxes) {
        $prefix = '';
        $meta_boxes[] = [
            'title'   => esc_html__('ADDC Information'),
            'id'      => 'addc_information',
            'post_types' => ['page'],
            'context' => 'normal',
            'fields'  => [
                [
                    'type'        => 'text',
                    'name'        => esc_html__('Email' ),
                    'id'          => $prefix . 'email',
                    'placeholder' => esc_html__( 'Email' ),
                    'size'        => "100%",
                    'class'       => 'custom-input-field',
                ],
                [
                    'type'        => 'textarea',
                    'name'        => esc_html__('Address' ),
                    'id'          => $prefix . 'address',
                    'placeholder' => esc_html__( 'Address' ),
                    'size'        => "50%",
                    'class'       => 'custom-input-field',
                ],
                [
                    'type'        => 'text',
                    'name'        => esc_html__('Phone Number', 'online-generator' ),
                    'id'          => $prefix . 'phone_number',
                    'placeholder' => esc_html__( 'Phone Number', 'online-generator' ),
                    'size'        => "100%",
                    'class'       => 'custom-input-field',
                ],
                [
                    'type'        => 'url',
                    'name'        => esc_html__('facebook profile', 'online-generator' ),
                    'id'          => $prefix . 'facebook_profile',
                    'placeholder' => esc_html__( 'facebook profile', 'online-generator' ),
                    'size'        => "100%",
                    'class'       => 'custom-input-field',
                ],
                [
                    'type'        => 'url',
                    'name'        => esc_html__('linkedin profile', 'online-generator' ),
                    'id'          => $prefix . 'linkedin_profile',
                    'placeholder' => esc_html__( 'linkedin profile', 'online-generator' ),
                    'size'        => "100%",
                    'class'       => 'custom-input-field',
                ],
                [
                    'type'        => 'url',
                    'name'        => esc_html__('X profile', 'online-generator' ),
                    'id'          => $prefix . 'X_profile',
                    'placeholder' => esc_html__( 'X profile', 'online-generator' ),
                    'size'        => "100%",
                    'class'       => 'custom-input-field',
                ],
                [
                    'type'        => 'url',
                    'name'        => esc_html__('Instagran Profile', 'online-generator' ),
                    'id'          => $prefix . 'instagram_profile',
                    'placeholder' => esc_html__( 'Instagran Profile', 'online-generator' ),
                    'size'        => "100%",
                    'class'       => 'custom-input-field',
                ],
            ],
        ];
        return $meta_boxes;
    }
    add_filter('rwmb_meta_boxes', 'addc_information');
}

