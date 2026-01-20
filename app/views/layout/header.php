<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FishMasters | L'Élite de la Pêche Sportive</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                extend: {
                    colors: {
                        primary: '#0284c7',
                        secondary: '#0f172a',
                        surface: '#ffffff',
                        subtle: '#f8fafc',
                    },
                    boxShadow: {
                        'glow': '0 0 20px rgba(2, 132, 199, 0.3)',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-surface text-secondary antialiased overflow-x-hidden">

    <nav class="fixed w-full z-50 bg-surface/90 backdrop-blur-md border-b border-slate-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between gap-8">
            
            <a href="/fishmasters/" class="flex items-center gap-2 shrink-0">
                <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white shadow-glow">
                    <i class="fa-solid fa-fish-fins text-xl"></i>
                </div>
                <span class="font-bold text-xl tracking-tight text-secondary hidden sm:block">FishMasters</span>
            </a>

            <div class="hidden md:flex items-center gap-6 font-medium text-slate-500 text-sm lg:text-base">
                <a href="/fishmasters/home/competitions" class="hover:text-primary transition-colors">Compétitions</a>
                <a href="/fishmasters/home/rankings" class="hover:text-primary transition-colors">Classements</a>
                <a href="/fishmasters/home/fishers" class="hover:text-primary transition-colors">Nos Pêcheurs</a>
            </div>

            <div class="hidden lg:flex flex-1 max-w-sm relative group">
                <i class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary"></i>
                <input type="text" placeholder="Rechercher un pêcheur, une compétition..." 
                       class="w-full pl-10 pr-4 py-2 rounded-full bg-slate-100 border-none focus:ring-2 focus:ring-primary/20 focus:bg-white transition-all text-sm outline-none">
            </div>

            <div class="flex items-center gap-4 shrink-0">
                <?php if (isset($_SESSION['user'])): ?>
                    <?php 
                        $dashboardLink = $_SESSION['user']['role'] === 'admin' ? '/fishmasters/admin/index' : '/fishmasters/fisher/index'; 
                    ?>
                    <a href="<?= $dashboardLink ?>" class="flex items-center gap-2 bg-blue-50 text-primary px-4 py-2 rounded-full font-bold text-sm hover:bg-blue-100 transition-colors">
                        <i class="fa-solid fa-gauge"></i> Mon Espace
                    </a>
                <?php else: ?>
                    <a href="/fishmasters/auth/login" class="hidden md:block font-bold text-slate-600 hover:text-primary text-sm">Connexion</a>
                    <a href="/fishmasters/auth/register" class="bg-secondary hover:bg-slate-800 text-white px-5 py-2.5 rounded-full font-bold text-sm transition-all transform hover:scale-105 shadow-lg shadow-slate-900/20">
                        Rejoindre
                    </a>
                <?php endif; ?>
                
                <button class="md:hidden text-2xl text-secondary"><i class="fa-solid fa-bars"></i></button>
            </div>
        </div>
    </nav>
    
    <div class="h-20"></div> 
