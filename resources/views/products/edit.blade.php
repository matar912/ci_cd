<!DOCTYPE html>
<html>
<head>
    <title>Modifier un produit</title>
</head>
<body>

<h1>Modifier le produit</h1>

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nom :</label><br>
    <input type="text" name="name" value="{{ $product->name }}"><br>

    <label>Prix :</label><br>
    <input type="text" name="price" value="{{ $product->price }}"><br><br>

    <button type="submit">Mettre à jour</button>
</form>

<a href="{{ route('products.index') }}">Retour</a>

</body>
</html>
