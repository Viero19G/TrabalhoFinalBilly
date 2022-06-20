<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cria Clubes</title>
</head>
<body>
    <h1>Cadastro Clubes</h1>
    
    <form action="{{ route('clube.update',['id'=>$clube->id])}}" method="POST">
        @csrf
        @method('PUT')
        <p>Nome</p>
        <input type="text" name="nome" value="{{$clube->nome}}">
        <br>
        <p>Fundação</p>
        <input type="text" name="fundacao" value="{{$clube->fundacao}}">
        <input type="submit">
    </form>
</body>
</html>