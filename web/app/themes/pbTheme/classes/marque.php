<?php


class Marque {

    public static function register()
    {
        $labels = [
            'name' => 'Marques',
            'singular_name' => 'Marque',
            'menu_name' => 'Marques',
            'name_admin_bar' => 'Marques',
            'add_new' => 'Ajouter',
            'add_new_item' => 'Ajouter une marque',
            'new_item' => 'Nouvelle marque',
            'edit_item' => 'Modifier la marque',
            'view_item' => 'Voir la marque',
            'all_items' => 'Toutes les marques',
            'search_items' => 'Rechercher une marque',
            'parent_item_colon' => 'Marque parente',
            'not_found' => 'Aucune marque trouvée',
            'not_found_in_trash' => 'Aucune marque trouvée dans la corbeille'
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'marque'],
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => ['title', 'editor', 'thumbnail'],
            'menu_icon' => 'dashicons-admin-customizer'
        ];

        register_post_type('marque', $args);
    }

    public static function init()
    {
        add_action('init', [self::class, 'register']);
    }

}