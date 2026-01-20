<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Communication & Emailing | FishAdmin</title>
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
        $activePage = 'emails';
        require_once 'app/views/admin/sidebar.php'; 
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Emailing & Campagnes</h1>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                
                <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
                    
                    <div class="lg:col-span-2 space-y-6">
                        <form class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-6 italic">
                            <div>
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Destinataires</label>
                                <select class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:border-accent outline-none font-bold text-slate-700">
                                    <option>Tous les pêcheurs inscrits</option>
                                    <option>Participants (Marathon Agadir)</option>
                                    <option>Organisateurs uniquement</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Sujet du message</label>
                                <input type="text" placeholder="Ex: Publication des résultats officiels" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent outline-none transition-all">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Corps de l'email</label>
                                <textarea rows="8" placeholder="Écrivez votre message ici..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent outline-none transition-all"></textarea>
                            </div>

                            <button type="submit" class="w-full py-4 bg-accent hover:bg-sky-600 text-white font-bold rounded-xl shadow-lg shadow-accent/20 transition-all transform hover:-translate-y-1">
                                <i class="fa-solid fa-paper-plane mr-2"></i> Envoyer la campagne
                            </button>
                        </form>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                            <h3 class="font-bold text-slate-800 mb-4 text-sm">Modèles rapides</h3>
                            <div class="space-y-3">
                                <button class="w-full p-3 bg-slate-50 hover:bg-slate-100 rounded-xl text-left transition-all">
                                    <p class="text-[10px] font-bold text-accent uppercase">Automatique</p>
                                    <p class="text-xs font-medium text-slate-600">Confirmation d'inscription</p>
                                </button>
                                <button class="w-full p-3 bg-slate-50 hover:bg-slate-100 rounded-xl text-left transition-all">
                                    <p class="text-[10px] font-bold text-emerald-500 uppercase">Rappel</p>
                                    <p class="text-xs font-medium text-slate-600">Compétition J-1</p>
                                </button>
                            </div>
                        </div>

                        <div class="bg-primary p-6 rounded-2xl shadow-xl shadow-primary/20 text-white italic">
                            <h3 class="font-bold mb-2">Historique</h3>
                            <p class="text-[10px] text-white/60 mb-6">Derniers envois réussis</p>
                            <div class="space-y-4">
                                <div class="border-l-2 border-accent pl-3">
                                    <p class="text-xs font-bold">Résultats Agadir</p>
                                    <p class="text-[10px] text-white/50">Envoyé à 124 personnes</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </main>
        </div>
    </div>
</body>
</html>
