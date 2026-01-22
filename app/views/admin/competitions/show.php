<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Gestion des Compétitions | FishAdmin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
    tailwind.config = {
        theme: {
            fontFamily: {
                sans: ['Plus Jakarta Sans', 'sans-serif']
            },
            extend: {
                colors: {
                    primary: '#0f172a',
                    accent: '#0284c7'
                }
            }
        }
    }
    </script>
</head>

<body class="bg-slate-50 text-slate-900 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">

        <?php
        $activePage = 'competitions';
        require_once 'app/views/admin/sidebar.php';
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Toutes les Compétitions</h1>
                <div class="flex gap-3">
                    <button onclick="document.getElementById('addModal').classList.remove('hidden')"
                        class="bg-accent hover:bg-sky-600 text-white px-4 py-2 rounded-xl font-bold text-sm transition-all flex items-center gap-2">
                        <i class="fa-solid fa-plus"></i> Ajouter
                    </button>
                    <a href="/fishmasters/admin/competitions"
                        class="px-4 py-2 bg-white border border-slate-200 text-slate-600 rounded-xl font-bold text-sm hover:bg-slate-50 transition-all">Retour</a>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">

                <!-- Competitions Table -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                        <div class="relative w-72">
                            <i
                                class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" id="searchInput" placeholder="Rechercher..."
                                class="w-full pl-11 pr-4 py-2 rounded-xl border border-slate-200 focus:border-accent outline-none text-sm transition-all">
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="px-4 py-2 text-sm font-bold text-slate-600 hover:bg-slate-50 rounded-lg border border-slate-200">Filtres</button>
                        </div>
                    </div>

                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider font-bold">
                            <tr>
                                <th class="px-6 py-4">Nom</th>
                                <th class="px-6 py-4">Lieu</th>
                                <th class="px-6 py-4">Type</th>
                                <th class="px-6 py-4">Catégorie</th>
                                <th class="px-6 py-4">Dates</th>
                                <th class="px-6 py-4">Statut</th>
                                <th class="px-6 py-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <?php if (!empty($competitions)): ?>
                            <?php foreach ($competitions as $comp): ?>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-bold text-slate-700">
                                    <?php echo htmlspecialchars($comp->competitionname); ?></td>
                                <td class="px-6 py-4 text-slate-500">
                                    <?php echo htmlspecialchars($comp->competitionlocation); ?></td>
                                <td class="px-6 py-4 text-slate-500">
                                    <?php echo htmlspecialchars($comp->competitiontype); ?></td>
                                <td class="px-6 py-4 text-slate-500">
                                    <?php echo htmlspecialchars($comp->competitioncategory); ?></td>
                                <td class="px-6 py-4 text-slate-500 text-xs">
                                    <?php echo date('d/m/Y', strtotime($comp->competitionstartdate)); ?> -
                                    <?php echo date('d/m/Y', strtotime($comp->competitionenddate)); ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php
                                            $statusClass = '';
                                            $statusText = '';
                                            if ($comp->competitionstatus === 'inProgress') {
                                                $statusClass = 'bg-green-100 text-green-700';
                                                $statusText = 'Actif';
                                            } elseif ($comp->competitionstatus === 'done') {
                                                $statusClass = 'bg-slate-100 text-slate-500';
                                                $statusText = 'Terminée';
                                            } else {
                                                $statusClass = 'bg-blue-100 text-blue-700';
                                                $statusText = 'Brouillon';
                                            }
                                            ?>
                                    <span
                                        class="px-3 py-1 <?php echo $statusClass; ?> rounded-full text-[10px] font-bold uppercase tracking-wider"><?php echo $statusText; ?></span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button
                                            class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-accent hover:bg-blue-50 rounded-lg transition-all"
                                            title="Éditer">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button
                                            class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all"
                                            title="Supprimer">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <button
                                            class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-accent hover:bg-blue-50 rounded-lg transition-all"
                                            title="Détails">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <tr>
                                <td colspan="7" class="px-6 py-8 text-center text-slate-500">
                                    <i class="fa-solid fa-inbox text-3xl mb-2 opacity-50"></i>
                                    <p class="mt-2">Aucune compétition trouvée</p>
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <div class="p-6 border-t border-slate-100 flex items-center justify-between text-sm text-slate-500">
                        <span>Total: <?php echo count($competitions); ?> compétition(s)</span>
                    </div>
                </div>

            </main>

            <!-- Add Competition Modal -->
            <div id="addModal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50">
                <div class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
                    <div class="sticky top-0 bg-white border-b border-slate-200 p-6 flex items-center justify-between">
                        <h2 class="text-xl font-bold text-slate-800">Ajouter une compétition</h2>
                        <button onclick="document.getElementById('addModal').classList.add('hidden')"
                            class="text-slate-400 hover:text-slate-600">
                            <i class="fa-solid fa-xmark text-2xl"></i>
                        </button>
                    </div>

                    <form method="POST" action="/fishmasters/admin/competitions_create" class="p-8 space-y-6">

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Nom de la compétition *</label>
                            <input type="text" name="competitionName" required placeholder="Ex: Grand Prix 2026"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all">
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Type *</label>
                                <select name="competitionType" required
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white focus:border-accent outline-none">
                                    <option value="">Sélectionner...</option>
                                    <option value="National">National</option>
                                    <option value="Regional">Régional</option>
                                    <option value="Local">Local</option>
                                    <option value="International">International</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Catégorie *</label>
                                <select name="competitionCategory" required
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white focus:border-accent outline-none">
                                    <option value="">Sélectionner...</option>
                                    <option value="Sea Fishing">Pêche en Mer</option>
                                    <option value="Freshwater">Eau Douce</option>
                                    <option value="Mixed">Mixte</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Lieu / Spot *</label>
                            <input type="text" name="competitionLocation" required placeholder="Ex: Plage d'Agadir"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent outline-none">
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Date de début *</label>
                                <input type="date" name="competitionStartDate" required
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Date de fin *</label>
                                <input type="date" name="competitionEndDate" required
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Statut *</label>
                            <select name="competitionStatus" required
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white focus:border-accent outline-none">
                                <option value="notStarted">À venir</option>
                                <option value="inProgress">En cours</option>
                                <option value="done">Terminée</option>
                            </select>
                        </div>

                        <div class="flex gap-4 justify-end pt-4 border-t border-slate-200">
                            <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')"
                                class="px-6 py-3 border border-slate-200 text-slate-600 font-bold rounded-xl hover:bg-slate-50 transition-colors">
                                Annuler
                            </button>
                            <button type="submit"
                                class="px-6 py-3 bg-accent hover:bg-sky-600 text-white font-bold rounded-xl shadow-lg shadow-accent/20 transition-all transform hover:-translate-y-1">
                                <i class="fa-solid fa-save mr-2"></i> Créer
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>