<?php

namespace Domain\Games\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RawgGamesData extends DataTransferObject
{
    public $games;

    public static function fromArray(array $data): self
    {
        return new self([
            'games' => array_map(function ($game) {
                return RawgGameData::fromArray($game)->toArray();
            }, $data)
        ]);
    }

}
