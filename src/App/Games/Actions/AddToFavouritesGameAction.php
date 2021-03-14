<?php

namespace App\Games\Actions;

use Domain\Games\DataTransferObjects\FavouriteGameData;
use Domain\Games\Models\Game;

class AddToFavouritesGameAction
{
    public function execute(FavouriteGameData $favouriteGameData)
    {
        if (!Game::whereName($favouriteGameData->name)->first()){
            Game::create($favouriteGameData->toArray());
            return true;
        }
        return false;
    }
}
