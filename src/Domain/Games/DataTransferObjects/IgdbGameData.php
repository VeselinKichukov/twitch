<?php

namespace Domain\Games\DataTransferObjects;

use Carbon\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class IgdbGameData extends DataTransferObject
{
    public $name;
    public $released;
    public $background_image;

    public static function fromArray(array $game): self
    {
        return new self([
            'name' => $game['name'],
            'released' =>  Carbon::createFromDate($game['release_dates'][0]['human'])->format('Y-m-d'),
            'background_image' => $game['cover']['url'] ?? '',
        ]);
    }
}
