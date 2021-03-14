<?php

namespace App\Games\Controllers;

use App\Games\Actions\AddToFavouritesGameAction;
use App\Games\Requests\AddToFavouritesGamesRequest;
use Domain\Games\DataTransferObjects\FavouriteGameData;
use Domain\Games\DataTransferObjects\IgdbGamesData;
use Domain\Games\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class GameController
{
    public function index()
    {
        return Inertia::render('games/index', ['data' => []]);
    }

    public function addToFavourites(AddToFavouritesGamesRequest $request, AddToFavouritesGameAction $action)
    {
        $gameData = FavouriteGameData::fromArray($request->input('game.item'));

        $action->execute($gameData);

        return Redirect::route('my.games');
    }

    public function ourChoice()
    {
        $response = Http::withHeaders(config('services.igdb'))
            ->withBody(
            "fields name, release_dates.human, cover.url, total_rating_count;
                      where total_rating_count > 5;
                     sort total_rating_count desc;", "text/plain")
            ->post('https://api.igdb.com/v4/games')
            ->json();

        $games = IgdbGamesData::fromArray($response);

        return Inertia::render('games/index', ['data' => $games]);
    }

    public function myGames(Request $request)
    {
        $games['games'] = Game::all()->toArray();

        return Inertia::render('games/index', ['data' => $games]);
    }
}
