<x-layout>
    <x-slot:title>Cantores</x-slot>
    <ul>
        <a href="series/create">Adicionar Cantor</a>
        @foreach($data as $singers)
            <li>{{ $singers }}</li>
        @endforeach

        @{{Varivel}}

        <script>
            let singers = {{ Js::from($data) }}
        </script>
    </ul>
</x-layout>