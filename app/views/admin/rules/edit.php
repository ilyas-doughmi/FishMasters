<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier Règlement | FishAdmin</title>
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

            <!-- Header -->
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10">
                <h1 class="text-xl font-bold text-slate-800">Modifier le règlement</h1>
                <a href="/fishmasters/admin/rules"
                    class="text-slate-500 hover:text-accent font-medium text-sm transition-colors">
                    Annuler
                </a>
            </header>

            <main class="flex-1 overflow-y-auto p-6 lg:p-10">
                <div class="max-w-3xl mx-auto">

                    <form action="/fishmasters/index.php?url=Admin/rules_update" method="POST"
                        class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-8">

                        <input type="hidden" name="ruleId" value="<?= $rule->ruleid ?>">

                        <div class="space-y-4">
                            <h3 class="text-lg font-bold text-slate-800 border-b border-slate-100 pb-2">
                                Informations du règlement
                            </h3>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">
                                    Nom du règlement
                                </label>
                                <input type="text" name="ruleName" value="<?= htmlspecialchars($rule->rulename) ?>"
                                    required
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">
                                    Description
                                </label>
                                <textarea name="ruleDescription" rows="4" required
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all resize-none"><?= htmlspecialchars($rule->ruledescription) ?></textarea>
                            </div>
                        </div>

                        <div class="pt-6 flex justify-end gap-4">
                            <a href="/fishmasters/admin/rules"
                                class="px-6 py-3 border border-slate-200 text-slate-600 font-bold rounded-xl hover:bg-slate-50 transition-colors">
                                Annuler
                            </a>

                            <button type="submit"
                                class="px-6 py-3 bg-accent hover:bg-sky-600 text-white font-bold rounded-xl shadow-lg shadow-accent/20 transition-all transform hover:-translate-y-1">
                                <i class="fa-solid fa-pen-to-square mr-2"></i>
                                Mettre à jour
                            </button>
                        </div>

                    </form>
                </div>
            </main>
        </div>
    </div>
</body>

</html>