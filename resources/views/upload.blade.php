<!DOCTYPE html>
<html>
<head>
    <title>Upload de Imagem</title>
</head>
<body>
    <h2>Upload de Imagem</h2>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
        <img src="{{ asset('storage/' . session('path')) }}" width="200">
    @endif

    <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
