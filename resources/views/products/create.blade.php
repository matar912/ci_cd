<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un produit</title>
</head>
<body>

<h1>Ajouter un produit</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <label>Nom :</label><br>
    <input type="text" name="name"><br>

    <label>Prix :</label><br>
    <input type="text" name="price"><br><br>

    <button type="submit">Enregistrer</button>
</form>

<a href="{{ route('products.index') }}">Retour</a>

</body>
</html>
