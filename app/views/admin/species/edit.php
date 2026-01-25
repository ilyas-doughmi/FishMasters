<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier espèce | FishAdmin</title>
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
                <h1 class="text-xl font-bold text-slate-800">Modifier l’espèce</h1>
                <a href="/fishmasters/admin/species" class="text-slate-500 hover:text-accent text-sm font-medium">
                    Annuler
                </a>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                <div class="max-w-3xl mx-auto">

                    <form action="/fishmasters/index.php?url=Admin/species_update" method="POST"
                        class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-8">

                        <input type="hidden" name="speciesId" value="<?= $species->speciesid ?>">

                        <div>
                            <label class="block text-sm font-bold mb-2">Nom de l’espèce</label>
                            <input type="text" name="speciesName" value="<?= htmlspecialchars($species->speciesname) ?>"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200">
                        </div>

                        <div>
                            <label class="block text-sm font-bold mb-2">Taille minimale (cm)</label>
                            <input type="number" step="0.01" name="speciesMinSize"
                                value="<?= $species->speciesminsize ?>"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200">
                        </div>

                        <div>
                            <label class="block text-sm font-bold mb-2">Coefficient</label>
                            <input type="number" step="0.01" name="coefficient" value="<?= $species->coefficient ?>"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200">
                        </div>

                        <div class="pt-6 flex justify-end">
                            <button type="submit"
                                class="px-6 py-3 bg-accent hover:bg-sky-600 text-white font-bold rounded-xl transition-all">
                                <i class="fa-solid fa-pen-to-square mr-2"></i> Mettre à jour
                            </button>
                        </div>

                    </form>
                </div>
            </main>
        </div>
    </div>
</body>

</html>