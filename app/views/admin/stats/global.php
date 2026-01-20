<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Statistiques Globales | FishAdmin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        $activePage = 'stats';
        require_once 'app/views/admin/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Statistiques Détaillées</h1>
                <div class="flex gap-2">
                    <button class="bg-white border border-slate-200 text-slate-600 px-4 py-2 rounded-xl font-bold text-sm hover:bg-slate-50 transition-all flex items-center gap-2">
                        <i class="fa-solid fa-calendar"></i> Ce mois
                    </button>
                    <button class="bg-accent text-white px-4 py-2 rounded-xl font-bold text-sm hover:bg-sky-600 transition-all shadow-lg shadow-accent/20">
                        Exporter le rapport
                    </button>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10 space-y-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Chart Main -->
                    <div class="lg:col-span-2 bg-white p-8 rounded-3xl border border-slate-200 shadow-sm italic">
                        <div class="flex items-center justify-between mb-8">
                            <div>
                                <h3 class="font-bold text-slate-800 text-lg">Évolution des Participants</h3>
                                <p class="text-xs text-slate-400">Croissance mensuelle de la communauté</p>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-3 h-3 bg-accent rounded-full"></span>
                                    <span class="text-[10px] font-bold text-slate-500 uppercase">Inscriptions</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-3 h-3 bg-slate-200 rounded-full"></span>
                                    <span class="text-[10px] font-bold text-slate-500 uppercase">Activité</span>
                                </div>
                            </div>
                        </div>
                        <canvas id="participantsChart" height="150"></canvas>
                    </div>

                    <!-- Species Breakdown -->
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm italic">
                        <h3 class="font-bold text-slate-800 mb-6 underline decoration-accent">Distribution des Espèces</h3>
                        <div class="mb-10">
                            <canvas id="speciesDoughnut" height="200"></canvas>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-medium text-slate-500">Loup (Bar)</span>
                                <span class="text-xs font-bold text-slate-800">42%</span>
                            </div>
                            <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                                <div class="bg-accent h-full w-[42%]"></div>
                            </div>
                            <!-- ... -->
                        </div>
                    </div>
                </div>

                <!-- Secondary Stats Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 italic">
                    <div class="bg-accent text-white p-6 rounded-3xl shadow-lg shadow-accent/20">
                        <p class="text-white/70 text-[10px] font-bold uppercase mb-1">Taux Catch & Release</p>
                        <h3 class="text-3xl font-extrabold italic">94.2%</h3>
                        <p class="text-[10px] mt-4 font-medium"><i class="fa-solid fa-arrow-up mr-1 text-emerald-400"></i> +2.1% vs mois dernier</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm">
                        <p class="text-slate-400 text-[10px] font-bold uppercase mb-1">Moyenne de prises / compétition</p>
                        <h3 class="text-3xl font-extrabold text-slate-800 italic">56 <span class="text-sm font-normal text-slate-400">prises</span></h3>
                    </div>
                    <div class="bg-primary text-white p-6 rounded-3xl shadow-lg shadow-primary/20">
                        <p class="text-white/60 text-[10px] font-bold uppercase mb-1">Engagement Communauté</p>
                        <h3 class="text-3xl font-extrabold italic">High</h3>
                        <div class="mt-4 flex -space-x-2">
                            <img src="https://i.pravatar.cc/100?img=1" class="w-6 h-6 rounded-full border-2 border-primary">
                            <img src="https://i.pravatar.cc/100?img=2" class="w-6 h-6 rounded-full border-2 border-primary">
                            <img src="https://i.pravatar.cc/100?img=3" class="w-6 h-6 rounded-full border-2 border-primary">
                            <div class="w-6 h-6 rounded-full border-2 border-primary bg-accent flex items-center justify-center text-[8px] font-bold">+</div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm">
                        <p class="text-slate-400 text-[10px] font-bold uppercase mb-1">Total Mentions "J'aime"</p>
                        <h3 class="text-3xl font-extrabold text-slate-800 italic">12.4k</h3>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script>
        // Participants Line Chart
        const pCtx = document.getElementById('participantsChart').getContext('2d');
        new Chart(pCtx, {
            type: 'line',
            data: {
                labels: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan'],
                datasets: [{
                    label: 'Pêcheurs',
                    data: [420, 580, 550, 720, 890, 1050, 1284],
                    borderColor: '#0284c7',
                    backgroundColor: 'rgba(2, 132, 199, 0.05)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                plugins: { legend: { display: false } },
                scales: {
                    y: { grid: { borderDash: [2, 2] } },
                    x: { grid: { display: false } }
                }
            }
        });

        // Species Doughnut
        const sCtx = document.getElementById('speciesDoughnut').getContext('2d');
        new Chart(sCtx, {
            type: 'doughnut',
            data: {
                labels: ['Loup', 'Sars', 'Daurade', 'Autre'],
                datasets: [{
                    data: [42, 25, 18, 15],
                    backgroundColor: ['#0284c7', '#0f172a', '#6366f1', '#e2e8f0'],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                plugins: { legend: { display: false } },
                cutout: '75%'
            }
        });
    </script>
</body>
</html>
