<x-layout>
    <x-slot:title>Editar Cantor: {{ $singer->name }}</x-slot>
    <form action="{{ route("singers.update", $singer->id) }}" method="post">
        @csrf
        @if($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
       <div class="mb-3">
           <label for="name" class="form-label">Name:</label>
           <input type="text" class="form-control" id="name" name="name" value="{{ $singer->name }}">
       </div>
        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
</x-layout>