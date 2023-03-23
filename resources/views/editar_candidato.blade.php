<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud colaborador</title>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>

    <form action="/atualizar-candidato/{{ $candidato->id }}" method="POST">
        @csrf
        @method("PUT")

        <label for="">Nome</label>
        <input type="text" placeholder="Digite seu nome" name="nome_candidato" value="{{ $candidato->name }}">

        <br /> <br />

        <label for="">Cargo</label>
        <input type="text" placeholder="Digite seu cargo" name="cargo" value="{{ $candidato->cargo }}">

        <br /> <br />

        <label for="">status</label>
        <input type="text" placeholder="Como está o status" name="status" value="{{ $candidato->status }}">

        <br /> <br />

        <button>Enviar Cadastro</button>
    </form>

</body>

</html>