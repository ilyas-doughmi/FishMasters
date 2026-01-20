<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Génération de Rapports PDF | FishAdmin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        $activePage = 'reports';
        require_once 'app/views/admin/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800 italic underline decoration-accent">Génération de Dossiers PDF</h1>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                
                <div class="max-w-2xl mx-auto space-y-8">
                    
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm italic text-center">
                        <div class="w-20 h-20 bg-red-50 text-red-500 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6">
                            <i class="fa-solid fa-file-pdf"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-2">Export Officiel de Compétition</h3>
                        <p class="text-slate-500 text-sm mb-8">Générez un dossier complet contenant les classements, les podiums, les records et les statistiques détaillées.</p>
                        
                        <div class="space-y-4 mb-8 text-left max-w-sm mx-auto">
                            <label class="block">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mb-1">Sélectionner la compétition</span>
                                <select class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:border-accent outline-none">
                                    <option>Marathon Agadir 2026</option>
                                    <option>Trophée du Bassin</option>
                                </select>
                            </label>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <label class="flex items-center gap-2 p-3 border border-slate-100 rounded-xl cursor-pointer hover:bg-slate-50">
                                    <input type="checkbox" checked class="w-4 h-4 rounded text-accent">
                                    <span class="text-xs font-medium">Classements</span>
                                </label>
                                <label class="flex items-center gap-2 p-3 border border-slate-100 rounded-xl cursor-pointer hover:bg-slate-50">
                                    <input type="checkbox" checked class="w-4 h-4 rounded text-accent">
                                    <span class="text-xs font-medium">Stats</span>
                                </label>
                            </div>
                        </div>

                        <button class="w-full py-4 bg-primary hover:bg-slate-800 text-white font-bold rounded-2xl shadow-xl shadow-primary/20 transition-all flex items-center justify-center gap-2">
                            <i class="fa-solid fa-gear animate-spin-slow"></i> Générer le PDF
                        </button>
                    </div>

                </div>

            </main>
        </div>
    </div>

    <style>
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-spin-slow {
            animation: spin-slow 8s linear infinite;
        }
    </style>
</body>
</html>
