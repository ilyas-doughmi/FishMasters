<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Espèces de Poissons | FishAdmin</title>
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
        $activePage = 'species';
        require_once 'app/views/admin/sidebar.php';
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Gestion des Espèces</h1>
                <a href="/fishmasters/admin/species_add"
                    class="bg-accent hover:bg-sky-600 text-white px-4 py-2 rounded-xl font-bold text-sm transition-all flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Ajouter une espèce
                </a>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">

                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider font-bold">
                            <tr>
                                <th class="px-6 py-4">Icône / Image</th>
                                <th class="px-6 py-4">Nom de l'espèce</th>
                                <th class="px-6 py-4">Taille Min. (cm)</th>
                                <th class="px-6 py-4">Coefficient</th>
                                <th class="px-6 py-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">

                            <?php foreach ($SpeciesModel as $species): ?>

                            <tr class="hover:bg-slate-50 transition-colors">

                                <!-- ICON -->
                                <td class="px-6 py-4">
                                    <div
                                        class="w-10 h-10 bg-blue-50 text-accent rounded-lg flex items-center justify-center font-bold">
                                        <?= strtoupper(substr($species->speciesname, 0, 2)) ?>
                                    </div>
                                </td>

                                <!-- NAME -->
                                <td class="px-6 py-4">
                                    <p class="font-bold text-slate-700">
                                        <?= htmlspecialchars($species->speciesname) ?>
                                    </p>
                                </td>

                                <!-- MIN SIZE -->
                                <td class="px-6 py-4 font-bold text-slate-800">
                                    <?= $species->speciesminsize ?> cm
                                </td>

                                <!-- COEFFICIENT -->
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-slate-100 rounded-md text-xs font-bold text-slate-600">
                                        x <?= $species->coefficient ?>
                                    </span>
                                </td>


                                <!-- ACTIONS -->
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">

                                        <!-- EDIT -->
                                        <form action="/fishmasters/index.php?url=Admin/species_edit" method="POST">
                                            <input type="hidden" name="speciesId" value="<?= $species->speciesid ?>">
                                            <button type="submit" class="w-8 h-8 flex items-center justify-center
                               text-slate-400 hover:text-accent hover:bg-blue-50
                               rounded-lg transition-all">
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                        </form>

                                        <!-- DELETE -->
                                        <form action="/fishmasters/index.php?url=Admin/species_delete" method="POST"
                                            onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette espèce ?');">
                                            <input type="hidden" name="speciesId" value="<?= $species->speciesid ?>">
                                            <button type="submit" class="w-8 h-8 flex items-center justify-center
                               text-slate-400 hover:text-red-500 hover:bg-red-50
                               rounded-lg transition-all">
                                                <i class="fa-solid fa-eye-slash"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>

                            </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>
                </div>

            </main>
        </div>
    </div>
</body>

</html>