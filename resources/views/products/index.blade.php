<!DOCTYPE html>
<html>
<head>
    <title>Liste des produits</title>
</head>
<body>

<h1>Produits</h1>

<a href="{{ route('products.create') }}">Ajouter un produit</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>

    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }} CFA</td>
        <td>
            <a href="{{ route('products.edit', $product) }}">Modifier</a>

            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
