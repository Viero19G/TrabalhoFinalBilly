<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <h1>Clubes</h1>
                        <a href="{{route ('clube.create')}}">adicionar</a>
                        <br>
                        <br>
                

                        <table class="table table-striped table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Fundação</th>
                            <th>Editar</th>
                            <th>Remover</th>
                        </thead>

                        <tbody>
                            @foreach($lista_clubes as $clube)
                            <tr>
                                <td>{{$clube->id}}</td>
                                <td>{{$clube->nome}}</td>
                                <td>{{$clube->fundacao}}</td>
                                <td>
                                    <a href="{{route('clube.edit',['id'=>$clube->id])}}">Editar</a>
                                </td>
                                <td>
                                
                                    <form action="{{route('clube.destroy',['id'=>$clube->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="color: red;">Remover</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
