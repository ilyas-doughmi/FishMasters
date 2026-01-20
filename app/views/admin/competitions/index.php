<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Compétitions | FishAdmin</title>
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
        $activePage = 'competitions';
        require_once 'app/views/admin/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Compétitions</h1>
                <a href="/fishmasters/admin/competitions_add" class="bg-accent hover:bg-sky-600 text-white px-4 py-2 rounded-xl font-bold text-sm transition-all flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Créer
                </a>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                        <div class="relative w-72">
                            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" placeholder="Rechercher..." class="w-full pl-11 pr-4 py-2 rounded-xl border border-slate-200 focus:border-accent outline-none text-sm transition-all">
                        </div>
                        <div class="flex gap-2">
                            <button class="px-4 py-2 text-sm font-bold text-slate-600 hover:bg-slate-50 rounded-lg border border-slate-200">Filtres</button>
                            <button class="px-4 py-2 text-sm font-bold text-slate-600 hover:bg-slate-50 rounded-lg border border-slate-200">Exporter</button>
                        </div>
                    </div>

                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider font-bold">
                            <tr>
                                <th class="px-6 py-4">Nom de la compétition</th>
                                <th class="px-6 py-4">Lieu</th>
                                <th class="px-6 py-4">Dates</th>
                                <th class="px-6 py-4">Participants</th>
                                <th class="px-6 py-4">Statut</th>
                                <th class="px-6 py-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-bold text-slate-700">Marathon Agadir 2026</td>
                                <td class="px-6 py-4 text-slate-500">Agadir, Plage</td>
                                <td class="px-6 py-4 text-slate-500 text-xs">24/01 - 26/01</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-1">
                                        <span class="font-bold">45</span>
                                        <span class="text-slate-400 text-xs">/ 100</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold uppercase tracking-wider">Actif</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-accent hover:bg-blue-50 rounded-lg transition-all"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-bold text-slate-700">Trophée du Nord</td>
                                <td class="px-6 py-4 text-slate-500">Tanger</td>
                                <td class="px-6 py-4 text-slate-500 text-xs">12/02 - 14/02</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-1">
                                        <span class="font-bold">0</span>
                                        <span class="text-slate-400 text-xs">/ 50</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-slate-100 text-slate-500 rounded-full text-[10px] font-bold uppercase tracking-wider">Brouillon</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-accent hover:bg-blue-50 rounded-lg transition-all"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="p-6 border-t border-slate-100 flex items-center justify-between text-sm text-slate-500">
                        <span>Affichage de 1 à 10 sur 24 compétitions</span>
                        <div class="flex gap-1">
                            <button class="w-8 h-8 bg-slate-50 text-slate-900 border border-slate-200 rounded-lg flex items-center justify-center font-bold">1</button>
                            <button class="w-8 h-8 hover:bg-slate-50 border border-transparent rounded-lg flex items-center justify-center transition-all">2</button>
                            <button class="w-8 h-8 hover:bg-slate-50 border border-transparent rounded-lg flex items-center justify-center transition-all">3</button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
