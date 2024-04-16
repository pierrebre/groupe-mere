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
                        $image_attributes = wp_get_attachment_image_src(6, '');
                        if ($image_attributes) {
                        ?>
                            <img src="<?php echo esc_url($image_attributes[0]); ?>" width="120" height="50" alt="logo website">
                        <?php
                        }
                        ?>
                    </a>
                </div>
                <div class="lg:flex flex-grow justify-center items-center">
                    <!-- Menu de navigation -->
                    <?php wp_nav_menu([
                        'menu' => 2,
                        'container' => 'ul',
                        'menu_class' => 'flex items-center gap-6 text-sm relative', // Ajoutez la classe relative pour le positionnement
                        'depth' => 2, // Augmentez la profondeur à 2
                    ]); ?>
                </div>
            </div>

        </nav>
    </header>
    <div class="mx-auto max-w-screen-xl  px-4 sm:px-6 lg:px-8">