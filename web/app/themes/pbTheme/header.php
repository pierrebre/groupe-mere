<?php

use pbTheme\walker\MenuWalker;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="h-screen flex flex-col">
    <header>
        <nav class="bg-white shadow z-10">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Ouvrir le menu</span>
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex flex-shrink-0 items-center">
                            <?php
                            $image_attributes = wp_get_attachment_image_src(6, '');
                            ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                                <img class="block h-12 w-auto lg:hidden" src="<?php echo esc_url($image_attributes[0]); ?>" alt="logo groupe méré">
                                <img class="hidden h-12 w-auto lg:block" src="<?php echo esc_url($image_attributes[0]); ?>" alt="logo groupe méré">
                            </a>
                        </div>
                        <?php
                        wp_nav_menu([
                            'items_wrap' => '%3$s',
                            'container' => 'div',
                            'container_class' => 'hidden sm:ml-6 sm:flex sm:space-x-8',
                            'depth' => 1,
                            'walker' => new MenuWalker(),
                        ]);
                        ?>
                    </div>

                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
                <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
                <?php
                wp_nav_menu([
                    'items_wrap' => '%3$s',
                    'container' => 'div',
                    'container_class' => 'space-y-1 pb-4 pt-2',
                    'depth' => 1,
                    'walker' => new MenuWalker(),
                ]);
                ?>
            </div>
        </nav>
    </header>
    <div class="mx-auto max-w-screen-xl  px-4 sm:px-6 lg:px-8">