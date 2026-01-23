

<?php
include_once "../../app/models/FisherModel.php";
include_once "../../app/models/FisherController.php";

$fullname=$_SESSION['fullname'];
$id=$_SESSION['id'];

$fisher=new Fisher();
$row=$fisher->show('userid',$id);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil | FishMasters</title>
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
        $activePage = 'profile';
        require_once 'app/views/fisher/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10 z-10">
                <h1 class="text-xl font-bold text-secondary">Paramètres du profil</h1>
                <div class="flex items-center gap-3">
                    <span class="text-sm font-bold text-secondary hidden md:block">Ilyas Doughmi</span>
                    <img src="https://ui-avatars.com/api/?name=Ilyas&background=0284c7&color=fff" class="w-10 h-10 rounded-full border-2 border-white shadow-sm">
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                <div class="max-w-4xl mx-auto">
                    
                    <form action="#" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        
                        <div class="lg:col-span-1 space-y-6">
                            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm text-center">
                                <div class="relative w-32 h-32 mx-auto mb-4">
                                    <img src="https://ui-avatars.com/api/?name=Ilyas&background=0284c7&color=fff&size=128" class="w-full h-full rounded-full border-4 border-slate-50 object-cover">
                                    <button class="absolute bottom-0 right-0 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center hover:bg-sky-600 transition-colors border-2 border-white">
                                        <i class="fa-solid fa-pencil text-xs"></i>
                                    </button>
                                </div>
                                <h2 class="text-xl font-bold text-secondary"><?=$username?></h2>
                                <p class="text-slate-500 text-sm mb-4">Membre </p>
                                <div class="inline-flex items-center px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                    <i class="fa-solid fa-check-circle mr-1"></i> Pêcheur Vérifié
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-2 bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-6">
                            <h3 class="text-lg font-bold text-secondary border-b border-slate-100 pb-4">Informations Personnelles</h3>
                            
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5"><?=$username?></label>
                                    <input type="text" value="Ilyas" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5"><?=$username?></label>
                                    <input type="text" value="Doughmi" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Nom du Club</label>
                                    <input type="text" value="YouCode Fishing Club" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Région</label>
                                    <select class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                        <option>Casablanca-Settat</option>
                                        <option selected>Marrakech-Safi</option>
                                        <option>Souss-Massa</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Technique favorite</label>
                                <select class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                    <option selected>Surfcasting (Mer)</option>
                                    <option>Spinning (Leurres)</option>
                                    <option>Coup (Eau douce)</option>
                                </select>
                            </div>

                            <div class="pt-6 flex justify-end gap-4">
                                <button type="button" class="px-6 py-3 border border-slate-200 text-slate-600 font-bold rounded-xl hover:bg-slate-50 transition-colors">Annuler</button>
                                <button type="submit" class="px-6 py-3 bg-secondary hover:bg-slate-800 text-white font-bold rounded-xl shadow-lg shadow-slate-900/10 transition-colors">Enregistrer</button>
                            </div>
                        </div>

                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>