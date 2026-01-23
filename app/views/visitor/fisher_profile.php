<?php require_once 'app/views/layout/header.php';


include_once "../../app/models/FisherModel.php";
include_once "../../app/models/FisherController.php";

$fullname=$_SESSION['fullname'];
$id=$_SESSION['id'];

$fisher=new Fisher();
$row=$fisher->show('userid',$id);





?>

<section class="py-12 bg-subtle min-h-screen">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left: Profile Sidebar -->
            <div class="space-y-8">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 text-center">
                    <div class="relative inline-block mb-6">
                        <img src="https://ui-avatars.com/api/?name=Ali+Ben&background=0284c7&color=fff" class="w-32 h-32 rounded-full border-4 border-slate-50 shadow-xl mx-auto">
                        <div class="absolute bottom-0 right-0 w-8 h-8 bg-green-500 border-4 border-white rounded-full"></div>
                    </div>
                    <h1 class="text-2xl font-black text-secondary"><?=htmlspecialchars($username)?></h1>
                    <p class="text-primary font-bold text-sm uppercase tracking-widest mt-1">Élite Pêcheur</p>
                    <p class="text-slate-400 text-sm mt-4 italic leading-relaxed">Passionné de <?= depuis plus de 15 ans. Ambassadeur pour la préservation des zones côtières.</p>
                    
                    <div class="flex justify-center gap-4 mt-8">
                        <button class="bg-primary text-white px-6 py-2 rounded-full font-bold text-sm shadow-glow transition-all hover:scale-105">Suivre</button>
                        <button class="bg-slate-50 text-slate-600 px-6 py-2 rounded-full font-bold text-sm border border-slate-200 transition-all hover:bg-slate-100">Message</button>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <h3 class="font-bold text-secondary mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-trophy text-primary"></i> Palmarès & Infos
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between py-3 border-b border-slate-50">
                            <span class="text-sm text-slate-500 italic">Club</span>
                            <span class="text-sm font-bold text-secondary">Club Surfcasting Rabat</span>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-slate-50">
                            <span class="text-sm text-slate-500 italic">Région</span>
                            <span class="text-sm font-bold text-secondary">Rabat-Salé-Kénitra</span>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-slate-50">
                            <span class="text-sm text-slate-500 italic">Technique Favorite</span>
                            <span class="text-sm font-bold text-secondary">Surfcasting / Leurres</span>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-slate-50">
                            <span class="text-sm text-slate-500 italic">Inscrit depuis</span>
                            <span class="text-sm font-bold text-secondary">Octobre 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Stats Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 text-center">
                        <p class="text-xs text-slate-400 font-bold uppercase mb-2 italic">Points</p>
                        <p class="text-2xl font-black text-primary">3,120</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 text-center">
                        <p class="text-xs text-slate-400 font-bold uppercase mb-2 italic">Prises</p>
                        <p class="text-2xl font-black text-secondary">128</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 text-center">
                        <p class="text-xs text-slate-400 font-bold uppercase mb-2 italic">Podiums</p>
                        <p class="text-2xl font-black text-secondary">15</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 text-center">
                        <p class="text-xs text-slate-400 font-bold uppercase mb-2 italic">Rang</p>
                        <p class="text-2xl font-black text-yellow-500">#1</p>
                    </div>
                </div>

                <!-- Bio / Achievements -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <h3 class="font-bold text-xl text-secondary mb-8">Plus Grosses Prises</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center text-primary text-2xl">
                                <i class="fa-solid fa-fish"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-secondary">Loup (Bar)</h4>
                                <p class="text-xs text-slate-500 italic">4.2 kg • Plage Agadir</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center text-primary text-2xl">
                                <i class="fa-solid fa-fish"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-secondary">Dorade Royale</h4>
                                <p class="text-xs text-slate-500 italic">2.8 kg • Côte Safi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <h3 class="font-bold text-xl text-secondary mb-8">Activité Récente</h3>
                    <div class="space-y-8">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-slate-100 flex-shrink-0 flex items-center justify-center text-primary">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-secondary">
                                    <span class="font-bold">1ère place</span> au Marathon Agadir 2026.
                                </p>
                                <p class="text-xs text-slate-400 mt-1 italic">Il y a 2 jours</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-slate-100 flex-shrink-0 flex items-center justify-center text-primary">
                                <i class="fa-solid fa-camera"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-secondary">
                                    A posté une photo d'une nouvelle prise : <span class="font-bold text-primary">Bar commun (1.2kg)</span>.
                                </p>
                                <p class="text-xs text-slate-400 mt-1 italic">Il y a 5 jours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'app/views/layout/footer.php'; ?>
