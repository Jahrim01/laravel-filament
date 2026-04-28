<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion Produits SaaS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-white to-gray-400">

<!-- NAVBAR -->
<header class="w-full px-6 py-4 flex justify-between items-center max-w-7xl mx-auto">
    <a href="/" class="flex items-center">
        <img src="{{ asset('images/LOGO-alliance-externe-2.png') }}"
            alt="Logo"
            class="h-15 w-auto object-contain">
    </a>

    <a href="/admin"
       class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">
        Connexion
    </a>
</header>

<!-- HERO -->
<section class="text-center py-20 px-6 max-w-4xl mx-auto">
    <h2 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
        Gérez vos produits<br> simplement et efficacement
    </h2>

    <p class="text-lg text-gray-600 mb-8">
        Une plateforme rapide pour créer, modifier et organiser votre catalogue produit
        avec gestion des rôles et permissions intégrée.
    </p>

    <div class="flex justify-center gap-4">
        <a href="/admin"
           class="px-6 py-3 bg-black text-white rounded-xl shadow hover:bg-gray-800 transition">
            Accéder au dashboard
        </a>

        <a href="#features"
           class="px-6 py-3 border border-gray-300 rounded-xl hover:bg-gray-100 transition">
            Découvrir
        </a>
    </div>
</section>

<!-- FEATURES -->
<section id="features" class="py-20 bg-gray-300">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-8">

        <div class="bg-gradient-to-br from-white to-gray-200 p-6 rounded-2xl shadow-sm">
            <h3 class="font-semibold text-lg mb-2">CRUD rapide</h3>
            <p class="text-gray-600">
                Créez et gérez vos produits en quelques clics avec une interface claire.
            </p>
        </div>

        <div class="bg-gradient-to-br from-white to-gray-200 p-6 rounded-2xl shadow-sm">
            <h3 class="font-semibold text-lg mb-2">Gestion des rôles</h3>
            <p class="text-gray-600">
                Contrôlez précisément qui peut voir, modifier ou supprimer vos données.
            </p>
        </div>

        <div class="bg-gradient-to-br from-white to-gray-200 p-6 rounded-2xl shadow-sm">
            <h3 class="font-semibold text-lg mb-2">Upload d’images</h3>
            <p class="text-gray-600">
                Ajoutez facilement des photos produits avec prévisualisation.
            </p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="py-20 text-center px-6">
    <h3 class="text-3xl font-bold mb-4">
        Prêt à démarrer ?
    </h3>

    <p class="text-gray-600 mb-8">
        Accédez à votre espace d'administration et commencez à gérer vos produits.
    </p>

    <a href="/admin"
       class="px-8 py-4 bg-black text-white rounded-xl text-lg hover:bg-gray-800 transition">
        Accéder à l’admin
    </a>
</section>

<!-- FOOTER -->
<footer class="py-6 text-center text-gray-500 text-sm">
    © {{ date('Y') }} Mirija. Tous droits réservés.
</footer>

</body>
</html>