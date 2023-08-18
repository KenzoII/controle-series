<x-layout>
    <x-slot:title>Adicionar Cantor</x-slot>
    <form action="{{ route('singers.store') }}" method="post">
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
       <div class="row mb-3">
           <div class="col-2">
               <label for="name" class="form-label">Name:</label>
               <input type="text" class="form-control" id="name" name="name" autofocus>
           </div>
           <div class="col-2">
               <label for="album" class="form-label">Album:</label>
               <input type="text" class="form-control" id="album" name="album">
           </div>
           <div class="col-2">
               <label for="gender" class="form-label">Gender:</label>
               <input type="text" class="form-control" id="gender" name="gender">
           </div>
       </div>
       <button type="submit" class="btn btn-primary">Adicionar</button>
   </form>
</x-layout>