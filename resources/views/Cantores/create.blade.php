<x-layout>
    <x-slot:title>Adicionar Cantor</x-slot>
    <form action="/cantores/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="Nome">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>