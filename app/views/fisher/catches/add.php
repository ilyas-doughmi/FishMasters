<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Prise | FishMasters</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                extend: { colors: { primary: '#0284c7', secondary: '#0f172a' } }
            }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-900 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        
        <?php 
        $activePage = 'catches';
        require_once 'app/views/fisher/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10 z-10">
                <h1 class="text-xl font-bold text-secondary">Déclarer une prise</h1>
                <div class="flex items-center gap-3">
                    <span class="text-sm font-bold text-secondary hidden md:block">Ilyas Doughmi</span>
                    <img src="https://ui-avatars.com/api/?name=Ilyas&background=0284c7&color=fff" class="w-10 h-10 rounded-full border-2 border-white shadow-sm">
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                <div class="max-w-2xl mx-auto">
                    
                    <form action="#" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-6">
                        
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Compétition en cours <span class="text-red-500">*</span></label>
                            <select class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                <option value="">-- Sélectionner une compétition --</option>
                                <option value="1">Marathon Agadir (En cours)</option>
                                <option value="2">Sortie Libre (Hors compétition)</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Espèce <span class="text-red-500">*</span></label>
                                <select class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                    <optgroup label="Mer">
                                        <option>Loup / Bar</option>
                                        <option>Dorade Royale</option>
                                        <option>Sar</option>
                                    </optgroup>
                                    <optgroup label="Eau Douce">
                                        <option>Black Bass</option>
                                        <option>Carpe</option>
                                        <option>Brochet</option>
                                    </optgroup>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Preuve Photo <span class="text-red-500">*</span></label>
                                <label class="flex flex-col items-center justify-center w-full h-[52px] border-2 border-slate-300 border-dashed rounded-xl cursor-pointer hover:bg-slate-50 hover:border-primary transition-colors">
                                    <div class="flex items-center gap-2 text-slate-500">
                                        <i class="fa-solid fa-camera"></i>
                                        <span class="text-sm">Choisir un fichier</span>
                                    </div>
                                    <input type="file" class="hidden" accept="image/*" />
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Poids (kg)</label>
                                <input type="number" step="0.01" placeholder="0.00" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Taille (cm)</label>
                                <input type="number" placeholder="0" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Lieu / Spot</label>
                                <div class="relative">
                                    <i class="fa-solid fa-location-dot absolute left-4 top-4 text-slate-400"></i>
                                    <input type="text" placeholder="Ex: Plage Imsouane, Secteur B" class="w-full pl-10 px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between border border-slate-200 rounded-xl px-4 py-3">
                                <div>
                                    <p class="font-bold text-sm text-slate-700">No-Kill (Relâché)</p>
                                    <p class="text-xs text-slate-500">Le poisson a été remis à l'eau vivants.</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
                                </label>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full bg-primary hover:bg-sky-600 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all transform hover:-translate-y-1 flex items-center justify-center gap-2">
                                <i class="fa-solid fa-paper-plane"></i>
                                Envoyer pour validation
                            </button>
                            <p class="text-xs text-center text-slate-400 mt-3">Votre prise sera examinée par un administrateur.</p>
                        </div>

                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>