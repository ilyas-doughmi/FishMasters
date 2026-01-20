<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classements | FishMasters</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                extend: {
                    colors: { primary: '#0284c7', secondary: '#0f172a' },
                    boxShadow: { 'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05)' }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-900 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        
        <?php 
        $activePage = 'classement';
        require_once 'app/views/fisher/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10 z-10">
                <h1 class="text-xl font-bold text-secondary">Classement Général</h1>
                <div class="flex items-center gap-3">
                    <span class="text-sm font-bold text-secondary hidden md:block">Ilyas Doughmi</span>
                    <img src="https://ui-avatars.com/api/?name=Ilyas&background=0284c7&color=fff" class="w-10 h-10 rounded-full border-2 border-white shadow-sm">
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                <div class="max-w-6xl mx-auto">

                    <div class="flex flex-wrap gap-4 mb-10 justify-center md:justify-start">
                        <button class="px-6 py-2 bg-secondary text-white rounded-full font-bold shadow-lg shadow-secondary/20 transition-transform hover:scale-105">Général</button>
                        <button class="px-6 py-2 bg-white text-slate-600 hover:bg-blue-50 hover:text-primary rounded-full font-bold border border-slate-200 transition-colors"><i class="fa-solid fa-water mr-2"></i>Mer</button>
                        <button class="px-6 py-2 bg-white text-slate-600 hover:bg-green-50 hover:text-green-600 rounded-full font-bold border border-slate-200 transition-colors"><i class="fa-solid fa-leaf mr-2"></i>Eau Douce</button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-end mb-12">
                        
                        <div class="order-2 md:order-1 bg-white p-6 rounded-2xl border border-slate-200 shadow-soft text-center relative mt-8 md:mt-0 transform hover:-translate-y-2 transition-transform duration-300">
                            <div class="absolute -top-5 left-1/2 -translate-x-1/2 bg-slate-300 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold border-4 border-slate-50 text-lg shadow-md">2</div>
                            <div class="mb-4">
                                <img src="https://i.pravatar.cc/150?img=12" class="w-20 h-20 rounded-full mx-auto border-4 border-slate-100 object-cover">
                            </div>
                            <h3 class="font-bold text-lg text-secondary">Omar F.</h3>
                            <p class="text-xs text-slate-500 mb-3">Club Rabat</p>
                            <div class="bg-slate-50 rounded-xl p-3">
                                <p class="text-2xl font-bold text-secondary">1,850 <span class="text-xs text-slate-400 font-normal">pts</span></p>
                            </div>
                        </div>

                        <div class="order-1 md:order-2 bg-gradient-to-b from-white to-blue-50 p-8 rounded-3xl border-2 border-yellow-400 shadow-xl text-center relative transform scale-105 z-10">
                            <div class="absolute -top-6 left-1/2 -translate-x-1/2 bg-yellow-400 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold border-4 border-white text-xl shadow-lg">
                                <i class="fa-solid fa-crown"></i>
                            </div>
                            <div class="mb-4 relative inline-block">
                                <img src="https://i.pravatar.cc/150?img=33" class="w-28 h-28 rounded-full border-4 border-yellow-400 object-cover shadow-lg">
                                <div class="absolute bottom-0 right-0 bg-yellow-400 text-white text-xs px-2 py-0.5 rounded-full font-bold border border-white">#1</div>
                            </div>
                            <h3 class="text-xl font-bold text-secondary">Youssef B.</h3>
                            <p class="text-sm text-slate-500 mb-4">YouCode Fishing</p>
                            <div class="bg-white rounded-xl p-4 shadow-sm border border-slate-100">
                                <p class="text-3xl font-extrabold text-primary">2,140 <span class="text-sm text-slate-400 font-normal">pts</span></p>
                                <p class="text-xs text-green-600 font-bold mt-1"><i class="fa-solid fa-arrow-up"></i> +450 pts cette semaine</p>
                            </div>
                        </div>

                        <div class="order-3 bg-white p-6 rounded-2xl border border-slate-200 shadow-soft text-center relative mt-8 md:mt-0 transform hover:-translate-y-2 transition-transform duration-300">
                            <div class="absolute -top-5 left-1/2 -translate-x-1/2 bg-amber-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold border-4 border-slate-50 text-lg shadow-md">3</div>
                            <div class="mb-4">
                                <img src="https://i.pravatar.cc/150?img=5" class="w-20 h-20 rounded-full mx-auto border-4 border-slate-100 object-cover">
                            </div>
                            <h3 class="font-bold text-lg text-secondary">Sarah L.</h3>
                            <p class="text-xs text-slate-500 mb-3">Tanger Pêche</p>
                            <div class="bg-slate-50 rounded-xl p-3">
                                <p class="text-2xl font-bold text-secondary">1,620 <span class="text-xs text-slate-400 font-normal">pts</span></p>
                            </div>
                        </div>

                    </div>

                    <div class="bg-white rounded-2xl border border-slate-200 shadow-soft overflow-hidden">
                        <div class="p-6 border-b border-slate-100 bg-slate-50/50">
                            <h3 class="font-bold text-lg text-secondary">Classement Complet</h3>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead class="text-xs uppercase font-semibold text-slate-500 bg-slate-50">
                                    <tr>
                                        <th class="px-6 py-4">Rang</th>
                                        <th class="px-6 py-4">Pêcheur</th>
                                        <th class="px-6 py-4 text-center">Prises</th>
                                        <th class="px-6 py-4">Big Fish (Départage)</th>
                                        <th class="px-6 py-4 text-right">Points Totaux</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-sm">
                                    
                                    <tr class="bg-blue-50/50 border-l-4 border-primary">
                                        <td class="px-6 py-4 font-bold text-primary">#4</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <img src="https://ui-avatars.com/api/?name=Ilyas+Doughmi&background=0284c7&color=fff" class="w-8 h-8 rounded-full">
                                                <div>
                                                    <p class="font-bold text-secondary">Ilyas Doughmi (Moi)</p>
                                                    <p class="text-xs text-slate-500">YouCode</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-center font-medium">12</td>
                                        <td class="px-6 py-4 text-slate-600">Brochet 82cm</td>
                                        <td class="px-6 py-4 text-right font-bold text-secondary">1,240 pts</td>
                                    </tr>

                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 font-bold text-slate-500">#5</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <img src="https://i.pravatar.cc/150?img=68" class="w-8 h-8 rounded-full">
                                                <div>
                                                    <p class="font-bold text-secondary">Karim Ben.</p>
                                                    <p class="text-xs text-slate-500">Indépendant</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-center font-medium">9</td>
                                        <td class="px-6 py-4 text-slate-600">Bar 65cm</td>
                                        <td class="px-6 py-4 text-right font-bold text-secondary">1,100 pts</td>
                                    </tr>

                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 font-bold text-slate-500">#6</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <img src="https://i.pravatar.cc/150?img=11" class="w-8 h-8 rounded-full">
                                                <div>
                                                    <p class="font-bold text-secondary">Ahmed T.</p>
                                                    <p class="text-xs text-slate-500">Club Safi</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-center font-medium">14</td>
                                        <td class="px-6 py-4 text-slate-600">Sar 30cm</td>
                                        <td class="px-6 py-4 text-right font-bold text-secondary">980 pts</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        
                        <div class="p-4 border-t border-slate-100 flex justify-center">
                            <button class="text-sm text-slate-500 hover:text-primary font-medium">Charger plus...</button>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</body>
</html>