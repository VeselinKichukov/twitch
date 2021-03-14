<?php

namespace App\Games\Controllers;

use App\Games\Requests\SearchGameRequest;
use Domain\Games\DataTransferObjects\RawgGamesData;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class RawgGameController
{
    public function search(SearchGameRequest $request)
    {
        $response = Http::get('https://api.rawg.io/api/games?search=' . $request->input('name'))->json();

        $games = RawgGamesData::fromArray($response['results']);

        return Inertia::render('games/index', ['data' => $games]);
    }
}
