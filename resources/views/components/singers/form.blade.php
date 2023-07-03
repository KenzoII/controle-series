<form action="{{ $action }}" method="post">
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
    @if($update)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" @isset($name)value="{{ $name }}" @endisset>
    </div>
    @empty($name)
        <button type="submit" class="btn btn-primary">Teste</button>
    @else 
        <button type="submit" class="btn btn-primary">Alterar</button>
    @endisset
</form>