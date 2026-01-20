<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Validation des Prises | FishAdmin</title>
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
        $activePage = 'catches';
        require_once 'app/views/admin/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold text-slate-800">Prises en attente</h1>
                    <span class="bg-accent text-white text-[10px] px-2 py-0.5 rounded-full font-bold">12</span>
                </div>
                <div class="flex items-center gap-4">
                    <select class="text-sm bg-slate-50 border-slate-200 rounded-xl px-3 py-1.5 focus:ring-accent outline-none">
                        <option>Toutes les compétitions</option>
                        <option>Marathon Agadir</option>
                    </select>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                    
                    <!-- Catch Card -->
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden group hover:border-accent transition-all">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1544551763-77ef2d0cfc6c?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-4 left-4">
                                <span class="px-2 py-1 bg-white/90 backdrop-blur rounded-lg text-[10px] font-bold text-slate-800 uppercase shadow-sm">Marathon Agadir</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://ui-avatars.com/api/?name=Hassan+M&background=random" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="text-xs font-bold text-slate-800">Hassan Mansouri</p>
                                    <p class="text-[10px] text-slate-400">Pêcheur • Il y a 14 min</p>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-slate-50 p-3 rounded-xl border border-slate-100">
                                    <p class="text-[10px] text-slate-400 uppercase font-bold mb-1">Espèce</p>
                                    <p class="text-sm font-bold text-slate-800">Bar (Loup)</p>
                                </div>
                                <div class="bg-slate-50 p-3 rounded-xl border border-slate-100">
                                    <p class="text-[10px] text-slate-400 uppercase font-bold mb-1">Poids</p>
                                    <p class="text-sm font-bold text-slate-800">1.850 kg</p>
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <button class="flex-1 py-3 bg-red-50 text-red-600 rounded-xl text-xs font-bold hover:bg-red-100 transition-all uppercase tracking-wider">Refuser</button>
                                <button class="flex-1 py-3 bg-accent text-white rounded-xl text-xs font-bold hover:bg-sky-600 transition-all uppercase tracking-wider shadow-lg shadow-accent/20">Valider</button>
                            </div>
                        </div>
                    </div>

                    <!-- Catch Card 2 -->
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden group hover:border-accent transition-all">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1544551763-8dd44758c2dd?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-4 left-4">
                                <span class="px-2 py-1 bg-white/90 backdrop-blur rounded-lg text-[10px] font-bold text-slate-800 uppercase shadow-sm">Trophée Nord</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://ui-avatars.com/api/?name=Samir+K&background=random" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="text-xs font-bold text-slate-800">Samir Kasmi</p>
                                    <p class="text-[10px] text-slate-400">Pêcheur • Il y a 32 min</p>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-slate-50 p-3 rounded-xl border border-slate-100">
                                    <p class="text-[10px] text-slate-400 uppercase font-bold mb-1">Espèce</p>
                                    <p class="text-sm font-bold text-slate-800">Sars</p>
                                </div>
                                <div class="bg-slate-50 p-3 rounded-xl border border-slate-100">
                                    <p class="text-[10px] text-slate-400 uppercase font-bold mb-1">Poids</p>
                                    <p class="text-sm font-bold text-slate-800">620 g</p>
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <button class="flex-1 py-3 bg-red-50 text-red-600 rounded-xl text-xs font-bold hover:bg-red-100 transition-all uppercase tracking-wider">Refuser</button>
                                <button class="flex-1 py-3 bg-accent text-white rounded-xl text-xs font-bold hover:bg-sky-600 transition-all uppercase tracking-wider shadow-lg shadow-accent/20">Valider</button>
                            </div>
                        </div>
                    </div>

                </div>

            </main>
        </div>
    </div>
</body>
</html>
