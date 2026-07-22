<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="max-w-3xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Modifier la  categorie</h1>
        <form method="POST" action="{{ route('categories.store') }}" >
            @csrf
            @include('categories._form')
            <button type="submit" class="btn btn-primary mt-4" >
                Modifier

            </button>



        </form>

    </div>
    
</body>
</html>