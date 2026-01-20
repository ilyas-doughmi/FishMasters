<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord | FishAdmin</title>
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
        $activePage = 'dashboard';
        require_once 'app/views/admin/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Dashboard Overview</h1>
                <div class="flex items-center gap-4">
                    <button class="relative w-10 h-10 flex items-center justify-center text-slate-400 hover:bg-slate-50 rounded-xl transition-all">
                        <i class="fa-solid fa-bell"></i>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                    </button>
                    <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                        <div class="text-right hidden sm:block">
                            <p class="text-xs font-bold text-slate-800">Admin FishMasters</p>
                            <p class="text-[10px] text-slate-400">Administrateur</p>
                        </div>
                        <img src="https://ui-avatars.com/api/?name=Admin&background=0f172a&color=fff" class="w-10 h-10 rounded-xl shadow-sm">
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10 space-y-8">
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-blue-50 text-accent rounded-xl flex items-center justify-center text-xl">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <span class="text-xs font-bold text-green-500">+12%</span>
                        </div>
                        <p class="text-slate-400 text-sm font-medium">Total Pêcheurs</p>
                        <h3 class="text-2xl font-bold text-slate-800">1,284</h3>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center text-xl">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <span class="text-xs font-bold text-green-500">+3</span>
                        </div>
                        <p class="text-slate-400 text-sm font-medium">Compétitions Actives</p>
                        <h3 class="text-2xl font-bold text-slate-800">8</h3>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-purple-50 text-purple-500 rounded-xl flex items-center justify-center text-xl">
                                <i class="fa-solid fa-fish"></i>
                            </div>
                            <span class="text-xs font-bold text-green-500">+84</span>
                        </div>
                        <p class="text-slate-400 text-sm font-medium">Prises Déclarées (Mois)</p>
                        <h3 class="text-2xl font-bold text-slate-800">432</h3>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-emerald-50 text-emerald-500 rounded-xl flex items-center justify-center text-xl">
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>
                            <span class="text-xs font-bold text-slate-400">0%</span>
                        </div>
                        <p class="text-slate-400 text-sm font-medium">Événements à venir</p>
                        <h3 class="text-2xl font-bold text-slate-800">12</h3>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="font-bold text-slate-800">Activité des Inscriptions</h3>
                            <select class="text-xs bg-slate-50 border-none rounded-lg focus:ring-0">
                                <option>Les 7 derniers jours</option>
                                <option>Ce mois</option>
                            </select>
                        </div>
                        <canvas id="activityChart" height="200"></canvas>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                        <h3 class="font-bold text-slate-800 mb-6">Dernières Inscriptions</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Mehdi+Ali&background=random" class="w-10 h-10 rounded-lg">
                                <div class="flex-1">
                                    <p class="text-sm font-bold text-slate-800">Mehdi Ali</p>
                                    <p class="text-[10px] text-slate-400">Il y a 2 min • Pêcheur</p>
                                </div>
                                <button class="text-accent hover:bg-blue-50 w-8 h-8 rounded-lg transition-all"><i class="fa-solid fa-chevron-right text-xs"></i></button>
                            </div>
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Sara+Ben&background=random" class="w-10 h-10 rounded-lg">
                                <div class="flex-1">
                                    <p class="text-sm font-bold text-slate-800">Sara Ben</p>
                                    <p class="text-[10px] text-slate-400">Il y a 15 min • Organisateur</p>
                                </div>
                                <button class="text-accent hover:bg-blue-50 w-8 h-8 rounded-lg transition-all"><i class="fa-solid fa-chevron-right text-xs"></i></button>
                            </div>
                        </div>
                        <button class="w-full mt-6 py-2 bg-slate-50 text-slate-600 rounded-xl text-xs font-bold hover:bg-slate-100 transition-all">Voir tout</button>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('activityChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
                datasets: [{
                    label: 'Inscriptions',
                    data: [12, 19, 15, 25, 22, 30, 28],
                    borderColor: '#0284c7',
                    backgroundColor: 'rgba(2, 132, 199, 0.1)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true, grid: { display: false } },
                    x: { grid: { display: false } }
                }
            }
        });
    </script>
</body>
</html>
