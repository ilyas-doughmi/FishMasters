<?php
$current_page = $activePage ?? '';
?>
<aside class="hidden lg:flex flex-col w-64 bg-primary text-white h-full fixed left-0 top-0 z-20">
    <div class="h-20 flex items-center px-8 font-bold text-xl border-b border-slate-700">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-accent rounded-lg flex items-center justify-center text-white">
                <i class="fa-solid fa-fish-fins text-sm"></i>
            </div>
            FishAdmin
        </div>
    </div>
    <nav class="flex-1 px-4 py-6 space-y-2">
        <a href="/fishmasters/admin/index" class="flex items-center gap-3 px-4 py-3 <?php echo $current_page === 'dashboard' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all">
            <i class="fa-solid fa-chart-line w-5"></i> Dashboard
        </a>
        <a href="/fishmasters/admin/competitions" class="flex items-center gap-3 px-4 py-3 <?php echo $current_page === 'competitions' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all">
            <i class="fa-solid fa-trophy w-5"></i> Compétitions
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white rounded-xl font-medium transition-all">
            <i class="fa-solid fa-users w-5"></i> Utilisateurs
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white rounded-xl font-medium transition-all">
            <i class="fa-solid fa-gear w-5"></i> Paramètres
        </a>

        <div class="pt-6 mt-6 border-t border-slate-700/50">
            <a href="/fishmasters/auth/login" class="flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-xl font-medium transition-all">
                <i class="fa-solid fa-right-from-bracket w-5"></i> Déconnexion
            </a>
        </div>
    </nav>
</aside>
