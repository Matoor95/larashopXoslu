<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'LaraShop')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-100 text-slate-900">
    <nav class="bg-slate-950 text-white shadow">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4">
            <a href="{{ route('products.index') }}" class="text-xl font-bold">
                LaraShop

            </a>
            <div class="flex items-center gap-4 text-sm">
                <a href="{{ route('categories.index') }}" class="hover:text-orange-400">
                    Categories

                </a>
                <a href="{{ route('products.index') }}" class="hover:text-orange-400">
                    Produits


                </a>
                <a href="{{ route('products.create') }}"
                    class="rounded-lg bg-orange-500 px-4 py-2 font-semibold text-white hover:bg-orange">
                    + Ajouter un Produit

                </a>


            </div>


        </div>

    </nav>
    <main class="mx-auto max-w-7xl px-4 py-8">
        @if (session('success'))
            <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')

    </main>

</body>

</html>
