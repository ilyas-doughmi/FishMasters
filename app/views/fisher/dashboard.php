<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pêcheur | FishMasters</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                extend: {
                    colors: {
                        primary: '#0284c7',    // Sky 600
                        secondary: '#0f172a',  // Slate 900
                        subtle: '#f1f5f9',     // Slate 100
                    },
                    boxShadow: {
                        'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05)',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-900 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">

        <?php 
        $activePage = 'dashboard';
        require_once 'app/views/fisher/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10 z-10">
                <div class="flex items-center gap-4">
                    <button class="lg:hidden text-slate-500 hover:text-secondary text-xl">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <h1 class="text-xl font-bold text-secondary hidden sm:block">Vue d'ensemble</h1>
                </div>

                <div class="flex items-center gap-6">
                    <div class="hidden md:flex relative group">
                        <i class="fa-solid fa-search absolute left-3 top-3 text-slate-400 group-focus-within:text-primary transition-colors"></i>
                        <input type="text" placeholder="Rechercher..." class="bg-slate-100 border-none rounded-full py-2.5 pl-10 pr-4 w-64 text-sm focus:ring-2 focus:ring-primary/20 focus:bg-white transition-all outline-none text-slate-600 placeholder:text-slate-400">
                    </div>

                    <button class="relative w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-600 hover:bg-slate-100 transition-colors">
                        <i class="fa-regular fa-bell"></i>
                        <span class="absolute top-2 right-2.5 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                    </button>

                    <div class="flex items-center gap-3 pl-6 border-l border-slate-200">
                        <div class="text-right hidden md:block">
                            <p class="text-sm font-bold text-secondary">Ilyas Doughmi</p>
                            <p class="text-xs text-slate-500">Pêcheur Amateur</p>
                        </div>
                        <img src="https://ui-avatars.com/api/?name=Ilyas+Doughmi&background=0284c7&color=fff" class="w-10 h-10 rounded-full border-2 border-white shadow-sm cursor-pointer">
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10 scroll-smooth">
                
                <div class="max-w-7xl mx-auto space-y-8">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-soft flex items-center justify-between group hover:border-blue-100 transition-all">
                            <div>
                                <p class="text-sm font-medium text-slate-500 mb-1">Total Poids</p>
                                <h3 class="text-2xl font-bold text-secondary group-hover:text-primary transition-colors">24.5 kg</h3>
                            </div>
                            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-primary text-xl">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-soft flex items-center justify-between group hover:border-green-100 transition-all">
                            <div>
                                <p class="text-sm font-medium text-slate-500 mb-1">Prises Validées</p>
                                <h3 class="text-2xl font-bold text-secondary group-hover:text-green-600 transition-colors">12</h3>
                            </div>
                            <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center text-green-600 text-xl">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-soft flex items-center justify-between group hover:border-orange-100 transition-all">
                            <div>
                                <p class="text-sm font-medium text-slate-500 mb-1">Classement</p>
                                <h3 class="text-2xl font-bold text-secondary group-hover:text-orange-500 transition-colors">#4 <span class="text-xs text-green-500 font-medium ml-1">▲ 2</span></h3>
                            </div>
                            <div class="w-12 h-12 rounded-xl bg-orange-50 flex items-center justify-center text-orange-500 text-xl">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                        </div>

                        <a href="/fishmasters/fisher/catches_add" class="bg-primary hover:bg-sky-600 text-white p-6 rounded-2xl shadow-lg shadow-primary/20 flex flex-col items-center justify-center gap-2 transition-all transform hover:-translate-y-1 w-full text-center">
                            <i class="fa-solid fa-plus-circle text-3xl"></i>
                            <span class="font-bold">Déclarer une prise</span>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        
                        <div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-slate-100 shadow-soft">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="font-bold text-lg text-secondary">Performance Saison 2026</h3>
                                <select class="bg-slate-50 border-none text-sm font-medium text-slate-600 rounded-lg px-3 py-1 outline-none cursor-pointer hover:bg-slate-100">
                                    <option>Derniers 6 mois</option>
                                    <option>Cette année</option>
                                </select>
                            </div>
                            <div class="relative h-64 w-full">
                                <canvas id="performanceChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-white p-0 rounded-2xl border border-slate-100 shadow-soft overflow-hidden flex flex-col">
                            <div class="h-32 bg-[url('https://images.unsplash.com/photo-1544551763-77ef2d0cfc6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')] bg-cover bg-center relative">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-4 left-4 text-white">
                                    <span class="bg-primary px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wide">Mer</span>
                                    <h4 class="font-bold text-lg mt-1">Marathon Agadir</h4>
                                </div>
                            </div>
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3 text-sm text-slate-600">
                                        <i class="fa-regular fa-calendar text-primary w-5 text-center"></i>
                                        <span>24 Janv. 2026 • 08:00</span>
                                    </div>
                                    <div class="flex items-center gap-3 text-sm text-slate-600">
                                        <i class="fa-solid fa-location-dot text-primary w-5 text-center"></i>
                                        <span>Plage Imsouane</span>
                                    </div>
                                    <div class="flex items-center gap-3 text-sm text-slate-600">
                                        <i class="fa-solid fa-users text-primary w-5 text-center"></i>
                                        <span>42 Participants</span>
                                    </div>
                                </div>
                                <button class="mt-6 w-full py-2.5 border border-slate-200 text-slate-700 font-bold rounded-xl hover:bg-slate-50 hover:border-slate-300 transition-all text-sm">
                                    Voir le règlement
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-100 shadow-soft overflow-hidden">
                        <div class="p-6 border-b border-slate-50 flex justify-between items-center">
                            <h3 class="font-bold text-lg text-secondary">Dernières captures</h3>
                            <a href="#" class="text-sm font-semibold text-primary hover:text-sky-700">Voir tout</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-semibold tracking-wider">
                                    <tr>
                                        <th class="px-6 py-4 rounded-tl-lg">Espèce</th>
                                        <th class="px-6 py-4">Poids / Taille</th>
                                        <th class="px-6 py-4">Lieu / Compétition</th>
                                        <th class="px-6 py-4">Date</th>
                                        <th class="px-6 py-4 rounded-tr-lg">Statut</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-50 text-sm text-slate-600">
                                    <tr class="hover:bg-slate-50/50 transition-colors group">
                                        <td class="px-6 py-4 font-medium text-secondary flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-lg bg-slate-100 overflow-hidden">
                                                <img src="https://images.unsplash.com/photo-1579782558376-791f4640d249?auto=format&fit=crop&w=100&q=80" class="w-full h-full object-cover">
                                            </div>
                                            Loup (Bar)
                                        </td>
                                        <td class="px-6 py-4 font-semibold">4.2 kg <span class="text-slate-400 font-normal text-xs ml-1">(62cm)</span></td>
                                        <td class="px-6 py-4">Marathon Agadir</td>
                                        <td class="px-6 py-4">19 Jan 2026</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 border border-green-200">
                                                Validé
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 transition-colors group">
                                        <td class="px-6 py-4 font-medium text-secondary flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-lg bg-slate-100 overflow-hidden">
                                                <img src="https://images.unsplash.com/photo-1543788328-97c7fb330b6e?auto=format&fit=crop&w=100&q=80" class="w-full h-full object-cover">
                                            </div>
                                            Dorade
                                        </td>
                                        <td class="px-6 py-4 font-semibold">1.1 kg <span class="text-slate-400 font-normal text-xs ml-1">(35cm)</span></td>
                                        <td class="px-6 py-4">Sortie Libre</td>
                                        <td class="px-6 py-4">18 Jan 2026</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-yellow-100 text-yellow-700 border border-yellow-200">
                                                En attente
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 transition-colors group">
                                        <td class="px-6 py-4 font-medium text-secondary flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-lg bg-slate-100 overflow-hidden">
                                                <img src="https://images.unsplash.com/photo-1535591273668-578e31182c4f?auto=format&fit=crop&w=100&q=80" class="w-full h-full object-cover">
                                            </div>
                                            Sar
                                        </td>
                                        <td class="px-6 py-4 font-semibold">0.8 kg <span class="text-slate-400 font-normal text-xs ml-1">(28cm)</span></td>
                                        <td class="px-6 py-4">Marathon Agadir</td>
                                        <td class="px-6 py-4">15 Jan 2026</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700 border border-red-200">
                                                Rejeté
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <footer class="mt-12 text-center text-xs text-slate-400 pb-4">
                    &copy; 2026 FishMasters. Tous droits réservés.
                </footer>

            </main>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('performanceChart').getContext('2d');
        
        // Dégradé pour le graphique
        let gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(2, 132, 199, 0.2)'); // Couleur Primary
        gradient.addColorStop(1, 'rgba(2, 132, 199, 0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Sept', 'Oct', 'Nov', 'Déc', 'Jan', 'Fév'],
                datasets: [{
                    label: 'Poids Cumulé (kg)',
                    data: [5, 8, 12, 15, 24.5, 28],
                    borderColor: '#0284c7', // Primary Blue
                    backgroundColor: gradient,
                    borderWidth: 3,
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: '#0284c7',
                    pointBorderWidth: 2,
                    pointRadius: 6,
                    pointHoverRadius: 8,
                    fill: true,
                    tension: 0.4 // Courbe lisse
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { borderDash: [5, 5], color: '#f1f5f9' },
                        ticks: { font: { family: "'Plus Jakarta Sans', sans-serif" } }
                    },
                    x: {
                        grid: { display: false },
                        ticks: { font: { family: "'Plus Jakarta Sans', sans-serif" } }
                    }
                }
            }
        });
    </script>
</body>
</html>