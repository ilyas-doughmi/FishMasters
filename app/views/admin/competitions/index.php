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
                <h1 class="text-xl font-bold text-slate-800">Compétitions</h1>
                <a href="/fishmasters/admin/competitions_add"
                    class="bg-accent hover:bg-sky-600 text-white px-4 py-2 rounded-xl font-bold text-sm transition-all flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Créer
                </a>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                        <div class="relative w-72">
                            <i
                                class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" placeholder="Rechercher..."
                                class="w-full pl-11 pr-4 py-2 rounded-xl border border-slate-200 focus:border-accent outline-none text-sm transition-all">
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="px-4 py-2 text-sm font-bold text-slate-600 hover:bg-slate-50 rounded-lg border border-slate-200">Filtres</button>
                            <button
                                class="px-4 py-2 text-sm font-bold text-slate-600 hover:bg-slate-50 rounded-lg border border-slate-200">Exporter</button>
                        </div>
                    </div>

                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider font-bold">
                            <tr>
                                <th class="px-6 py-4">Nom de la compétition</th>
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
                                                $statusClass = 'bg-red-100 text-red-700';
                                                $statusText = 'Not Started';
                                            }
                                            ?>
                                    <span
                                        class="px-3 py-1 <?php echo $statusClass; ?> rounded-full text-[10px] font-bold uppercase tracking-wider"><?php echo $statusText; ?></span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">

                                        <form action="/fishmasters/index.php?url=admin/competitions_edit" method="POST">
                                            <input type="hidden" name="editId" value="<?= $comp->competitionid ?>">
                                            <button type="submit"
                                                class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-accent hover:bg-blue-50 rounded-lg transition-all">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </form>

                                        <form action="/fishmasters/index.php?url=admin/competitions_delete"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this competition?');">
                                            <input type="hidden" name="id" value="<?= $comp->competitionid ?>">
                                            <button type="submit"
                                                class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>

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
        </div>
    </div>
</body>

</html>