<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Règlements de Scoring | FishAdmin</title>
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
        $activePage = 'rules';
        require_once 'app/views/admin/sidebar.php';
        ?>

        <div class="flex-1 flex flex-col lg:pl-64 h-full w-full">
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Règlements & Scoring</h1>
                <a href="/fishmasters/admin/rules_add"
                    class="bg-accent hover:bg-sky-600 text-white px-4 py-2 rounded-xl font-bold text-sm transition-all flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Nouveau Règlement
                </a>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($ScoringRules as $ScoringRule): ?>
                    <div
                        class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:border-accent/50 transition-all flex flex-col group">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 bg-blue-50 text-accent rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase">Standard Mer</span>
                        </div>
                        <h3 class="font-bold text-slate-800 mb-2"><?= $ScoringRule->rulename ?></h3>
                        <p class="text-slate-500 text-sm mb-6 flex-1"><?= $ScoringRule->ruledescription ?></p>




                        <div class="flex gap-2 border-t border-slate-50 pt-4">

                            <form action="/fishmasters/index.php?url=Admin/rules_edit" method="POST" class="flex-1">
                                <input type="hidden" name="editId" value="<?= $ScoringRule->ruleid ?>">
                                <button type="submit"
                                    class="w-full py-2 text-xs font-bold text-accent hover:bg-blue-50 rounded-lg transition-all">
                                    Éditer
                                </button>
                            </form>

                            <form action="/fishmasters/index.php?url=Admin/rules_delete" method="POST"
                                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce règlement ?');"
                                class="flex-1">
                                <input type="hidden" name="ruleId" value="<?= $ScoringRule->ruleid ?>">
                                <button type="submit"
                                    class="w-full py-2 text-xs font-bold text-red-600 hover:bg-red-50 rounded-lg transition-all">
                                    Supprimer
                                </button>
                            </form>

                        </div>

                    </div>
                    <?php endforeach ?>



                </div>

            </main>
        </div>
    </div>
</body>

</html>