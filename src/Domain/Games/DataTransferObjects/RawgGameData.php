<?php

namespace Domain\Games\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RawgGameData extends DataTransferObject
{
    public $name;
    public $released;
    public $background_image;

    public static function fromArray(array $game): self
    {
        return new self([
            'name' => $game['name'],
            'released' => $game['released'] ?? '',
            'background_image' => $game['background_image'] ?? '',
        ]);
    }
}
