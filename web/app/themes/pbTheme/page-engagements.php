<?php get_header(); ?>

</div>

<div class="text-center text-white py-20 mb-12 bg-gradient-to-r from-start-gradient to-end-gradient">
    <h1 class="text-5xl font-bold">Nos Engagements</h1>
</div>
<main>
    <div class="mx-auto w-full max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <!-- Introduction Section -->
        <section class="text-center mb-12">
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg">
                <h2 class="text-3xl font-bold mb-6">Chez le Groupe Méré, nous nous engageons à respecter des principes forts qui guident chacune de nos actions.</h2>
                <p class="text-lg text-gray-700">Notre objectif est de créer un environnement de travail sain et équitable tout en adoptant des pratiques responsables pour préserver notre planète. Découvrez comment nous intégrons ces valeurs à travers nos engagements envers nos employés et notre démarche responsable.</p>
            </div>
        </section>
        <!-- Employer Responsibility Section -->
    </div>
    <section class="mb-12 grid grid-cols-1 md:grid-cols-2 gap-8 bg-gray-100 py-12 px-6 rounded-lg ">
        <div>
            <h2 class="text-3xl font-bold mb-6">Notre Responsabilité Employeur</h2>
            <h3 class="text-2xl font-semibold mb-4">Nous croyons fermement que nos employés sont notre plus grande richesse.</h3>
            <p class="text-lg text-gray-700">Nous nous engageons à offrir un environnement de travail inclusif, sécurisé et stimulant. Nos politiques de ressources humaines sont conçues pour promouvoir l'égalité des chances, le développement professionnel et le bien-être de chaque membre de notre équipe.</p>
        </div>
        <div>
            <ul class="list-disc pl-5 space-y-4 text-lg text-gray-700">
                <li><strong>Environnement de Travail Inclusif :</strong> Promotion de la diversité et de l'inclusion.</li>
                <li><strong>Développement Professionnel :</strong> Programmes de formation continue et opportunités de carrière.</li>
                <li><strong>Bien-être des Employés :</strong> Initiatives pour un équilibre entre vie professionnelle et vie personnelle.</li>
            </ul>
            <a href="#" class="mt-6 inline-block hover:bg-picton-blue text-white py-3 px-6 rounded-lg shadow-lg bg-indigo-dye">En savoir plus sur Notre Responsabilité Employeur</a>
        </div>
    </section>
    <div class="mx-auto w-full max-w-screen-xl px-4 sm:px-6 lg:px-8">


        <!-- Responsible Initiatives Section -->
        <section class="mb-12 bg-white py-12 px-6 rounded-lg">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold">Nos Démarches Responsables</h2>
                <h3 class="text-2xl font-semibold text-gray-700">Le Groupe Méré s'engage à adopter des pratiques responsables et durables dans toutes ses activités.</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <p class="text-lg text-gray-700 mb-6">Nous mettons en place des initiatives écologiques, réduisons notre empreinte carbone et encourageons une consommation responsable. Chaque action que nous entreprenons est pensée pour minimiser notre impact sur l'environnement et contribuer positivement à la société.</p>
                    <ul class="list-disc pl-5 space-y-4 text-lg text-gray-700">
                        <li><strong>Initiatives Écologiques :</strong> Réduction des déchets, recyclage et utilisation de matériaux durables.</li>
                        <li><strong>Réduction de l'Empreinte Carbone :</strong> Optimisation des transports et des chaînes d'approvisionnement.</li>
                        <li><strong>Consommation Responsable :</strong> Sensibilisation et promotion de produits durables auprès de nos clients.</li>
                    </ul>
                </div>
                <div class="flex items-center justify-center">
                    <img src="<?= esc_url(wp_get_attachment_image_url(136, 'full')); ?>" alt="Image représentant nos démarches responsables" class="rounded-lg shadow-lg">
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="#" class="mt-6 inline-block hover:bg-picton-blue text-white py-3 px-6 rounded-lg shadow-lg bg-indigo-dye">En savoir plus sur Nos Démarches Responsables</a>
            </div>
        </section>
</main>

<?php get_footer(); ?>