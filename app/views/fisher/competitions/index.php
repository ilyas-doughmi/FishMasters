<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétitions | FishMasters</title>
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
<body class="bg-slate-50 text-slate-900 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        
        <?php 
        $activePage = 'competitions';
        require_once 'app/views/fisher/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10 z-10">
                <h1 class="text-xl font-bold text-secondary">Calendrier des Compétitions</h1>
                <div class="flex items-center gap-3">
                    <span class="text-sm font-bold text-secondary hidden md:block">Ilyas Doughmi</span>
                    <img src="https://ui-avatars.com/api/?name=Ilyas&background=0284c7&color=fff" class="w-10 h-10 rounded-full border-2 border-white shadow-sm">
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <button class="px-6 py-2 bg-secondary text-white rounded-full font-bold shadow-lg shadow-secondary/20">Tout voir</button>
                    <button class="px-6 py-2 bg-white text-slate-600 hover:bg-slate-100 rounded-full font-bold border border-slate-200 transition-colors">🌊 Mer</button>
                    <button class="px-6 py-2 bg-white text-slate-600 hover:bg-slate-100 rounded-full font-bold border border-slate-200 transition-colors">🦆 Eau Douce</button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden flex flex-col h-full group hover:border-primary/50 transition-all">
                        <div class="h-40 bg-[url('https://images.unsplash.com/photo-1544551763-77ef2d0cfc6c?w=800')] bg-cover bg-center relative">
                            <div class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-sm">Inscriptions Ouvertes</div>
                            <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur text-secondary text-xs font-bold px-2 py-1 rounded-lg">
                                <i class="fa-solid fa-water text-primary mr-1"></i> Surfcasting
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="text-lg font-bold text-secondary mb-2">Grand Prix Atlantique 2026</h3>
                            <p class="text-slate-500 text-sm mb-4 line-clamp-2">Le plus grand tournoi de Surfcasting de la région de Safi. Plus de 10,000 DH de prix.</p>
                            
                            <div class="grid grid-cols-2 gap-y-2 text-sm text-slate-600 mb-6">
                                <div><i class="fa-regular fa-calendar mr-2 text-primary"></i> 24 Janv</div>
                                <div><i class="fa-solid fa-location-dot mr-2 text-primary"></i> Safi</div>
                                <div><i class="fa-solid fa-users mr-2 text-primary"></i> 45/100</div>
                            </div>

                            <div class="mt-auto flex gap-3">
                                <button onclick="openRulesModal()" class="flex-1 px-4 py-2 border border-slate-200 text-slate-600 font-bold rounded-xl hover:bg-slate-50 transition-colors">Règlement</button>
                                <button class="flex-1 px-4 py-2 bg-primary text-white font-bold rounded-xl hover:bg-sky-600 transition-colors shadow-lg shadow-primary/20">S'inscrire</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border-2 border-primary shadow-sm overflow-hidden flex flex-col h-full relative">
                        <div class="absolute top-0 right-0 bg-primary text-white text-xs font-bold px-3 py-1 rounded-bl-xl z-10">
                            <i class="fa-solid fa-check mr-1"></i> Inscrit
                        </div>
                        <div class="h-40 bg-[url('https://images.unsplash.com/photo-1498654200943-1088dd4438ae?w=800')] bg-cover bg-center relative">
                            <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur text-secondary text-xs font-bold px-2 py-1 rounded-lg">
                                <i class="fa-solid fa-leaf text-green-600 mr-1"></i> Eau Douce
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="text-lg font-bold text-secondary mb-2">Challenge Lac Bin El Ouidane</h3>
                            <p class="text-slate-500 text-sm mb-4">Pêche au carnassier en bateau. Équipes de 2.</p>
                            
                            <div class="mt-auto">
                                <button class="w-full px-4 py-2 bg-green-50 text-green-700 border border-green-200 font-bold rounded-xl flex items-center justify-center gap-2">
                                    <i class="fa-solid fa-check-circle"></i> Inscription validée
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <div id="rulesModal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-slate-900/50 backdrop-blur-sm" onclick="closeRulesModal()"></div>
        <div class="relative flex items-center justify-center h-full p-4">
            <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl p-8 transform transition-all scale-100">
                <div class="flex justify-between items-center mb-6 border-b border-slate-100 pb-4">
                    <h3 class="text-xl font-bold text-secondary">Règlement Officiel 📜</h3>
                    <button onclick="closeRulesModal()" class="text-slate-400 hover:text-red-500"><i class="fa-solid fa-xmark text-xl"></i></button>
                </div>
                <div class="space-y-4 text-sm text-slate-600 max-h-96 overflow-y-auto pr-2">
                    <p><strong>1. Espèces comptabilisées :</strong> Seuls les bars, sars et dorades sont acceptés pour cette manche.</p>
                    <p><strong>2. Tailles minimales :</strong> <br>- Bar : 42cm<br>- Dorade : 23cm<br>- Sar : 18cm</p>
                    <p><strong>3. Scoring :</strong> 1 point par gramme. Bonus de 500 points pour tout poisson relâché vivant (Catch & Release vidéo obligatoire).</p>
                    <p class="bg-red-50 p-3 rounded-lg border border-red-100 text-red-600">⚠ Toute triche entraînera une disqualification immédiate et un bannissement de la saison.</p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex justify-end">
                    <button onclick="closeRulesModal()" class="px-6 py-2 bg-slate-100 hover:bg-slate-200 text-secondary font-bold rounded-xl transition-colors">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openRulesModal() { document.getElementById('rulesModal').classList.remove('hidden'); }
        function closeRulesModal() { document.getElementById('rulesModal').classList.add('hidden'); }
    </script>
</body>
</html> 