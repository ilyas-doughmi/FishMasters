<?php require_once 'app/views/layout/header.php'; ?>

<section class="py-12 bg-subtle min-h-screen">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Hero Section -->
        <div class="relative h-96 rounded-3xl overflow-hidden mb-12 shadow-2xl">
            <img src="https://images.unsplash.com/photo-1544551763-77ef2d0cfc6c?q=80&w=1200&auto=format&fit=crop" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-secondary/40 to-transparent flex flex-col justify-end p-12">
                <div class="flex items-center gap-4 mb-6">
                    <span class="bg-primary text-white px-4 py-1.5 rounded-full font-bold text-xs shadow-glow">EN DIRECT</span>
                    <span class="text-white/80 font-bold text-sm flex items-center gap-2">
                        <i class="fa-solid fa-location-dot"></i> Agadir, Maroc
                    </span>
                </div>
                <h1 class="text-5xl font-extrabold text-white mb-4">Marathon Agadir 2026</h1>
                <p class="text-white/70 max-w-2xl text-lg italic">
                    La plus grande compétition de surfcasting de l'Atlantique. Trois jours de compétition intense entre les meilleurs pêcheurs du royaume.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Info -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Quick Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 text-center">
                        <p class="text-[10px] text-slate-400 font-bold uppercase mb-1">Pêcheurs</p>
                        <p class="text-2xl font-black text-secondary">45</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 text-center">
                        <p class="text-[10px] text-slate-400 font-bold uppercase mb-1">Prises</p>
                        <p class="text-2xl font-black text-secondary">128</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 text-center">
                        <p class="text-[10px] text-slate-400 font-bold uppercase mb-1">Poids Total</p>
                        <p class="text-2xl font-black text-primary">42.5kg</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 text-center">
                        <p class="text-[10px] text-slate-400 font-bold uppercase mb-1">Release</p>
                        <p class="text-2xl font-black text-green-500">92%</p>
                    </div>
                </div>

                <!-- Info Cards -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <h2 class="font-bold text-2xl text-secondary mb-8">Règlement de l'épreuve</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-bold text-sm text-primary uppercase tracking-widest mb-4">Espèces Autorisées</h4>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3 text-slate-600 text-sm italic">
                                    <i class="fa-solid fa-check text-green-500"></i> Bar / Loup (Min 36cm)
                                </li>
                                <li class="flex items-center gap-3 text-slate-600 text-sm italic">
                                    <i class="fa-solid fa-check text-green-500"></i> Dorade Royale (Min 23cm)
                                </li>
                                <li class="flex items-center gap-3 text-slate-600 text-sm italic">
                                    <i class="fa-solid fa-check text-green-500"></i> Sars (Min 21cm)
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm text-primary uppercase tracking-widest mb-4">Mode de Scoring</h4>
                            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100">
                                <p class="text-sm text-slate-600 italic leading-relaxed">
                                    Classement au poids total cumulé. 1 point attribué par gramme validé. Les prises relâchées (Catch & Release) bénéficient d'un bonus de +10% sur les points.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Live Feed Preview -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="font-bold text-2xl text-secondary">Dernières Prises</h2>
                        <span class="flex items-center gap-2 text-xs font-bold text-red-500 animate-pulse">
                            <i class="fa-solid fa-circle text-[8px]"></i> LIVE FEED
                        </span>
                    </div>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4 p-4 hover:bg-slate-50 rounded-2xl transition-all border border-transparent hover:border-slate-100">
                            <img src="https://ui-avatars.com/api/?name=Ali+B&background=0284c7&color=fff" class="w-12 h-12 rounded-full">
                            <div class="flex-1">
                                <p class="text-sm">
                                    <span class="font-bold text-secondary">Ali Ben</span> a capturé un <span class="font-bold text-primary">Bar (2.4kg)</span>
                                </p>
                                <p class="text-[10px] text-slate-400 mt-1 italic italic">Il y a 3 minutes • Confirmé</p>
                            </div>
                            <div class="text-right">
                                <p class="font-black text-secondary">2,400 pts</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 hover:bg-slate-50 rounded-2xl transition-all border border-transparent hover:border-slate-100">
                            <img src="https://ui-avatars.com/api/?name=Sara+K&background=0f172a&color=fff" class="w-12 h-12 rounded-full">
                            <div class="flex-1">
                                <p class="text-sm">
                                    <span class="font-bold text-secondary">Sara Kasmi</span> a capturé un <span class="font-bold text-primary">Sars (850g)</span>
                                </p>
                                <p class="text-[10px] text-slate-400 mt-1 italic italic">Il y a 12 minutes • Confirmé</p>
                            </div>
                            <div class="text-right">
                                <p class="font-black text-secondary">850 pts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-8">
                <div class="bg-secondary p-8 rounded-3xl shadow-2xl text-white">
                    <h3 class="font-bold text-xl mb-4">Participer ?</h3>
                    <p class="text-white/70 text-sm mb-8 leading-relaxed italic">
                        Inscrivez-vous pour rejoindre les 45 compétiteurs déjà engagés sur ce spot.
                    </p>
                    <button class="w-full bg-primary hover:bg-sky-500 text-white font-bold py-4 rounded-2xl transition-all shadow-glow transform hover:-translate-y-1">
                        S'inscrire à l'évent
                    </button>
                    <p class="text-center text-[10px] text-white/40 mt-4 uppercase tracking-widest font-bold">Fin des inscriptions : 22 Janvier</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <h3 class="font-bold text-secondary mb-6 italic">Organisateur</h3>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center text-primary text-xl">
                            <i class="fa-solid fa-building-shield"></i>
                        </div>
                        <div>
                            <p class="font-bold text-secondary text-sm">Fédération Marocaine</p>
                            <p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">Pêche Sportive</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'app/views/layout/footer.php'; ?>
