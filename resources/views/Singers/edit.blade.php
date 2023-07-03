<x-layout>
    <x-slot:title>Editar Cantor: {{ $singer->name }}</x-slot>
    <x-singers.form action='{{ route("singers.update", $singer->id) }}' name='{{ "$singer->name" }}' update="{{ true }}"></x-singers.form>
</x-layout>