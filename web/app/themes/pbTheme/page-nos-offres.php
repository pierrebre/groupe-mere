<?php

$contract_types = [
    '' => 'Tous',
    'CDI' => 'CDI',
    'CDD' => 'CDD',
    'stage' => 'Stage',
    'freelance' => 'Freelance',
    'alternance' => 'Alternance',
    'interim' => 'Interim',
];

$business_lines = [
    '' => 'Tous',
    'informatique' => 'Informatique',
    'marketing' => 'Marketing',
    'communication' => 'Communication',
    'finance' => 'Finance',
    'comptabilite' => 'Comptabilité',
    'juridique' => 'Juridique',
    'ressources-humaines' => 'Ressources Humaines',
    'achat' => 'Achat',
    'logistique' => 'Logistique',
    'qualité' => 'Qualité',
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
];

$marques = get_posts(['post_type' => 'marque']);


function get_offers()
{
    $meta_query = [];

    if (isset($_GET['type'])) {
        array_push(
            $meta_query,
            [
                'key' => 'job_contract_type',
                'value' => $_GET['type'],
                'compare' => '=',
            ]
        );
    }
    if (isset($_GET['location'])) {
        array_push(
            $meta_query,
            [
                'key' => 'job_location',
                'value' => $_GET['location'],
                'compare' => '=',
            ]
        );
    }
    if (isset($_GET['salaire_min'])) {
        array_push(
            $meta_query,
            [
                'key' => 'job_salary',
                'value' => $_GET['salaire_min'],
                'compare' => '>=',
            ]
        );
    }
    if (isset($_GET['salaire_max'])) {
        array_push(
            $meta_query,
            [
                'key' => 'job_salary',
                'value' => $_GET['salaire_max'],
                'compare' => '<=',
            ]
        );
    }
    if (isset($_GET['marque_id'])) {
        array_push(
            $meta_query,
            [
                'key' => 'job_marque',
                'value' => $_GET['marque_id'],
                'compare' => '=',
            ]
        );
    }

    return new WP_Query([
        'post_type' => 'job',
        'meta_query' => $meta_query,
    ]);
}

$query = get_offers();


get_header();
?>

<section class="w-full py-16">
    <h1 class=" text-6xl font-bold text-center mb-8">Nos offres</h1>
    <div class="flex flex-col md:flex-row gap-4">
        <div
            class="flex flex-col gap-2 md:border md:border-gray-200 md:shadow md:rounded-md py-4 md:p-4 h-fit md:sticky md:top-12">

            <div class="flex flex-col gap-1">
                <label for="marque">Marque</label>
                <select class="w-full border border-gray-300 rounded-md p-1 h-[34px]" id="marque">
                    <option value="">Tous</option>
                    <?php
                    foreach ($marques as $marque) {
                        echo '<option value="' . $marque->ID . '"' . selected($marque->ID, $_GET['marque_id'], false) . '>' . $marque->post_title . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="type">Type</label>
                <select class="w-full border border-gray-300 rounded-md p-1 h-[34px]" id="type">
                    <?php foreach ($contract_types as $key => $value): ?>
                        <option value="<?= $key ?>" <?php selected($key, $_GET['type'] ?? ''); ?>><?= $value ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="type">Secteur d'activité</label>
                <select class="w-full border border-gray-300 rounded-md p-1 h-[34px]" id="secteur">
                    <?php foreach ($business_lines as $key => $value): ?>
                        <option value="<?= $key ?>" <?php selected($key, $_GET['secteur'] ?? ''); ?>><?= $value ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="salaire_min">Salaire min</label>
                <input type="number" class="w-full border border-gray-300 rounded-md p-1" id="salaire_min"
                    placeholder="0" value="<?php echo $_GET['salaire_min'] ?? ''; ?>" />
            </div>
            <div class="flex flex-col gap-1">
                <label for="salaire_max">Salaire max</label>
                <input type="number" class="w-full border border-gray-300 rounded-md p-1" id="salaire_max"
                    placeholder="100000" value="<?php echo $_GET['salaire_max'] ?? ''; ?>" />
            </div>
            <div class="flex flex-col gap-1">
                <label for="location">Lieu</label>
                <input type="text" class="w-full border border-gray-300 rounded-md p-1" id="location" placeholder="Tous"
                    value="<?php echo $_GET['location'] ?? ''; ?>" />
            </div>


            <div class="flex flex-row items-center gap-4">
                <button id="btn-filter" class="bg-gray-900 text-white font-bold py-2 px-4 rounded-md w-full">
                    Filtrer
                </button>
                <a href="/nos-offres" class="text-gray-800 hover:text-gray-900 underline text-center w-full">
                    Réinitialiser
                </a>
            </div>

        </div>

        <div class="flex flex-col gap-4 w-full">
            <?php
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();

                    get_template_part('partials/job-card', null, array('query' => $query));
                    ?>
                <?php endwhile;
            else:
                ?>
                <div class="flex flex-col pt-8 min-w-96 w-full">
                    <div class="flex flex-col items-center justify-center gap-4">
                        <p class="text-center text-gray-500">
                            Aucune n'a été trouvée
                        </p>
                    </div>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>