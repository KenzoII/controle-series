<x-layout title="Series List">
    <a href="{{route('series.create')}}" class="btn btn-dark mb-2">Add</a>
    @isset($successMessage)
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endisset
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-centers">
                <a href="{{route('seasons.index', $serie->id)}}">{{ $serie->seriesName }}</a>
                <div class="d-flex justify-content-end gap-3">
                    <a class="btn btn-warning btn-sm" href="{{ route('series.edit',$serie->id) }}">Edit</a>
                    <form action="{{ route('series.destroy',$serie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
