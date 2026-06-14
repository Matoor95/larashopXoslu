<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraShop</title>
</head>
<body>
    <h1>Nos produits chez LaraShop</h1>
    @foreach ($products as $product )
    <div>
        <h2>{{ $product['libelle'] }} </h2>
        <p>{{ $product['price'] }} Euro quantite restante {{ $product['quantity'] }}</p>
        <p>{{ $product['description'] }}</p>
    </div>
        
    @endforeach

</body>
</html>