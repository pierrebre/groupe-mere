<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="h-screen flex flex-col">
    <header>
        <nav class="bg-white border-b">
            <div class="flex items-center justify-between py-3 px-4 max-w-screen-xl mx-auto md:px-8">
                <div class="flex-shrink-0">
                    <a href="/">
                        <?php
                        $image_attributes = wp_get_attachment_image_src(6, 'full');
                        if ($image_attributes) {
                        ?>
                            <img src="<?php echo esc_url($image_attributes[0]); ?>" width="120" height="50" alt="logo website">
                        <?php
                        }
                        ?>
                    </a>
                </div>
                <div class="lg:hidden">
                    <!-- Bouton pour ouvrir la navigation sur les écrans mobiles -->
                    <button id="mobile-menu-btn" class="block text-gray-700 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex flex-grow justify-center items-center">
                    <!-- Menu de navigation -->
                    <?php wp_nav_menu([
                        'menu' => 2,
                        'container' => 'ul',
                        'menu_class' => 'flex items-center gap-6 text-sm',
                        'depth' => 1,
                    ]); ?>
                </div>
            </div>
            <!-- Menu déroulant pour les écrans mobiles -->
            <div id="mobile-menu" class="lg:hidden absolute bg-white z-20 w-full top-16 left-0 p-4 border-b hidden transition-all duration-300 ease-in-out">
                <?php wp_nav_menu([
                    'menu' => 2,
                    'container' => 'ul',
                    'menu_class' => 'flex items-center flex-col gap-3 text-sm',
                    'depth' => 1,
                ]); ?>
                <!-- Bouton de fermeture du menu mobile -->
                <button id="mobile-menu-close-btn" class="mt-4 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded transition-all duration-300 ease-in-out">
                    Fermer le menu
                </button>
            </div>
        </nav>
    </header>
    <div class="mx-auto max-w-screen-xl  px-4 sm:px-6 lg:px-8">