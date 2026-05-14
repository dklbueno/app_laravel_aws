<!DOCTYPE html>
<html>
<head>
    <title>Novo Produto</title>
</head>
<body>

<h1>Novo Produto</h1>

<form action="{{ route('products.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <input type="text"
           name="name"
           placeholder="Nome">

    <br><br>

    <textarea name="description"
              placeholder="Descrição"></textarea>

    <br><br>

    <input type="file" name="image">

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>

</body>
</html>