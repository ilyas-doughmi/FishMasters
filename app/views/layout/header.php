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
                fontFamily: {
                    sans: ['Plus Jakarta Sans', 'sans-serif'],
                },
                extend: {
                    colors: {
                        primary: '#0284c7',
                        secondary: '#0f172a',
                        surface: '#ffffff',
                        subtle: '#f8fafc',
                    },
                    boxShadow: {
                        'soft': '0 20px 40px -15px rgba(0, 0, 0, 0.05)',
                        'glow': '0 0 20px rgba(2, 132, 199, 0.3)',
                    }
                }
            }
        }
    </script>
    
    <style>
        .grid-pattern {
            background-image: radial-gradient(#e2e8f0 1px, transparent 1px);
            background-size: 30px 30px;
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #0284c7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
    </style>
</head>
<body class="bg-surface text-secondary antialiased overflow-x-hidden">

    <nav class="fixed w-full z-50 bg-surface/80 backdrop-blur-md border-b border-slate-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white shadow-glow">
                    <i class="fa-solid fa-fish-fins text-xl"></i>
                </div>
                <span class="font-bold text-xl tracking-tight text-secondary">FishMasters</span>
            </div>

            <div class="hidden md:flex items-center gap-8 font-medium text-slate-500">
                <a href="#" class="hover:text-primary transition-colors">Compétitions</a>
                <a href="#" class="hover:text-primary transition-colors">Classements</a>
                <a href="#" class="hover:text-primary transition-colors">À propos</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="/fishmasters/auth/login" class="hidden md:block font-semibold text-slate-600 hover:text-primary">Connexion</a>
                <a href="/fishmasters/auth/register" class="bg-secondary hover:bg-slate-800 text-white px-6 py-2.5 rounded-full font-bold transition-all transform hover:scale-105 shadow-lg shadow-slate-900/20">
                    S'inscrire
                </a>
            </div>
        </div>
    </nav>
