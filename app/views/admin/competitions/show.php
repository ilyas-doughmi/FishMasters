<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails Compétition | FishAdmin</title>
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
                <div class="flex items-center gap-4">
                    <a href="/fishmasters/admin/competitions" class="w-10 h-10 flex items-center justify-center text-slate-400 hover:bg-slate-50 rounded-xl transition-all">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <h1 class="text-xl font-bold text-slate-800">Marathon Agadir 2026</h1>
                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold uppercase tracking-wider">En Cours</span>
                </div>
                <div class="flex gap-3">
                    <button class="px-4 py-2 bg-white border border-slate-200 text-slate-600 rounded-xl font-bold text-sm hover:bg-slate-50 transition-all">Modifier</button>
                    <button class="px-4 py-2 bg-red-500 text-white rounded-xl font-bold text-sm hover:bg-red-600 shadow-lg shadow-red-500/20 transition-all">Clôturer</button>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                
                <!-- Tabs Navigation -->
                <div class="flex items-center gap-8 border-b border-slate-200 mb-8 overflow-x-auto">
                    <button class="pb-4 px-2 text-sm font-bold border-b-2 border-accent text-accent whitespace-nowrap">Vue d'ensemble</button>
                    <button class="pb-4 px-2 text-sm font-medium text-slate-400 hover:text-slate-600 border-b-2 border-transparent whitespace-nowrap transition-all">Participants (45)</button>
                    <button class="pb-4 px-2 text-sm font-medium text-slate-400 hover:text-slate-600 border-b-2 border-transparent whitespace-nowrap transition-all">Prises (128)</button>
                    <button class="pb-4 px-2 text-sm font-medium text-slate-400 hover:text-slate-600 border-b-2 border-transparent whitespace-nowrap transition-all">Classement Live</button>
                    <button class="pb-4 px-2 text-sm font-medium text-slate-400 hover:text-slate-600 border-b-2 border-transparent whitespace-nowrap transition-all">Règlement</button>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Stats Area -->
                    <div class="lg:col-span-2 space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                                <p class="text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Total Prises</p>
                                <h3 class="text-3xl font-bold text-slate-800">128</h3>
                                <p class="text-green-500 text-xs mt-2 font-bold">+12 depuis 1h</p>
                            </div>
                            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                                <p class="text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Poids Total</p>
                                <h3 class="text-3xl font-bold text-slate-800">42.5 <span class="text-sm font-normal">kg</span></h3>
                                <p class="text-slate-400 text-xs mt-2">Moyenne: 332g / prise</p>
                            </div>
                            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                                <p class="text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Taux Release</p>
                                <h3 class="text-3xl font-bold text-slate-800">92%</h3>
                                <p class="text-emerald-500 text-xs mt-2 font-bold"><i class="fa-solid fa-leaf mr-1"></i> Eco-responsable</p>
                            </div>
                        </div>

                        <!-- Info Card -->
                        <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
                            <h3 class="font-bold text-slate-800 mb-6">Informations de la compétition</h3>
                            <div class="grid grid-cols-2 gap-y-6">
                                <div>
                                    <p class="text-slate-400 text-xs font-bold uppercase mb-1">Type & Milieu</p>
                                    <p class="text-slate-800 font-medium">Surfcasting • Mer Med</p>
                                </div>
                                <div>
                                    <p class="text-slate-400 text-xs font-bold uppercase mb-1">Lieu</p>
                                    <p class="text-slate-800 font-medium">Plage d'Agadir, Secteur B</p>
                                </div>
                                <div>
                                    <p class="text-slate-400 text-xs font-bold uppercase mb-1">Période</p>
                                    <p class="text-slate-800 font-medium">24 Janvier - 26 Janvier 2026</p>
                                </div>
                                <div>
                                    <p class="text-slate-400 text-xs font-bold uppercase mb-1">Scoring</p>
                                    <p class="text-slate-800 font-medium">Poids (1g = 1pt)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Live Feed -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="font-bold text-slate-800 text-sm italic">Live Feed</h3>
                            <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-full bg-slate-100 flex-shrink-0 flex items-center justify-center text-primary font-bold overflow-hidden">
                                    <img src="https://ui-avatars.com/api/?name=MK&background=0284c7&color=fff" alt="">
                                </div>
                                <div>
                                    <p class="text-sm">
                                        <span class="font-bold text-slate-800">Mohamed K.</span> a déclaré un 
                                        <span class="font-bold text-accent">Loup (Bar)</span> de 2.4kg
                                    </p>
                                    <p class="text-[10px] text-slate-400 mt-1">Il y a 3 minutes • En attente validation</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-full bg-slate-100 flex-shrink-0 flex items-center justify-center text-primary font-bold overflow-hidden">
                                    <img src="https://ui-avatars.com/api/?name=AB&background=0f172a&color=fff" alt="">
                                </div>
                                <div>
                                    <p class="text-sm">
                                        <span class="font-bold text-slate-800">Anas B.</span> vient de s'inscrire à la compétition
                                    </p>
                                    <p class="text-[10px] text-slate-400 mt-1">Il y a 12 minutes</p>
                                </div>
                            </div>
                            <!-- More items... -->
                        </div>
                        
                        <button class="w-full py-3 bg-slate-50 text-slate-500 rounded-xl text-xs font-bold mt-8 hover:bg-slate-100 transition-all uppercase tracking-wider">Voir tout le flux</button>
                    </div>
                </div>

            </main>
        </div>
    </div>
</body>
</html>
