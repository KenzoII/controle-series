<x-layout>
    <x-slot:title>Adicionar Cantor</x-slot>
    <x-singers.form action="{{ route('singers.store') }}" method="POST" name='{{ old("name") }}' update="{{ false }}"></x-singers.form>
</x-layout>