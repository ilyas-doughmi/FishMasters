<?php require_once 'app/views/layout/header.php'; ?>

<section class="py-12 bg-subtle min-h-screen">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-secondary mb-4">Classement National</h1>
            <p class="text-slate-500 max-w-2xl mx-auto italic">Le panthéon de la pêche sportive. Suivez l'évolution du championnat en temps réel.</p>
        </div>

        <!-- Podium Top 3 -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-end mb-16">
            <!-- Rank 2 -->
            <div class="order-2 md:order-1 bg-white p-8 rounded-3xl shadow-sm border border-slate-100 text-center relative pt-16">
                <div class="absolute -top-10 left-1/2 -translate-x-1/2">
                    <div class="relative">
                        <img src="https://ui-avatars.com/api/?name=Sara+K&background=0f172a&color=fff" class="w-24 h-24 rounded-full border-4 border-slate-100 shadow-xl">
                        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-slate-300 rounded-full border-4 border-white flex items-center justify-center font-bold text-white text-sm">2</div>
                    </div>
                </div>
                <h3 class="font-bold text-xl text-secondary">Sara Kasmi</h3>
                <p class="text-xs text-slate-400 font-bold uppercase tracking-widest mt-1 mb-6 italic">Tanger Fishing Squad</p>
                <div class="bg-slate-50 rounded-2xl p-4">
                    <p class="text-2xl font-black text-secondary">2,840</p>
                    <p class="text-[10px] text-slate-400 uppercase font-bold tracking-widest mt-1">Points cumulés</p>
                </div>
            </div>

            <!-- Rank 1 -->
            <div class="mt-8 order-1 md:order-2 bg-gradient-to-b from-primary to-primary/90 p-8 rounded-3xl shadow-glow text-center relative pt-20 scale-110 z-10">
                <div class="absolute -top-12 left-1/2 -translate-x-1/2">
                    <div class="relative">
                        <img src="https://ui-avatars.com/api/?name=Ali+Ben&background=fff&color=0284c7" class="w-32 h-32 rounded-full border-4 border-white shadow-2xl">
                        <div class="absolute -bottom-2 -right-2 w-12 h-12 bg-yellow-400 rounded-full border-4 border-white flex items-center justify-center font-bold text-white text-xl">
                            <i class="fa-solid fa-crown"></i>
                        </div>
                    </div>
                </div>
                <h3 class="font-bold text-2xl text-white">Ali Ben</h3>
                <p class="text-xs text-white/70 font-bold uppercase tracking-widest mt-1 mb-6">Club Surfcasting Rabat</p>
                <div class="bg-white/10 rounded-2xl p-6 backdrop-blur-sm border border-white/20">
                    <p class="text-3xl font-black text-white">3,120</p>
                    <p class="text-[10px] text-white/70 uppercase font-bold tracking-widest mt-1">Points cumulés</p>
                </div>
            </div>

            <!-- Rank 3 -->
            <div class="order-3 bg-white p-8 rounded-3xl shadow-sm border border-slate-100 text-center relative pt-16">
                <div class="absolute -top-10 left-1/2 -translate-x-1/2">
                    <div class="relative">
                        <img src="https://ui-avatars.com/api/?name=Mehdi+A&background=random" class="w-24 h-24 rounded-full border-4 border-slate-100 shadow-xl">
                        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-orange-400 rounded-full border-4 border-white flex items-center justify-center font-bold text-white text-sm">3</div>
                    </div>
                </div>
                <h3 class="font-bold text-xl text-secondary">Mehdi Alami</h3>
                <p class="text-xs text-slate-400 font-bold uppercase tracking-widest mt-1 mb-6 italic">Agadir Sea Hunter</p>
                <div class="bg-slate-50 rounded-2xl p-4">
                    <p class="text-2xl font-black text-secondary">2,450</p>
                    <p class="text-[10px] text-slate-400 uppercase font-bold tracking-widest mt-1">Points cumulés</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="p-8 border-b border-slate-50 flex flex-col md:flex-row md:items-center justify-between gap-6">
                <h2 class="font-bold text-xl text-secondary">Top 50 Pêcheurs</h2>
                <div class="flex gap-4">
                    <select class="px-4 py-2 rounded-xl border border-slate-200 bg-white text-sm outline-none">
                        <option>Général</option>
                        <option>Sénior</option>
                        <option>Junior</option>
                    </select>
                    <select class="px-4 py-2 rounded-xl border border-slate-200 bg-white text-sm outline-none">
                        <option>Mer</option>
                        <option>Eau Douce</option>
                    </select>
                </div>
            </div>

            <table class="w-full text-left">
                <thead class="bg-slate-50/50 text-slate-400 text-[10px] uppercase font-bold tracking-widest">
                    <tr>
                        <th class="px-8 py-4">Position</th>
                        <th class="px-8 py-4">Pêcheur</th>
                        <th class="px-8 py-4">Club</th>
                        <th class="px-8 py-4">Points</th>
                        <th class="px-8 py-4">Prises</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50 italic">
                    <tr class="hover:bg-slate-50/50 transition-all">
                        <td class="px-8 py-5 font-black text-slate-300">#4</td>
                        <td class="px-8 py-5">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Hassan+M&background=random" class="w-8 h-8 rounded-full">
                                <span class="font-bold text-secondary">Hassan Mahfoud</span>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-slate-500 text-sm">Agadir Atlantic</td>
                        <td class="px-8 py-5 font-black text-primary">2,120</td>
                        <td class="px-8 py-5 font-bold text-secondary">84</td>
                    </tr>
                    <tr class="hover:bg-slate-50/50 transition-all">
                        <td class="px-8 py-5 font-black text-slate-300">#5</td>
                        <td class="px-8 py-5">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Othman+L&background=random" class="w-8 h-8 rounded-full">
                                <span class="font-bold text-secondary">Othman Laroui</span>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-slate-500 text-sm">Casablanca Pro</td>
                        <td class="px-8 py-5 font-black text-primary">1,980</td>
                        <td class="px-8 py-5 font-bold text-secondary">42</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php require_once 'app/views/layout/footer.php'; ?>
