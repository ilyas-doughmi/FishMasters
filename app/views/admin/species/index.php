<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espèces de Poissons | FishAdmin</title>
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
        $activePage = 'species';
        require_once 'app/views/admin/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Gestion des Espèces</h1>
                <button class="bg-accent hover:bg-sky-600 text-white px-4 py-2 rounded-xl font-bold text-sm transition-all flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Ajouter une espèce
                </button>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider font-bold">
                            <tr>
                                <th class="px-6 py-4">Icône / Image</th>
                                <th class="px-6 py-4">Nom de l'espèce</th>
                                <th class="px-6 py-4">Taille Min. (cm)</th>
                                <th class="px-6 py-4">Coefficient</th>
                                <th class="px-6 py-4">Statut</th>
                                <th class="px-6 py-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="w-10 h-10 bg-blue-50 text-accent rounded-lg flex items-center justify-center font-bold">
                                        LO
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="font-bold text-slate-700">Loup (Bar)</p>
                                    <p class="text-[10px] text-slate-400">Dicentrarchus labrax</p>
                                </td>
                                <td class="px-6 py-4 font-bold text-slate-800">36 cm</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-slate-100 rounded-md text-xs font-bold text-slate-600">x 1.2</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold uppercase tracking-wider">Actif</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-accent hover:bg-blue-50 rounded-lg transition-all"><i class="fa-solid fa-pen"></i></button>
                                        <button class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all"><i class="fa-solid fa-eye-slash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="w-10 h-10 bg-orange-50 text-orange-500 rounded-lg flex items-center justify-center font-bold">
                                        DA
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="font-bold text-slate-700">Daurade Royale</p>
                                    <p class="text-[10px] text-slate-400">Sparus aurata</p>
                                </td>
                                <td class="px-6 py-4 font-bold text-slate-800">23 cm</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-slate-100 rounded-md text-xs font-bold text-slate-600">x 1.0</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold uppercase tracking-wider">Actif</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-accent hover:bg-blue-50 rounded-lg transition-all"><i class="fa-solid fa-pen"></i></button>
                                        <button class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all"><i class="fa-solid fa-eye-slash"></i></button>
                                    </div>
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
