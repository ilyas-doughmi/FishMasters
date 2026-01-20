<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription | FishMasters</title>
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
        
        <div class="w-full lg:w-1/2 flex flex-col justify-center px-8 md:px-20 lg:px-24 bg-white z-10 overflow-y-auto py-12">
            <div class="mb-10 flex items-center gap-2">
                <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center text-white">
                    <i class="fa-solid fa-fish-fins text-sm"></i>
                </div>
                <span class="font-bold text-xl text-secondary">FishMasters</span>
            </div>

            <div class="mb-8">
                <h1 class="text-3xl font-bold text-secondary mb-2">Créer un compte ✨</h1>
                <p class="text-slate-500">Rejoignez la plus grande communauté de pêcheurs.</p>
            </div>

            <form action="/fishmasters/auth/create" method="POST" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Nom complet</label>
                        <input type="text" name="full_name" required placeholder="Ilyas Doughmi" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all placeholder:text-slate-400">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Rôle</label>
                        <select name="userRole" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                            <option value="fisher">Pêcheur</option>
                            <option value="fan">Fan</option>
                            <option value="organizer">Organisateur</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Email</label>
                    <input type="email" name="email" required placeholder="votre@email.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all placeholder:text-slate-400">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Mot de passe</label>
                        <input type="password" name="password" required placeholder="••••••••" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all placeholder:text-slate-400">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Confirmer</label>
                        <input type="password" name="password_confirm" required placeholder="••••••••" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all placeholder:text-slate-400">
                    </div>
                </div>

                <!-- Default values for simplified registration -->
                <input type="hidden" name="photo" value="default.jpg">
                <input type="hidden" name="club" value="Indépendant">
                <input type="hidden" name="region" value="Maroc">
                <input type="hidden" name="favouritPeche" value="Général">

                <div class="pt-2">
                    <label class="flex items-start gap-3 cursor-pointer group">
                        <input type="checkbox" required class="mt-1 w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary">
                        <span class="text-sm text-slate-600">J'accepte les <a href="#" class="text-primary font-semibold hover:underline">Conditions d'utilisation</a> et la <a href="#" class="text-primary font-semibold hover:underline">Politique de confidentialité</a>.</span>
                    </label>
                </div>

                <button type="submit" class="w-full bg-primary hover:bg-sky-600 text-white font-bold py-3.5 rounded-xl transition-all shadow-lg shadow-primary/20 hover:shadow-primary/30 transform hover:-translate-y-0.5 mt-4">
                    Créer mon compte
                </button>
            </form>

            <div class="mt-8 text-center text-sm text-slate-500">
                Déjà membre ? 
                <a href="/fishmasters/auth/login" class="font-bold text-primary hover:underline">Se connecter ici</a>
            </div>
        </div>

        <div class="hidden lg:block w-1/2 relative bg-slate-50">
            <img src="https://images.unsplash.com/photo-1544551763-8dd44758c2dd?q=80&w=2070&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent flex flex-col justify-end p-20 text-white">
                <blockquote class="text-2xl font-medium leading-relaxed mb-4">
                    "Rejoignez des milliers de passionnés et accédez aux meilleures zones de pêche surveillées et aux compétitions exclusives."
                </blockquote>
                <div class="flex items-center gap-4">
                    <div class="flex -space-x-3">
                        <img src="https://i.pravatar.cc/100?img=1" class="w-10 h-10 rounded-full border-2 border-white">
                        <img src="https://i.pravatar.cc/100?img=2" class="w-10 h-10 rounded-full border-2 border-white">
                        <img src="https://i.pravatar.cc/100?img=3" class="w-10 h-10 rounded-full border-2 border-white">
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-primary flex items-center justify-center text-[10px] font-bold">+2k</div>
                    </div>
                    <p class="text-sm border-l border-white/30 pl-4 py-1">Rejoint par +2,000 pêcheurs ce mois-ci</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
