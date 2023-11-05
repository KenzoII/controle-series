<form action="{{ $action }}" method="POST">
    @csrf
    @if($update)
        @method('PUT')
    @endif
    <div class="row mb-3">
        <div class="col-8">
            <label for="name" class="form-label">Name:</label>
            <input autofocus type="text" name="name" id="name" class="form-control" value="{{ $name ?? '' }} ">
        </div>
        <div class="col-2">
            <label for="seasonsQty" class="form-label">Seasons:</label>
            <input type="text" name="seasonsQty" id="seasonsQty" class="form-control" value="{{ $seasonsQty ?? '' }}">
        </div>
        <div class="col-2">
            <label for="episodes" class="form-label">Episodes:</label>
            <input type="text" name="episodes" id="episodes" class="form-control" value="{{ $episodes ?? '' }}">
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
