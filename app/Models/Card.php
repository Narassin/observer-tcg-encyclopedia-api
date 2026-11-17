<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name_jp',
        'name_en',
        'card_class',
        'card_type_jp',
        'card_type_en',
        'rarity',
        'artist',
        'illustrator',
        'ability_jp',
        'ability_en',
        'center_effect_jp',
        'center_effect_en',
        'effect_jp',
        'effect_en',
        'product',
        'image_url',
        'link_tag',
        'limited'
    ];
}
