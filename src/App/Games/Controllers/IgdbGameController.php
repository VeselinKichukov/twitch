<?php

namespace App\Games\Controllers;

use App\Games\Requests\SearchGameRequest;
use Domain\Games\DataTransferObjects\IgdbGamesData;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class IgdbGameController
{
    public function search(SearchGameRequest $request)
    {
        $response = Http::withHeaders(config('services.igdb'))
            ->withBody(
            "fields name, release_dates.human, cover.url, total_rating_count;
                      search \"{$request->input('name')}\";
                      where release_dates > 0
                      & cover > 0;
                      limit 20;
                     ","text/plain")
            ->post('https://api.igdb.com/v4/games')
            ->json();

        $games = IgdbGamesData::fromArray($response);

        return Inertia::render('games/index', ['data' => $games]);
    }
}
