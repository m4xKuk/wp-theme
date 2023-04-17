<?php
function my_acf_add_local_field_groups() {
    
    acf_add_local_field_group(array(
        'key' => 'group_1',
        'title' => 'Section 1',
        'fields' => array (
            array(
            	'key' => 'field_1_1',
            	'label' => 'Header',
            	'name' => 'header1',
                'type' => 'wysiwyg',
                'default_value'=>'<div class="container">
<h6 class="wow fadeInUp">Welcome to Lintense</h6>
<h1 class="wow fadeInUp" data-wow-delay=".2s">We are a leading web design agency providing creative solutions</h1>
<p class="big d-none d-sm-block wow fadeInUp" data-wow-delay=".4s">With over 20 years of experience on the digital market, we can offer what you are looking for, <br class="d-none d-lg-block" />from a landing page to a complex multipage website.</p>
<img class="wow fadeInUp alignnone wp-image-39 size-full" src="https://wp-theme1.loc/wp-content/uploads/2023/04/blur-landing-corporate-01.png" alt="" width="830" height="473" data-wow-delay=".6s" />

</div>',           
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                ),
            ),
        ),
        'menu_order' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_2',
        'title' => 'Section 2',
        'fields' => array (
            array(
            	'key' => 'field_2_1',
            	'label' => 'Header',
            	'name' => 'header2',
                'type' => 'wysiwyg',
                'default_value'=>'<h6>Why Choose Us</h6>
<h2>Industry innovators since 1999</h2>
<p class="big">Since the day of our establishment, we have been revolutionizing the industry of digital solutions and web design that resulted in over 150k successful projects.</p>
<a class="button button-secondary button-nuka" href="#">Learn More</a>'           
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                ),
            ),
        ),
        'menu_order' => 1,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_3',
        'title' => 'Section 3',
        'fields' => array (
            array(
            	'key' => 'field_3_1',
            	'label' => 'url',
            	'name' => 'Url',
                'type' => 'url',
                'default_value' => 'https://www.youtube.com/watch?v=I5FlP07kdvM',           
            ),
            array(
            	'key' => 'field_3_2',
            	'label' => 'Image',
            	'name' => 'img',
                'type' => 'image',
                'default_value' => 'https://wp-theme1.loc/wp-content/uploads/2023/04/landing-corporate-02.jpg',           
            ),
            array(
            	'key' => 'field_3_3',
            	'label' => 'Header',
            	'name' => 'header3_3',
                'type' => 'wysiwyg',
                'default_value'=>'<h6>About Us</h6>
          <h2>Award-winning web design studio</h2>
          <p class="big">Lintense is a small yet <a class="link-border" href="#">powerful web design</a> & development agency. Over the last few years we\'ve made a reputation for building websites that are:</p>
          <ul class="list-decorative big">
            <li>Highly responsive</li>
            <li>Always up-to-date</li>
            <li>Easy to customize</li>
          </ul>'           
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                ),
            ),
        ),
        'menu_order' => 2,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_4',
        'title' => 'Section 4',
        'fields' => array (
            array(
            	'key' => 'field_4_1',
            	'label' => 'Header',
            	'name' => 'header4_1',
                'type' => 'wysiwyg',
                'default_value' => '<h6>What We Offer</h6>
        <h2>Creative services that matter</h2>
        <p class="big">At Lintense, we aim to deliver the best creative solutions for your business.</p>',           
            ),
            array(
            	'key' => 'field_4_2',
            	'label' => 'Header',
            	'name' => 'header4_2',
                'type' => 'image',
                'default_value' => '',           
            ),
			array(
            	'key' => 'field_4_3',
            	'label' => 'Header',
            	'name' => 'header4_3',
                'type' => 'wysiwyg',
                'default_value' => '',           
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                ),
            ),
        ),
        'menu_order' => 3,
    ));
    
}

add_action('acf/init', 'my_acf_add_local_field_groups');