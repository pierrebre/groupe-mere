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
$marques_arr = array_reduce($marques, function ($acc, $marque) {
    $acc[$marque->ID] = $marque->post_title;
    return $acc;
}, []);

function format_price($int)
{
    $fmt = new NumberFormatter('fr_FR', NumberFormatter::CURRENCY);

    $price = $fmt->formatCurrency($int, 'EUR');
    $price_without_decimals = str_replace(',00', '', $price);

    return $price_without_decimals;
}
function time_elapsed_string($datetime, $full = false)
{
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'année',
        'm' => 'mois',
        'w' => 'semaine',
        'd' => 'jour',
        'h' => 'heure',
        'i' => 'minute',
        's' => 'seconde',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 && $v != 'mois' ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full)
        $string = array_slice($string, 0, 1);

    return $string ? 'Il y a ' . implode(', ', $string) : 'À l\'instant';
}

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

function find_marque($marque_id)
{
    global $marques_arr;

    return $marques_arr[$marque_id];
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
            <?php while ($query->have_posts()):
                $query->the_post();
                $job_contract_type = get_post_meta(get_the_ID(), '_job_contract_type', true);
                $job_location = get_post_meta(get_the_ID(), '_job_location', true);
                $job_salary = get_post_meta(get_the_ID(), '_job_salary', true);
                $job_marque = get_post_meta(get_the_ID(), '_job_marque', true);
                $job_sector = get_post_meta(get_the_ID(), '_job_sector', true);
                ?>

                <a href="<?php the_permalink() ?>"
                    class="flex w-full flex-col bg-white rounded-lg shadow border border-gray-200 px-8 py-4 gap-2">
                    <p class="text-xl">
                        <?php the_title(); ?>
                    </p>
                    <div class="flex flex-row flex-wrap gap-2">
                        <div class="flex flex-row items-center bg-gray-100 rounded px-2 py-1 w-fit">
                            <span class="dashicons dashicons-media-document text-sm"></span>
                            <p class="uppercase text-xs">
                                <?php
                                echo $job_contract_type;
                                ?>
                            </p>
                        </div>
                        <div class="flex flex-row items-center bg-gray-100 rounded px-2 py-1 w-fit">
                            <span class="dashicons dashicons-money-alt text-sm"></span>
                            <p class="text-xs">
                                <?php
                                echo format_price($job_salary);
                                ?>
                            </p>
                        </div>
                        <div class="flex flex-row items-center bg-gray-100 rounded px-2 py-1 w-fit">
                            <span class="dashicons dashicons-building text-sm"></span>
                            <p class="text-xs">
                                <?php
                                echo find_marque($job_marque);
                                ?>
                            </p>
                        </div>
                        <div class="flex flex-row items-center bg-gray-100 rounded px-2 py-1 w-fit">
                            <span class="dashicons dashicons-location text-sm"></span>
                            <p class="text-xs">
                                <?php
                                echo $job_location;
                                ?>
                            </p>
                        </div>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">
                        <?php echo time_elapsed_string($query->post->post_date); ?>
                    </p>
                </a>
            <?php endwhile; ?>
        </div>
    </div>

    <script>
        const type = document.getElementById('type');
        const secteur = document.getElementById('secteur');
        const salaire_min = document.getElementById('salaire_min');
        const salaire_max = document.getElementById('salaire_max');
        const job_location = document.getElementById('location');
        const marque = document.getElementById('marque');

        const marque_filter = document.getElementById('btn-filter')

        marque_filter.addEventListener('click', function () {
            let query = '?';
            let query_arr = [];

            const marque_value = marque.value.trim();
            if (marque_value)
                query_arr.push(`marque_id=${marque_value}`);

            const salaire_min_value = salaire_min.value.trim();
            if (salaire_min_value)
                query_arr.push(`salaire_min=${salaire_min_value}`);

            const salaire_max_value = salaire_max.value.trim();
            if (salaire_max_value)
                query_arr.push(`salaire_max=${salaire_max_value}`);

            const location_value = job_location.value.trim();
            if (location_value)
                query_arr.push(`location=${location_value}`);

            const type_value = type.value.trim();
            if (type_value)
                query_arr.push(`type=${type_value}`);

            const secteur_value = secteur.value.trim();
            if (secteur_value)
                query_arr.push(`secteur=${secteur_value}`);

            if (query_arr.length > 0) {
                query = `${query}&${query_arr.join('&')}`;
                window.location.href = `/nos-offres${query}`;
            }
            else {
                window.location.href = `/nos-offres`;
            }
        });

    </script>
</section>
<?php get_footer(); ?>