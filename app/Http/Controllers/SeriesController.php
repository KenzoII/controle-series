<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
    }

    public function index(Request $request)
    {
        $series = Series::all();
        $successMessage = $request->session()->get('success.message');
        return view('series.index')->with('series', $series)->with('successMessage', $successMessage);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $series = $this->repository->add($request);

        return to_route('series.index')->with('success.message', "Series {$series->seriesName} successfully added");
    }

    public function destroy(Series $series)
    {
        $series->delete();
        return to_route('series.index')->with('success.message', "{$series->seriesName} successfully removed");
    }

    public function edit(Series $series)
    {
        return view("series.edit")->with('series', $series);
    }

    public function update(SeriesFormRequest $request, Series $series)
    {
        $series->fill($request->all());
        $series->save();
        return to_route('series.index')->with('success.message', "{$series->seriesName} successfully edited");
    }
}
