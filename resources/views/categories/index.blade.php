<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Liste des categories </title>
</head>
<body>


    <div class="max-w-5xl mx-auto py-8">
        <div class="flex item-center justify-between mb-6" >
            <h1 class="text-2xl font-bold "> categories</h1>
            <a href="{{ route('categories.create') }}" class="">
                Nouvelle categories
            </a>

        </div>
        @if (session('success'))
        <div class="bg-green-100  text-green-700 p-3 rounded mb-4">
            {{ session('success') }}

        </div>

            
        @endif

        <table class="w-full bg-white border rounded">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-3">
                        Nom

                    </th>
                     <th class="p-3">
                        Action

                    </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category )
                <tr class="border-t">
                    <td class="p-3">
                        {{ $category->name }}
                    </td>
                    <td class="py-3 flex gap-2">
                        <a href="{{ route('categories.show', $category) }}"> Voir</a>
                         <a href="{{ route('categories.edit', $category) }}">Modifier</a>
                         <form method="POST" action="{{ route('categories.destroy', $category) }}"  onsubmit="return confirm('Supprimer cette categories?')">
                           
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>

                         </form>



                    </td>

                </tr>
                    
                @empty
                <tr>
                    <td colspan="4" class="p-3 text-center text-gray-500">
                        Aucune categories trouvee 
                    </td>
                </tr>
                    
                @endforelse
            </tbody>



        </table>
        <div class="mt-4">
            {{ $categories->links() }}

        </div>

    </div>
    
</body>
</html>