<form action="{{ $action }}" method="POST">
    @csrf
    @if($update)
        @method('PUT')
    @endif
    <div class="row mb-3">
        <div class="col-8">
            <label for="seriesName" class="form-label">Name:</label>
            <input autofocus type="text" name="seriesName" id="seriesName" class="form-control"
                   value="{{ $name ?? '' }} ">
        </div>
        <div class="col-2">
            <label for="seasonsQty" class="form-label">Seasons:</label>
            <input type="text" name="seasonsQty" id="seasonsQty" class="form-control" value="{{ $seasonsQty ?? '' }}">
        </div>
        <div class="col-2">
            <label for="episodesQty" class="form-label">Episodes/Season:</label>
            <input type="text" name="episodesQty" id="episodesQty" class="form-control" value="{{ $episodes ?? '' }}">
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
