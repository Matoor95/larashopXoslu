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
        <h2>{{ $product->libelle }} :  {{ $product->category->name }} </h2>
        <p>{{ $product['price'] }} Euro quantite restante {{ $product['quantity'] }}</p>
        <p>{{ $product['description'] }}</p>
    </div>
        
    @endforeach
    <h3>les produits en stock</h3>
    @foreach ($stocks as  $stock)
        <div>
            <p>{{ $stock['libelle'] }} avec une quantite de {{ $stock['quantity'] }}</p>
        </div>
        
    @endforeach
     <h3>les produits en rupture de  stock</h3>
    @foreach ($outStocks as  $outStock)
        <div>
            <p>{{ $outStock['libelle'] }} avec une quantite de {{ $outStock['quantity'] }}</p>
        </div>
        
    @endforeach
    
    


</body>
</html>