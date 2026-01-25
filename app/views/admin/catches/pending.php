<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Validation des Prises | FishAdmin</title>
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
        $activePage = 'catches';
        require_once 'app/views/admin/sidebar.php';
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold text-slate-800">Prises en attente</h1>
                    <span class="bg-accent text-white text-[10px] px-2 py-0.5 rounded-full font-bold">12</span>
                </div>
                <div class="flex items-center gap-4">
                    <select
                        class="text-sm bg-slate-50 border-slate-200 rounded-xl px-3 py-1.5 focus:ring-accent outline-none">
                        <option>Toutes les compétitions</option>
                        <option>Marathon Agadir</option>
                    </select>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                    <?php foreach ($catches as $catch): ?>
                    <div
                        class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden group hover:border-accent transition-all">
                        <!-- Catch Photo -->
                        <div class="relative h-48 overflow-hidden">
                            <img src="<?= htmlspecialchars($catch['catchPhoto']) ?>"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>

                        <div class="p-6">
                            <!-- Fisher Info -->
                            <div class="flex items-center gap-3 mb-4">
                                <?php
                                    $fisherName = $catch['userFullName'] ?? 'Pêcheur';
                                    $fisherAvatar = $catch['userPhoto'] ?? 'https://ui-avatars.com/api/?name=' . urlencode($fisherName) . '&background=random';
                                    ?>
                                <img src="<?= $fisherAvatar ?>" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="text-xs font-bold text-slate-800"><?= htmlspecialchars($fisherName) ?></p>
                                    <p class="text-[10px] text-slate-400">Pêcheur •
                                        <?= date('d M • H:i', strtotime($catch['catchCreatedAt'])) ?></p>
                                </div>
                            </div>

                            <!-- Catch Details -->
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-slate-50 p-3 rounded-xl border border-slate-100">
                                    <p class="text-[10px] text-slate-400 uppercase font-bold mb-1">Espèce</p>
                                    <p class="text-sm font-bold text-slate-800">
                                        <?= htmlspecialchars($catch['speciesName'] ?? 'Inconnu') ?></p>
                                </div>
                                <div class="bg-slate-50 p-3 rounded-xl border border-slate-100">
                                    <p class="text-[10px] text-slate-400 uppercase font-bold mb-1">Poids</p>
                                    <p class="text-sm font-bold text-slate-800">
                                        <?= number_format($catch['catchWeight'], 2) ?> kg</p>
                                </div>
                                <div class="bg-slate-50 p-3 rounded-xl border border-slate-100">
                                    <p class="text-[10px] text-slate-400 uppercase font-bold mb-1">Taille</p>
                                    <p class="text-sm font-bold text-slate-800">
                                        <?= number_format($catch['catchLength'], 2) ?> cm</p>
                                </div>
                                <div class="bg-slate-50 p-3 rounded-xl border border-slate-100">
                                    <p class="text-[10px] text-slate-400 uppercase font-bold mb-1">Libéré ?</p>
                                    <p class="text-sm font-bold text-slate-800">
                                        <?= $catch['catchIsReleased'] ? 'Oui' : 'Non' ?></p>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="flex gap-3">
                                <form action="/fishmasters/index.php?url=Admin/catch_reject" method="POST"
                                    class="flex-1">
                                    <input type="hidden" name="catchId" value="<?= $catch['catchId'] ?>">
                                    <button type="submit"
                                        class="w-full py-3 bg-red-50 text-red-600 rounded-xl text-xs font-bold hover:bg-red-100 transition-all uppercase tracking-wider">Refuser</button>
                                </form>
                                <form action="/fishmasters/index.php?url=Admin/catch_validate" method="POST"
                                    class="flex-1">
                                    <input type="hidden" name="catchId" value="<?= $catch['catchId'] ?>">
                                    <button type="submit"
                                        class="w-full py-3 bg-accent text-white rounded-xl text-xs font-bold hover:bg-sky-600 transition-all uppercase tracking-wider shadow-lg shadow-accent/20">Valider</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>


            </main>
        </div>
    </div>
</body>

</html>