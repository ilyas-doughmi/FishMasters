<?php require_once 'app/views/layout/header.php'; ?>

<section class="py-12 bg-subtle min-h-screen">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-12">
            <h1 class="text-3xl font-bold text-secondary mb-4">Calendrier des Compétitions</h1>
            
            <div class="flex flex-wrap gap-4">
                <button class="px-6 py-2 bg-primary text-white rounded-full font-bold text-sm shadow-glow transition-all">Tous</button>
                <button class="px-6 py-2 bg-white text-slate-500 rounded-full font-bold text-sm border border-slate-200 hover:border-primary/30 transition-all">Pêche en Mer</button>
                <button class="px-6 py-2 bg-white text-slate-500 rounded-full font-bold text-sm border border-slate-200 hover:border-primary/30 transition-all">Eau Douce</button>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Competition Card -->
            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden flex flex-col md:flex-row group hover:shadow-xl transition-all">
                <div class="md:w-48 h-48 md:h-auto relative shrink-0">
                    <img src="https://images.unsplash.com/photo-1544551763-77ef2d0cfc6c?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-bold text-primary uppercase tracking-widest bg-blue-50 px-2 py-1 rounded">Surfcasting</span>
                        <span class="text-[10px] font-bold text-green-500 uppercase tracking-widest bg-green-50 px-2 py-1 rounded">Inscriptions Ouvertes</span>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-4 group-hover:text-primary transition-colors">Marathon Agadir 2026</h3>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3 text-sm text-slate-500">
                            <i class="fa-solid fa-location-dot w-4 text-primary"></i>
                            Plage d'Agadir, Secteur B
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-500">
                            <i class="fa-solid fa-calendar w-4 text-primary"></i>
                            24 Janvier - 26 Janvier 2026
                        </div>
                    </div>

                    <div class="mt-auto flex items-center justify-between border-t border-slate-50 pt-6">
                        <div class="flex -space-x-2">
                            <img src="https://i.pravatar.cc/100?img=1" class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="https://i.pravatar.cc/100?img=2" class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="https://i.pravatar.cc/100?img=3" class="w-8 h-8 rounded-full border-2 border-white">
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-[8px] font-bold">+42</div>
                        </div>
                        <a href="/fishmasters/home/competition_detail?id=1" class="text-sm font-bold text-primary flex items-center gap-2 group/btn">
                            Voir détails 
                            <i class="fa-solid fa-arrow-right transition-transform group-hover/btn:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Competition Card 2 -->
            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden flex flex-col md:flex-row group hover:shadow-xl transition-all">
                <div class="md:w-48 h-48 md:h-auto relative shrink-0">
                    <img src="https://images.unsplash.com/photo-1544551763-8dd44758c2dd?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover">
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-bold text-purple-500 uppercase tracking-widest bg-purple-50 px-2 py-1 rounded">Black Bass</span>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest bg-slate-50 px-2 py-1 rounded">À venir</span>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-4 group-hover:text-primary transition-colors">Open Barrage Al Massira</h3>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3 text-sm text-slate-500">
                            <i class="fa-solid fa-location-dot w-4 text-primary"></i>
                            Barrage Al Massira, Settat
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-500">
                            <i class="fa-solid fa-calendar w-4 text-primary"></i>
                            12 Février - 14 Février 2026
                        </div>
                    </div>

                    <div class="mt-auto flex items-center justify-between border-t border-slate-50 pt-6">
                        <div class="flex -space-x-2">
                            <img src="https://i.pravatar.cc/100?img=4" class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="https://i.pravatar.cc/100?img=5" class="w-8 h-8 rounded-full border-2 border-white">
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-[8px] font-bold">+18</div>
                        </div>
                        <a href="#" class="text-sm font-bold text-primary flex items-center gap-2 group/btn">
                            Voir détails 
                            <i class="fa-solid fa-arrow-right transition-transform group-hover/btn:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'app/views/layout/footer.php'; ?>
