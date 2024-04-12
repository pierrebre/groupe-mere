<?php

class Job
{
    public static function register()
    {
        $labels = [
            'name' => 'Jobs',
            'singular_name' => 'Job',
            'menu_name' => 'Jobs',
            'name_admin_bar' => 'Jobs',
            'add_new' => 'Ajouter',
            'add_new_item' => 'Ajouter un job',
            'new_item' => 'Nouveau job',
            'edit_item' => 'Modifier le job',
            'view_item' => 'Voir le job',
            'all_items' => 'Tous les jobs',
            'search_items' => 'Rechercher un job',
            'parent_item_colon' => 'Job parent',
            'not_found' => 'Aucun job trouvé',
            'not_found_in_trash' => 'Aucun job trouvé dans la corbeille'
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => false,
            'query_var' => true,
            'rewrite' => ['slug' => 'job'],
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => ['title', 'editor', 'thumbnail'],
            'menu_icon' => 'dashicons-businessman'
        ];

        register_post_type('job', $args);
    }

    public static function init()
    {
        add_action('init', [self::class, 'register']);
    }
}
