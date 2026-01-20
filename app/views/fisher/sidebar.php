<?php
$current_page = $activePage ?? '';
?>
<aside class="hidden lg:flex flex-col w-64 bg-white border-r border-slate-200 h-full fixed left-0 top-0 z-20">
    <div class="h-20 flex items-center px-8 border-b border-slate-100">
        <div class="flex items-center gap-2 text-secondary font-bold text-xl">
            <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center text-white">
                <i class="fa-solid fa-fish-fins text-sm"></i>
            </div>
            FishMasters
        </div>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
        <p class="px-4 text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Menu</p>
        
        <a href="/fishmasters/fisher/index" class="flex items-center gap-3 px-4 py-3 <?php echo $current_page === 'dashboard' ? 'bg-blue-50 text-primary rounded-xl font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl font-medium'; ?> transition-colors">
            <i class="fa-solid fa-chart-pie w-5"></i>
            Tableau de bord
        </a>

        <a href="/fishmasters/fisher/competitions" class="flex items-center gap-3 px-4 py-3 <?php echo $current_page === 'competitions' ? 'bg-blue-50 text-primary rounded-xl font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl font-medium'; ?> transition-colors">
            <i class="fa-solid fa-calendar-days w-5"></i>
            Compétitions
        </a>
        
        <a href="/fishmasters/fisher/catches_add" class="flex items-center gap-3 px-4 py-3 <?php echo $current_page === 'catches' ? 'bg-blue-50 text-primary rounded-xl font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl font-medium'; ?> transition-colors">
            <i class="fa-solid fa-fish w-5"></i>
            Mes Prises
        </a>

        <a href="/fishmasters/fisher/vclassement" class="flex items-center gap-3 px-4 py-3 <?php echo $current_page === 'classement' ? 'bg-blue-50 text-primary rounded-xl font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl font-medium'; ?> transition-colors">
            <i class="fa-solid fa-trophy w-5"></i>
            Classements
        </a>

        <div class="pt-6 mt-6 border-t border-slate-100">
            <p class="px-4 text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Compte</p>
            <a href="/fishmasters/fisher/profile" class="flex items-center gap-3 px-4 py-3 <?php echo $current_page === 'profile' ? 'bg-blue-50 text-primary rounded-xl font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl font-medium'; ?> transition-colors">
                <i class="fa-solid fa-user-gear w-5"></i>
                Mon Profil
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-red-50 hover:text-red-600 rounded-xl font-medium transition-colors">
                <i class="fa-solid fa-right-from-bracket w-5"></i>
                Déconnexion
            </a>
        </div>
    </nav>

    <div class="p-4">
        <div class="bg-secondary rounded-2xl p-4 text-white relative overflow-hidden">
            <div class="relative z-10">
                <h4 class="font-bold mb-1">Prochain Event</h4>
                <p class="text-xs text-slate-400 mb-3">Marathon Agadir, J-3</p>
                <button class="w-full bg-primary hover:bg-sky-500 py-2 rounded-lg text-xs font-bold transition-colors">
                    Voir détails
                </button>
            </div>
            <div class="absolute right-[-20px] top-[-20px] w-24 h-24 bg-primary/20 rounded-full blur-2xl"></div>
        </div>
    </div>
</aside>
