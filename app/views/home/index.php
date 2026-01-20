<?php require_once 'app/views/layout/header.php'; ?>

    <header class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="absolute inset-0 -z-10 h-full w-full bg-subtle grid-pattern [mask-image:linear-gradient(to_bottom,white,transparent)]"></div>
        <div class="absolute top-0 right-0 -z-10 translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-blue-100/50 rounded-full blur-3xl opacity-60"></div>

        <div class="max-w-7xl mx-auto px-6 text-center">
            
            <div class="fade-in-up inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-100 text-primary text-sm font-bold mb-6">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                Saison 2026 Ouverte
            </div>

            <h1 class="fade-in-up delay-100 text-5xl lg:text-7xl font-extrabold tracking-tight mb-6 leading-tight">
                La référence de la <br>
                <span class="text-gradient">Pêche Sportive</span> au Maroc
            </h1>

            <p class="fade-in-up delay-200 text-lg text-slate-500 max-w-2xl mx-auto mb-10 leading-relaxed">
                Rejoignez la communauté FishMasters. Participez aux compétitions, validez vos prises en temps réel et grimpez dans le classement national.
            </p>

            <div class="fade-in-up delay-300 flex flex-col sm:flex-row items-center justify-center gap-4">
                <button class="w-full sm:w-auto px-8 py-4 bg-primary hover:bg-sky-600 text-white rounded-2xl font-bold text-lg shadow-glow transition-all flex items-center justify-center gap-2">
                    <i class="fa-solid fa-trophy"></i>
                    Voir les compétitions
                </button>
                <button class="w-full sm:w-auto px-8 py-4 bg-white border border-slate-200 hover:border-slate-300 text-secondary rounded-2xl font-bold text-lg shadow-sm hover:shadow-md transition-all flex items-center justify-center gap-2">
                    <i class="fa-solid fa-play"></i>
                    Démo Live
                </button>
            </div>

            <div class="fade-in-up delay-300 mt-16 relative mx-auto max-w-5xl">
                <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                    <img src="https://images.unsplash.com/photo-1544551763-77ef2d0cfc6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Dashboard Preview" class="w-full object-cover opacity-90 hover:scale-105 transition-transform duration-700">
                </div>

                <div class="absolute -bottom-6 -left-6 md:bottom-10 md:-left-12 bg-white p-4 rounded-2xl shadow-soft border border-slate-100 animate-bounce" style="animation-duration: 3s;">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-xl">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Prise validée</p>
                            <p class="text-lg font-bold text-secondary">Brochet 4.2kg</p>
                        </div>
                    </div>
                </div>

                <div class="absolute -top-6 -right-6 md:top-10 md:-right-12 bg-white p-4 rounded-2xl shadow-soft border border-slate-100 animate-bounce" style="animation-duration: 4s;">
                    <div class="flex -space-x-3">
                        <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=3">
                        <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=4">
                        <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=5">
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">+2k</div>
                    </div>
                    <p class="text-xs text-center mt-2 font-semibold text-primary">Fans actifs</p>
                </div>
            </div>
        </div>
    </header>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4">Tout pour le pêcheur moderne</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">Une plateforme conçue pour gérer vos compétitions de A à Z, du bord de l'eau jusqu'au podium.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="group p-8 rounded-3xl bg-subtle hover:bg-white border border-transparent hover:border-slate-100 hover:shadow-soft transition-all duration-300">
                    <div class="w-14 h-14 bg-blue-100 text-primary rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-secondary">Calendrier Officiel</h3>
                    <p class="text-slate-500 leading-relaxed">Accédez à toutes les compétitions (Mer, Eau douce) et inscrivez-vous en un clic.</p>
                </div>

                <div class="group p-8 rounded-3xl bg-subtle hover:bg-white border border-transparent hover:border-slate-100 hover:shadow-soft transition-all duration-300">
                    <div class="w-14 h-14 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-secondary">Stats en Direct</h3>
                    <p class="text-slate-500 leading-relaxed">Suivez votre progression, analysez vos records et comparez-vous aux meilleurs.</p>
                </div>

                <div class="group p-8 rounded-3xl bg-subtle hover:bg-white border border-transparent hover:border-slate-100 hover:shadow-soft transition-all duration-300">
                    <div class="w-14 h-14 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-secondary">Communauté</h3>
                    <p class="text-slate-500 leading-relaxed">Partagez vos prises, gagnez des badges et interagissez avec vos fans.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-5xl mx-auto px-6">
            <div class="relative rounded-[2.5rem] bg-secondary overflow-hidden px-6 py-16 md:px-16 text-center md:text-left flex flex-col md:flex-row items-center justify-between">
                
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                
                <div class="relative z-10 md:w-2/3">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Prêt à rejoindre l'aventure ?</h2>
                    <p class="text-slate-400 text-lg mb-8 md:mb-0">Créez votre compte gratuitement et commencez à déclarer vos premières prises dès aujourd'hui.</p>
                </div>
                
                <div class="relative z-10">
                    <a href="/fishmasters/auth/register" class="inline-block bg-primary hover:bg-sky-500 text-white font-bold py-4 px-8 rounded-xl shadow-lg shadow-primary/30 transition-all transform hover:-translate-y-1">
                        Créer mon compte
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'app/views/layout/footer.php'; ?>