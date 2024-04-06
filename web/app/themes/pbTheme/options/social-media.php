<?php
add_action('customize_register', function (WP_Customize_Manager $manager) {
    $manager->add_section('social_media', [
        'title' => 'Réseaux sociaux',
        'priority' => 200,
    ]);

    // Facebook
    $manager->add_setting('facebook_link', [
        'default' => '',
    ]);

    $manager->add_control('facebook_link', [
        'label' => 'Lien Facebook',
        'section' => 'social_media',
        'type' => 'url',
    ]);

    $manager->add_setting('facebook_logo', [
        'default' => '',
    ]);

    $manager->add_control(new WP_Customize_Media_Control($manager, 'facebook_logo', [
        'label' => 'Logo Facebook',
        'section' => 'social_media',
        'mime_type' => 'image',
    ]));

    // Twitter
    $manager->add_setting('twitter_link', [
        'default' => '',
    ]);

    $manager->add_control('twitter_link', [
        'label' => 'Lien Twitter',
        'section' => 'social_media',
        'type' => 'url',
    ]);

    $manager->add_setting('twitter_logo', [
        'default' => '',
    ]);

    $manager->add_control(new WP_Customize_Media_Control($manager, 'twitter_logo', [
        'label' => 'Logo Twitter',
        'section' => 'social_media',
        'mime_type' => 'image',
    ]));

    // Instagram
    $manager->add_setting('instagram_link', [
        'default' => '',
    ]);

    $manager->add_control('instagram_link', [
        'label' => 'Lien Instagram',
        'section' => 'social_media',
        'type' => 'url',
    ]);

    $manager->add_setting('instagram_logo', [
        'default' => '',
    ]);

    $manager->add_control(new WP_Customize_Media_Control($manager, 'instagram_logo', [
        'label' => 'Logo Instagram',
        'section' => 'social_media',
        'mime_type' => 'image',
    ]));

    // LinkedIn
    $manager->add_setting('linkedin_link', [
        'default' => '',
    ]);

    $manager->add_control('linkedin_link', [
        'label' => 'Lien LinkedIn',
        'section' => 'social_media',
        'type' => 'url',
    ]);

    $manager->add_setting('linkedin_logo', [
        'default' => '',
    ]);

    $manager->add_control(new WP_Customize_Media_Control($manager, 'linkedin_logo', [
        'label' => 'Logo LinkedIn',
        'section' => 'social_media',
        'mime_type' => 'image',
    ]));
});
