<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Application Laravel')</title>

    <!-- Import de Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1D4ED8',
                        secondary: '#9333EA',
                    },
                },
            },
        };
    </script>
</head>
<body class="flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-primary text-white py-4">
        <div class="container mx-auto">
            <nav class="flex justify-between items-center">
                <a class="text-2xl font-bold" href="{{ url('/') }}">Prof.co</a>
                <div>
                    <a href="{{ route('evaluations.index') }}" class="text-white hover:underline mx-2">Évaluations</a>
                    <a href="{{ route('modules.index') }}" class="text-white hover:underline mx-2">Modules</a>
                    <a href="{{ route('eleves.index') }}" class="text-white hover:underline mx-2">Élèves</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto my-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        &copy; {{ date('Y') }} Mon Application. Tous droits réservés.
    </footer>

</body>
</html>
