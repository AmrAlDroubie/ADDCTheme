<?php 

// register strings
if(!function_exists('addc_register_strings')){
    function addc_register_strings() {
        // global
        pll_register_string('readmore', 'read more', 'ADDC');
        pll_register_string('More', 'More', 'ADDC');
        pll_register_string('Other articles', 'Other articles', 'ADDC');
        pll_register_string('Back to the articles page.', 'Back to the articles page.', 'ADDC');
        pll_register_string('Sorry,no articles to display at the moment.', 'Sorry,no articles to display at the moment.', 'ADDC');
        pll_register_string('Previous', 'Previous', 'ADDC');
        pll_register_string('Next', 'Next', 'ADDC');
        // navbar
        pll_register_string('Home', 'Home', 'navbar');
        pll_register_string('Our_interests', 'Our interests', 'navbar');
        pll_register_string('Our_Services', 'Our Services', 'navbar');
        pll_register_string('Articles_and_Reports', 'Articles and Reports', 'navbar');
        pll_register_string('About_us', 'About us', 'navbar');
        pll_register_string('language', 'ع', 'navbar');
        // homepage
        pll_register_string('header_title', 'header title', 'homepage');
        pll_register_string('header_paragraph', 'header paragraph', 'homepage');
        pll_register_string('Lets work together', 'Lets work together', 'homepage');
        pll_register_string('If you would like to obtain any of our products or services', 'If you would like to obtain any of our products or services', 'homepage');
        pll_register_string('Lets communicate', 'Lets communicate', 'homepage');
        pll_register_string('Latest articles and reports','Latest articles and reports','homepage');
        pll_register_string('Our Areas Of Interest','Our Areas Of Interest','homepage');
        
        // about us
        pll_register_string('About_Us_title', 'About Us title', 'aboutus page');
        pll_register_string('About_Us_desc', 'About Us description', 'aboutus page');
        pll_register_string('Specialist Consultant', 'Specialist Consultant', 'aboutus page');
        pll_register_string('Real estate study', 'Real estate study', 'aboutus page');
        pll_register_string('Value of the studied properties', 'Value of the studied properties', 'aboutus page');
        pll_register_string('Client', 'Client', 'aboutus page');
        pll_register_string('Our Clients','Our Clients','aboutus page');
        pll_register_string('Experts and Team','Experts and Team','aboutus page');
        pll_register_string('about_us_team_desc','about_us_team_desc','aboutus page');
        // our interests
        pll_register_string('Check out our featured publications in the field', 'Check out our featured publications in the field', 'our interests');
        pll_register_string('Lets connect', 'Lets connect', 'our interests');

        // our services
        pll_register_string('Our Services', 'Our Services', 'Our Services');
        pll_register_string('Some of our services in the field:', 'Some of our services in the field:', 'Our Services');
        
        
        // footer
        pll_register_string('Subscribe to the newsletter.', 'Subscribe to the newsletter.', 'footer');
        pll_register_string('Stay up to date on the latest news and offers', 'Stay up to date on the latest news and offers', 'footer');
        pll_register_string('Subscribe', 'Subscribe', 'footer');
        pll_register_string('Stay connected with us on social media', 'Stay connected with us on social media', 'footer');
        pll_register_string('All rights reserved by ADDC for Developmental
                    Consulting', 'All rights reserved by ADDC for Developmental
                    Consulting', 'footer');
        pll_register_string('Privacy Policy', 'Privacy Policy', 'footer');
        pll_register_string('Subscribe','Subscribe','footer');
        pll_register_string('Subscribe to the newsletter.','Subscribe to the newsletter.','footer');
        pll_register_string('Stay up to date on the latest news and offers','Stay up to date on the latest news and offers','footer');
        pll_register_string('Enter your email to subscribe to our email list','Enter your email to subscribe to our email list','footer');
        pll_register_string('email_succ','email succ','footer');
        pll_register_string('email_failed','email failed','footer');
        pll_register_string('ok','ok','footer');
    }
    add_action('init', 'addc_register_strings');
}
