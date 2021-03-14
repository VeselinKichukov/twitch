<?php

namespace App\Games\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddToFavouritesGamesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'game.item.name'             => 'required|string',
            'game.item.released'         => 'required|string',
            'game.item.background_image' => 'required|string',
        ];
    }
}
