<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modération des Commentaires | FishAdmin</title>
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
        $activePage = 'moderation';
        require_once 'app/views/admin/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Modération de Contenu</h1>
                <div class="flex items-center gap-4 text-xs font-bold text-slate-400">
                    <span class="flex items-center gap-2"><div class="w-2 h-2 bg-accent rounded-full"></div> 8 en attente</span>
                    <span class="px-4 py-2 bg-slate-100 rounded-lg text-slate-600">Auto-modération: Activé</span>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10 space-y-6">
                
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden italic">
                    <div class="divide-y divide-slate-100">
                        
                        <!-- Comment Item -->
                        <div class="p-6 flex gap-6 hover:bg-slate-50 transition-all group">
                            <img src="https://ui-avatars.com/api/?name=Ali+M&background=random" class="w-12 h-12 rounded-xl flex-shrink-0">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center gap-2">
                                        <span class="font-bold text-slate-800">Ali Mansour</span>
                                        <span class="text-[10px] text-slate-400 font-medium">sur</span>
                                        <a href="#" class="text-[10px] font-bold text-accent hover:underline uppercase">Prise #284 (Bar 2kg)</a>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium italic">Il y a 5h</span>
                                </div>
                                <p class="text-sm text-slate-600 leading-relaxed mb-4">
                                    "Magnifique prise ! Quel montage as-tu utilisé pour le surfcasting à cet endroit ?"
                                </p>
                                <div class="flex gap-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button class="px-3 py-1 bg-green-500 text-white rounded-lg text-[10px] font-bold hover:bg-green-600 transition-all">Approuver</button>
                                    <button class="px-3 py-1 bg-white border border-slate-200 text-slate-400 rounded-lg text-[10px] font-bold hover:text-red-500 hover:border-red-200 transition-all">Masquer</button>
                                    <button class="px-3 py-1 bg-white border border-slate-200 text-slate-400 rounded-lg text-[10px] font-bold hover:text-red-500 hover:border-red-200 transition-all">Supprimer</button>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Item 2 (Flagged) -->
                        <div class="p-6 flex gap-6 bg-red-50/30 hover:bg-red-50/50 transition-all group border-l-4 border-red-500">
                            <img src="https://ui-avatars.com/api/?name=S+K&background=random" class="w-12 h-12 rounded-xl flex-shrink-0">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center gap-2">
                                        <span class="font-bold text-slate-800">User2940</span>
                                        <span class="px-2 py-0.5 bg-red-100 text-red-600 rounded text-[8px] font-extrabold uppercase tracking-widest">Signalé</span>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium italic">Il y a 8h</span>
                                </div>
                                <p class="text-sm text-slate-600 leading-relaxed mb-4">
                                    "Message contenant des propos inappropriés ou du spam publicitaire..."
                                </p>
                                <div class="flex gap-3">
                                    <button class="px-3 py-1 bg-white border border-slate-200 text-slate-400 rounded-lg text-[10px] font-bold hover:text-red-500 hover:border-red-200 transition-all">Supprimer définitivement</button>
                                    <button class="px-3 py-1 bg-red-500 text-white rounded-lg text-[10px] font-bold hover:bg-red-600 transition-all">Bannir l'auteur</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </main>
        </div>
    </div>
</body>
</html>
