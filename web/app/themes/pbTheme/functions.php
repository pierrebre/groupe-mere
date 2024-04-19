<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function pbTheme_setup()
{
    // Add featured image support
    add_theme_support('post-thumbnails');
    // Add title tag support
    add_theme_support('title-tag');
    // Add custom logo support
    add_theme_support('custom-logo');
    // Add custom header support
    add_theme_support('custom-header');
    // Add custom post thumbnail support
    add_theme_support('post-thumbnails');
    // Add theme support
    add_theme_support('menus');
    // Register menus
    register_nav_menu('header', 'Primary Menu');
    register_nav_menu('footer', 'Footer Menu');

    add_image_size('post-thumbnail', 350, 215, true);
    add_image_size('full', 225, 70, true);
}

function pbTheme_register_assets()
{
    // Register styles
    wp_register_style('pbTheme', get_template_directory_uri() . '/style.css', [], false, 'all');
    // Enqueue styles
    wp_enqueue_style('pbTheme');
}

function pbTheme_title_separator()
{
    return '|';
}

function pbTheme_navigation()
{
    $pages = paginate_links(['type' => 'array']);
    if ($pages === null) return;
    echo '<ol class="flex justify-center gap-1 text-xs font-medium my-3">';
    foreach ($pages as $page) {
        $class = 'block h-8 rounded border border-gray-100 bg-white w-20 text-center leading-8';
        // Ajoute la classe bg-gray-300 si c'est la page actuelle
        if (strpos($page, 'rounded border-blue-600 bg-blue-600 text-center leading-8 text-white') !== false) {
            $class .= ' bg-gray-300';
        }
        // Supprime les classes rtl
        $page = str_replace('rtl:rotate-180', '', $page);
        echo '<li class="">' . str_replace('page-numbers', $class, $page) . '</li>';
    }
    echo '</ol>';
}
function my_theme_enqueue_assets()
{
    wp_enqueue_style('navbar-styles', get_template_directory_uri() . '/assets/navbar/navbar.css');

    wp_enqueue_script('navbar-script', get_template_directory_uri() . '/assets/navbar/navbar.js', array(), '', true);
}

function custom_excerpt_length($length)
{
    return 20;
}

function enable_frontend_dashicons()
{
    wp_enqueue_style('dashicons');
}

function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}


add_action('after_setup_theme', 'crb_load');
add_filter('excerpt_length', 'custom_excerpt_length');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
add_action('after_setup_theme', 'pbTheme_setup');
add_action('wp_enqueue_scripts', 'pbTheme_register_assets');
add_filter('wp_title', 'pbTheme_title_separator');
add_action('wp_enqueue_scripts', 'enable_frontend_dashicons');




// Register custom post types
require_once('classes/marque.php');
require_once('classes/job.php');


$marque = new Marque();
$marque->init();

$job = new Job();
$job->init();




function crb_attach_job_meta()
{
    Container::make('post_meta', 'Détails de l\'offre')
        ->where('post_type', '=', 'job')
        ->add_fields([
            Field::make('select', 'job_marque', 'Marque')
                ->set_options(array_reduce(get_posts(['post_type' => 'marque']), function ($acc, $marque) {
                    $acc[$marque->ID] = $marque->post_title;
                    return $acc;
                }, []))
                ->set_help_text('Sélectionnez la marque associée à ce job')
                ->set_required(true),
            Field::make('text', 'job_salary', 'Salaire')
                ->set_attribute('type', 'number')
                ->set_required(false),
            Field::make('text', 'job_location', 'Lieux')
                ->set_required(false),
            Field::make('select', 'job_contract_type', 'Type de contrat')
                ->set_options([
                    'cdi' => 'CDI',
                    'cdd' => 'CDD',
                    'stage' => 'Stage',
                    'freelance' => 'Freelance',
                    'alternance' => 'Alternance',
                    'interim' => 'Intérim',
                ])
                ->set_required(true),
            Field::make('select', 'job_sector', 'Secteur d\'activité')
                ->set_options([
                    'informatique' => 'Informatique',
                    'marketing' => 'Marketing',
                    'communication' => 'Communication',
                    'finance' => 'Finance',
                    'comptabilite' => 'Comptabilité',
                    'juridique' => 'Juridique',
                    'ressources-humaines' => 'Ressources Humaines',
                    'achat' => 'Achat',
                    'logistique' => 'Logistique',
                    'qualite' => 'Qualité',
                    'production' => 'Production',
                    'maintenance' => 'Maintenance',
                    'recherche' => 'Recherche',
                    'developpement' => 'Développement',
                    'commercial' => 'Commercial',
                    'vente' => 'Vente',
                    'achat' => 'Achat',
                    'distribution' => 'Distribution',
                    'service-client' => 'Service Client',
                    'relation-client' => 'Relation Client',
                ])
        ]);


    Container::make('theme_options', 'Options du thème')
        ->add_fields([
            Field::make('complex', 'social_media', 'Réseaux sociaux')
                ->add_fields([
                    Field::make('text', 'name', 'Nom'),
                    Field::make('text', 'link', 'Lien'),
                    Field::make('text', 'logo', 'Logo')
                ])
        ]);
}

add_action('carbon_fields_register_fields', 'crb_attach_job_meta');
