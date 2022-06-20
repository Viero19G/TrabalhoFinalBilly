<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubes</title>
</head>
<body>
    <h1>Clubes</h1>
        <a href="{{route ('cidades.create')}}">adicionar</a>
        <br>
        <br>
    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Fundação</th>
            <th>Editar</th>
            <th>Remover</th>
        </thead>

        <tbody>
            @foreach($lista_cidades as $cidade)
            <tr>
                <td>{{$cidade->id}}</td>
                <td>{{$cidade->nome}}</td>
                <td>{{$cidade->fundacao}}</td>
                <td>
                    <a href="{{route('cidades.edit',['id'=>$cidade->id])}}">Editar</a>
                </td>
                <td>
                
                    <form action="{{route('cidades.destroy',['id'=>$cidade->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red;">Remover</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
</body>
</html>