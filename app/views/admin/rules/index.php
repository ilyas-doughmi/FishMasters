<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Règlements de Scoring | FishAdmin</title>
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
        $activePage = 'rules';
        require_once 'app/views/admin/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Règlements & Scoring</h1>
                <a href="/fishmasters/admin/rules_add" class="bg-accent hover:bg-sky-600 text-white px-4 py-2 rounded-xl font-bold text-sm transition-all flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Nouveau Règlement
                </a>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:border-accent/50 transition-all flex flex-col group">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 bg-blue-50 text-accent rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase">Standard Mer</span>
                        </div>
                        <h3 class="font-bold text-slate-800 mb-2">Scoring Poids - Atlantique</h3>
                        <p class="text-slate-500 text-sm mb-6 flex-1">Règlement standard basé sur le poids (1g = 1pt). Idéal pour les tournois de Surfcasting.</p>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-slate-400">Espèces comptées</span>
                                <span class="font-bold">12</span>
                            </div>
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-slate-400">Unités</span>
                                <span class="font-bold text-accent">Points / Grammes</span>
                            </div>
                        </div>

                        <div class="flex gap-2 border-t border-slate-50 pt-4">
                            <button class="flex-1 py-2 text-xs font-bold text-slate-600 hover:bg-slate-50 rounded-lg transition-all">Détails</button>
                            <button class="flex-1 py-2 text-xs font-bold text-accent hover:bg-blue-50 rounded-lg transition-all">Éditer</button>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:border-accent/50 transition-all flex flex-col group">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 bg-purple-50 text-purple-600 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-ruler-horizontal"></i>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase">Black Bass Special</span>
                        </div>
                        <h3 class="font-bold text-slate-800 mb-2">Scoring Taille - Eau Douce</h3>
                        <p class="text-slate-500 text-sm mb-6 flex-1">Règles basées sur la longueur (1cm = 1pt) avec un minimum de 30cm requis.</p>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-slate-400">Espèces comptées</span>
                                <span class="font-bold">1 (Black Bass)</span>
                            </div>
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-slate-400">Unités</span>
                                <span class="font-bold text-purple-600">Points / Centimètres</span>
                            </div>
                        </div>

                        <div class="flex gap-2 border-t border-slate-50 pt-4">
                            <button class="flex-1 py-2 text-xs font-bold text-slate-600 hover:bg-slate-50 rounded-lg transition-all">Détails</button>
                            <button class="flex-1 py-2 text-xs font-bold text-accent hover:bg-blue-50 rounded-lg transition-all">Éditer</button>
                        </div>
                    </div>

                </div>

            </main>
        </div>
    </div>
</body>
</html>
