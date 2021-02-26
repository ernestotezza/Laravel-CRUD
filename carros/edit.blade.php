<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Atualizar o Registro do Carro</title>
</head>
<body>
    <form action="{{ route('alterar_carro', ['id'=> $carro->id]) }}" method="POST">
        @csrf
        <label for="">Modelo</label> <br />
        <input type="text" name="modelo" value="{{ $carro->modelo }}"> <br />
        <label for="">Ano</label> <br />
        <input type="text" name="ano" value="{{ $carro->ano }}"> <br />
        <label for="">Cor</label> <br />
        <input type="text" name="cor" value="{{ $carro->cor }}"> <br />
        <label for="">Preço</label> <br />
        <input type="text" name="preco" value="{{ $carro->preco }}"> <br />
        <button>Salvar</button>
    </form>
</body>
</html>

