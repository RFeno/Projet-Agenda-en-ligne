<!doctype html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />
    
</head>
<body class=" bg-blue-500 min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0">
    <section id="formulaire" class="bg-blue-50 max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <h4 class="font-bold text-2xl">Connexion</h4>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="#">
                <div class="mb-4 pt-1 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Adresse email</label>
                    <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-500 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-4 pt-1 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Mot de passe</label>
                    <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-500 transition duration-500 px-3 pb-3">
                </div>
                <div class="flex justify-end">
                    <a href="#" class="text-sm text-blue-400 hover:text-purple-700 hover:underline mb-6">Vous avez oublié votre mot de passe ?</a>
                </div>
                <button class="bg-blue-200 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl" type="submit">Se connecter</button>
            </form>
        </section>
    </section>

    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">Vous n'avez pas encore de compte ?    <a href="inscription.php" class="font-bold hover:underline">S'incrire</a></p>
    </div>
</html>