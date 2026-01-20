<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Classement Championnat | FishAdmin</title>
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
        $activePage = 'rankings';
        require_once 'app/views/admin/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800 italic underline decoration-accent">Classement Général National</h1>
                <div class="flex gap-2">
                    <button class="px-4 py-2 bg-slate-50 text-slate-600 rounded-xl font-bold text-xs border border-slate-200">Saison 2026</button>
                    <button class="px-4 py-2 bg-accent text-white rounded-xl font-bold text-xs shadow-lg shadow-accent/20">Publier Officiellement</button>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden italic">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider font-bold">
                            <tr>
                                <th class="px-6 py-4">Rang</th>
                                <th class="px-6 py-4">Pêcheur / Club</th>
                                <th class="px-6 py-4">Compétitions Disputées</th>
                                <th class="px-6 py-4">Meilleur Performance</th>
                                <th class="px-6 py-4">Points Cumulés</th>
                                <th class="px-6 py-4">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-blue-50/30 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="w-8 h-8 rounded-full bg-yellow-400 text-white flex items-center justify-center font-bold shadow-md shadow-yellow-400/20">1</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full border-2 border-white shadow-sm overflow-hidden">
                                            <img src="https://ui-avatars.com/api/?name=Samir+O&background=0284c7&color=fff" alt="">
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-800">Samir Ouali</p>
                                            <p class="text-[10px] text-slate-400">Club Royal Safi</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-bold text-slate-700">14 / 15</td>
                                <td class="px-6 py-4">
                                    <span class="text-xs font-medium text-slate-500">1er (Agadir Classic)</span>
                                </td>
                                <td class="px-6 py-4 font-black text-accent text-lg italic">142,500 <span class="text-[10px] font-normal text-slate-400 uppercase">pts</span></td>
                                <td class="px-6 py-4">
                                    <span class="w-3 h-3 bg-green-500 rounded-full inline-block border-2 border-white shadow-sm"></span>
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
