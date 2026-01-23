<?php require_once 'app/views/layout/header.php'
require_once 'app/viw' 



; ?>

<section class="py-12 bg-subtle min-h-screen">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
            <div>
                <h1 class="text-3xl font-bold text-secondary mb-2">Nos Pêcheurs & Équipes</h1>
                <p class="text-slate-500">Découvrez les talents de la pêche sportive au Maroc.</p>
            </div>
            
            <div class="flex gap-3">
                <select class="px-4 py-2 rounded-xl border border-slate-200 bg-white text-sm outline-none focus:ring-2 focus:ring-primary/20" name="region">
                    <option>Toutes les régions</option>
                    <option>Rabat-Salé-Kénitra</option>
                    <option>Casablanca-Settat</option>
                    <option>Souss-Massa</option>
                </select>
                <button class="bg-white px-4 py-2 rounded-xl border border-slate-200 text-sm font-bold flex items-center gap-2 hover:bg-slate-50">
                    <i class="fa-solid fa-filter"></i> Filtres
                </button>
            </div>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Fisher Card -->
            <a href="/fishmasters/home/fisher_profile?id=1" class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all group">
                <div class="flex flex-col items-center text-center mb-6">
                    <div class="relative mb-4">
                        <img src="https://ui-avatars.com/api/?name=Ali+Ben&background=0284c7&color=fff" class="w-20 h-20 rounded-full border-4 border-white shadow-lg">
                        <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 border-4 border-white rounded-full"></div>
                    </div>
                    <h3 class="font-bold text-lg text-slate-800 group-hover:text-primary transition-colors">Ali Ben</h3>
                    <p class="text-xs font-bold text-primary uppercase tracking-widest mt-1">Pro Fisher</p>
                    <p class="text-xs text-slate-400 mt-1 italic">Club Surfcasting Rabat</p>
                </div>
                
                <div class="grid grid-cols-2 gap-4 border-t border-slate-50 pt-6">
                    <div class="text-center">
                        <p class="font-bold text-slate-800 text-base">12</p>
                        <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tighter">Events</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold text-primary text-base">1,240</p>
                        <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tighter">Points</p>
                    </div>
                </div>
            </a>

            <!-- Fisher Card 2 -->
            <a href="/fishmasters/home/fisher_profile?id=2" class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all group">
                <div class="flex flex-col items-center text-center mb-6">
                    <div class="relative mb-4">
                        <img src="https://ui-avatars.com/api/?name=Sara+K&background=0f172a&color=fff" class="w-20 h-20 rounded-full border-4 border-white shadow-lg">
                        <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-slate-300 border-4 border-white rounded-full"></div>
                    </div>
                    <h3 class="font-bold text-lg text-slate-800 group-hover:text-primary transition-colors">Sara Kasmi</h3>
                    <p class="text-xs font-bold text-primary uppercase tracking-widest mt-1">Challenger</p>
                    <p class="text-xs text-slate-400 mt-1 italic">Tanger Fishing Squad</p>
                </div>
                
                <div class="grid grid-cols-2 gap-4 border-t border-slate-50 pt-6">
                    <div class="text-center">
                        <p class="font-bold text-slate-800 text-base">8</p>
                        <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tighter">Events</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold text-primary text-base">856</p>
                        <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tighter">Points</p>
                    </div>
                </div>
            </a>

            <!-- Fisher Card 3 -->
            <a href="/fishmasters/home/fisher_profile?id=3" class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all group">
                <div class="flex flex-col items-center text-center mb-6">
                    <div class="relative mb-4">
                        <img src="https://ui-avatars.com/api/?name=Hassan+M&background=random" class="w-20 h-20 rounded-full border-4 border-white shadow-lg">
                        <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 border-4 border-white rounded-full"></div>
                    </div>
                    <h3 class="font-bold text-lg text-slate-800 group-hover:text-primary transition-colors">Hassan Mahfoud</h3>
                    <p class="text-xs font-bold text-primary uppercase tracking-widest mt-1">Elite</p>
                    <p class="text-xs text-slate-400 mt-1 italic">Agadir Sea Hunter</p>
                </div>
                
                <div class="grid grid-cols-2 gap-4 border-t border-slate-50 pt-6">
                    <div class="text-center">
                        <p class="font-bold text-slate-800 text-base">24</p>
                        <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tighter">Events</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold text-primary text-base">3,120</p>
                        <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tighter">Points</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="mt-16 flex justify-center">
            <button class="px-8 py-3 bg-white border border-slate-200 rounded-full font-bold text-slate-600 hover:bg-slate-50 transition-all shadow-sm">Charger plus de pêcheurs</button>
        </div>
    </div>
</section>

<?php require_once 'app/views/layout/footer.php'; ?>
