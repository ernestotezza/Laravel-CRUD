<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Registro de Carro</title>
</head>
<body>
    <form action="{{ route('registrar_carro') }}" method="POST">
        @csrf
        <label for="">Modelo</label> <br />
        <input type="text" name="modelo"> <br />
        <label for="">Ano</label> <br />
        <input type="text" name="ano"> <br />
        <label for="">Cor</label> <br />
        <input type="text" name="cor"> <br />
        <label for="">Preço</label> <br />
        <input type="text" name="preco"> <br />
        <button>Salvar</button>
    </form>
</body>
</html>

