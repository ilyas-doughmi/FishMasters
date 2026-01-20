<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Pêcheurs | FishAdmin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                extend: { colors: { primary: '#0f172a', accent: '#0284c7' } }
            }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-900 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        
        <?php 
        $activePage = 'fishers';
        require_once 'app/views/admin/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Communauté des Pêcheurs</h1>
                <div class="flex gap-2">
                    <button class="bg-slate-50 border border-slate-200 text-slate-600 px-4 py-2 rounded-xl font-bold text-sm transition-all flex items-center gap-2">
                        <i class="fa-solid fa-download"></i> Exporter
                    </button>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-slate-100 flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="relative w-full md:w-96">
                            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-bold"></i>
                            <input type="text" placeholder="Rechercher par nom, club ou région..." class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 focus:border-accent outline-none text-sm transition-all bg-slate-50/50">
                        </div>
                        <div class="flex gap-2 w-full md:w-auto">
                            <select class="flex-1 md:flex-none px-4 py-3 rounded-xl border border-slate-200 bg-white text-sm outline-none focus:border-accent">
                                <option>Toutes les régions</option>
                                <option>Souss-Massa</option>
                                <option>Casablanca-Settat</option>
                            </select>
                            <select class="flex-1 md:flex-none px-4 py-3 rounded-xl border border-slate-200 bg-white text-sm outline-none focus:border-accent">
                                <option>Statut de profil</option>
                                <option>Actif</option>
                                <option>Banni</option>
                            </select>
                        </div>
                    </div>

                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider font-bold">
                            <tr>
                                <th class="px-6 py-4">Pêcheur</th>
                                <th class="px-6 py-4">Région / Club</th>
                                <th class="px-6 py-4">Compétitions</th>
                                <th class="px-6 py-4">Prises</th>
                                <th class="px-6 py-4">Points Totaux</th>
                                <th class="px-6 py-4 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 italic">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-slate-100">
                                            <img src="https://ui-avatars.com/api/?name=Zaid+R&background=0284c7&color=fff" alt="">
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-800">Zaid Rahmani</p>
                                            <p class="text-[10px] text-slate-400 uppercase tracking-tighter">Membre depuis Jan 2026</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-500 font-medium">
                                    Agadir • Club Atlantic
                                </td>
                                <td class="px-6 py-4 font-bold text-slate-700">12</td>
                                <td class="px-6 py-4 font-bold text-slate-700">84</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <span class="text-sm font-bold text-accent">24,560</span>
                                        <i class="fa-solid fa-star text-yellow-400 text-[10px]"></i>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="/fishmasters/admin/fishers_show" class="px-3 py-1.5 bg-slate-50 hover:bg-slate-100 text-slate-600 rounded-lg text-xs font-bold transition-all border border-slate-200">Voir Profil</a>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-slate-100">
                                            <img src="https://ui-avatars.com/api/?name=Othman+L&background=0f172a&color=fff" alt="">
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-800">Othman Laroui</p>
                                            <p class="text-[10px] text-slate-400 uppercase tracking-tighter">Membre depuis Déc 2025</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-500 font-medium">
                                    Casablanca • Independence
                                </td>
                                <td class="px-6 py-4 font-bold text-slate-700">8</td>
                                <td class="px-6 py-4 font-bold text-slate-700">42</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <span class="text-sm font-bold text-accent">15,420</span>
                                        <i class="fa-solid fa-star text-yellow-400 text-[10px]"></i>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="px-3 py-1.5 bg-slate-50 hover:bg-slate-100 text-slate-600 rounded-lg text-xs font-bold transition-all border border-slate-200">Voir Profil</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>
</body>
</html>
