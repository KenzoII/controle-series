<x-layout>
    <x-slot:title>Cantores</x-slot>
    <a href="cantores/create" class="btn btn-dark mb-2">Adicionar Cantor</a>
    <ul class="list-group">
        @foreach($data as $singers)
            <li class="list-group-item">{{ $singers->name }}</li>
        @endforeach
    </ul>
</x-layout>