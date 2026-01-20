<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | FishMasters</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                extend: { colors: { primary: '#0284c7', secondary: '#0f172a' } }
            }
        }
    </script>
</head>
<body class="bg-white text-slate-900 h-screen overflow-hidden">

    <div class="flex h-full w-full">
        
        <div class="w-full lg:w-1/2 flex flex-col justify-center px-8 md:px-20 lg:px-24 bg-white z-10">
            <div class="mb-10 flex items-center gap-2">
                <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center text-white">
                    <i class="fa-solid fa-fish-fins text-sm"></i>
                </div>
                <span class="font-bold text-xl text-secondary">FishMasters</span>
            </div>

            <div class="mb-8">
                <h1 class="text-3xl font-bold text-secondary mb-2">Bon retour 👋</h1>
                <p class="text-slate-500">Entrez vos coordonnées pour accéder à votre espace.</p>
            </div>

            <form action="#" class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Email</label>
                    <input type="email" placeholder="exemple@email.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all placeholder:text-slate-400">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Mot de passe</label>
                    <input type="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all placeholder:text-slate-400">
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary">
                        <span class="text-sm text-slate-600">Se souvenir de moi</span>
                    </label>
                    <a href="#" class="text-sm font-semibold text-primary hover:underline">Mot de passe oublié ?</a>
                </div>

                <button class="w-full bg-secondary hover:bg-slate-800 text-white font-bold py-3.5 rounded-xl transition-all shadow-lg shadow-slate-900/10 hover:shadow-slate-900/20 transform hover:-translate-y-0.5">
                    Se connecter
                </button>
            </form>

            <div class="mt-8 text-center text-sm text-slate-500">
                Pas encore de compte ? 
                <a href="/fishmasters/auth/register" class="font-bold text-primary hover:underline">S'inscrire gratuitement</a>
            </div>
        </div>

        <div class="hidden lg:block w-1/2 relative bg-slate-50">
            <img src="https://images.unsplash.com/photo-1518049071060-b6a32865d1d6?q=80&w=2070&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent flex flex-col justify-end p-20 text-white">
                <blockquote class="text-2xl font-medium leading-relaxed mb-4">
                    "Grâce à FishMasters, notre club a pu organiser le plus grand tournoi de la région avec une facilité déconcertante."
                </blockquote>
                <div class="flex items-center gap-4">
                    <img src="https://i.pravatar.cc/100?img=11" class="w-12 h-12 rounded-full border-2 border-white/30">
                    <div>
                        <p class="font-bold">Karim Benjelloun</p>
                        <p class="text-sm text-white/80">Président Club Atlas</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
