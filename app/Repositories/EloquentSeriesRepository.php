<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episodes;
use App\Models\Seasons;
use App\Models\Series;
use Illuminate\Support\Facades\DB;

class EloquentSeriesRepository implements SeriesRepository
{
    public function add(SeriesFormRequest $request): Series
    {
        return
            DB::transaction(function () use ($request, &$series) {
                $creationTime = date('Y-m-d H:i:s');
                $series = Series::create($request->all());
                $seasons = [];
                $episodes = [];

                for ($i = 1; $i <= $request->seasonsQty; $i++) {
                    $seasons[] = [
                        'series_id' => $series->id,
                        'numberOfSeasons' => $i,
                        'created_at' => $creationTime,
                    ];
                }
                Seasons::insert($seasons);

                foreach ($series->seasons as $season) {
                    for ($j = 1; $j <= $request->episodesQty; $j++) {
                        $episodes[] = [
                            'seasons_id' => $season->id,
                            'numberOfEpisodes' => $j,
                            'created_at' => $creationTime,
                        ];
                    }
                }
                Episodes::insert($episodes);

                return $series;
            });
    }
}
