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
    
    <div class="flex-1 overflow-y-auto py-6 px-4 space-y-8 custom-scrollbar">
        <!-- Main -->
        <div>
            <p class="px-4 text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-4">Général</p>
            <nav class="space-y-1">
                <a href="/fishmasters/admin/index" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'dashboard' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-chart-line w-4"></i> Dashboard
                </a>
                <a href="/fishmasters/admin/stats" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'stats' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-chart-pie w-4"></i> Statistiques
                </a>
            </nav>
        </div>

        <!-- Competition Management -->
        <div>
            <p class="px-4 text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-4">Compétitions</p>
            <nav class="space-y-1">
                <a href="/fishmasters/admin/competitions" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'competitions' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-trophy w-4"></i> Liste & Gestion
                </a>
                <a href="/fishmasters/admin/rules" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'rules' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-scroll w-4"></i> Règlements
                </a>
                <a href="/fishmasters/admin/species" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'species' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-fish-list w-4"></i> Espèces
                </a>
            </nav>
        </div>

        <!-- Operations -->
        <div>
            <p class="px-4 text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-4">Opérations</p>
            <nav class="space-y-1">
                <a href="/fishmasters/admin/catches_pending" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'catches' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-camera w-4"></i> Validation Prises
                    <span class="ml-auto bg-accent text-white text-[10px] px-2 py-0.5 rounded-full">12</span>
                </a>
                <a href="/fishmasters/admin/moderation_comments" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'moderation' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-comments w-4"></i> Modération
                </a>
            </nav>
        </div>

        <!-- Users & Rankings -->
        <div>
            <p class="px-4 text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-4">Communauté</p>
            <nav class="space-y-1">
                <a href="/fishmasters/admin/fishers" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'fishers' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-users w-4"></i> Pêcheurs
                </a>
                <a href="/fishmasters/admin/rankings_championship" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'rankings' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-medal w-4"></i> Championnat
                </a>
            </nav>
        </div>

        <!-- Tools -->
        <div>
            <p class="px-4 text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-4">Outils</p>
            <nav class="space-y-1">
                <a href="/fishmasters/admin/emails_send" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'emails' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-paper-plane w-4"></i> Emailing
                </a>
                <a href="/fishmasters/admin/reports_generate" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'reports' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-file-pdf w-4"></i> Rapports PDF
                </a>
                <a href="/fishmasters/admin/notifications" class="flex items-center gap-3 px-4 py-2.5 <?php echo $current_page === 'notifications' ? 'bg-white/10 text-white border border-white/5' : 'text-slate-400 hover:text-white'; ?> rounded-xl font-medium transition-all text-sm">
                    <i class="fa-solid fa-bell w-4"></i> Notifications
                </a>
            </nav>
        </div>
    </div>

    <div class="p-4 border-t border-slate-700/50">
        <a href="/fishmasters/auth/login" class="flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-xl font-medium transition-all">
            <i class="fa-solid fa-right-from-bracket w-5"></i> Déconnexion
        </a>
    </div>
</aside>

<style>
.custom-scrollbar::-webkit-scrollbar {
    width: 4px;
}
.custom-scrollbar::-webkit-scrollbar-track {
    background: transparent;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
}
.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: rgba(255, 255, 255, 0.2);
}
</style>
