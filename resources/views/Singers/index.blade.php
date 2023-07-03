<x-layout>
    <x-slot:title>Cantores</x-slot>
    <a href="{{ route('singers.create') }}" class="btn btn-dark mb-2">Adicionar Cantor</a>
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{$mensagemSucesso}}
        </div>
    @endisset
    <ul class="list-group">
        @foreach($data as $singers)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $singers->name }}
                <span class="d-flex">                
                    <a href="{{ route('singers.edit', $singers->id) }}" method="POST" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('singers.destroy', $singers->id) }}" method="POST" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm ">
                            X
                        </button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>