<?php

namespace App\Imports;

use App\Models\Card;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

class CardImport implements ToModel
{
    public function model(array $row): Model|null
    {
        return new Card([
            'id' => $row[0],
            'name_jp' => $row[1],
            'name_en' => $row[2],
            'card_class' => $row[3],
            'card_type_jp' => $row[4],
            'card_type_en' => $row[5],
            'rarity' => $row[6],
            'artist' => $row[7],
            'illustrator' => $row[8],
            'ability_jp' => $row[9],
            'ability_en' => $row[10],
            'center_effect_jp' => $row[11],
            'center_effect_en' => $row[12],
            'effect_jp' => $row[13],
            'effect_en' => $row[14],
            'product' => $row[15],
            'image_url' => $row[16],
            'link_tag' => $row[17],
            'limited' => filter_var($row[18], FILTER_VALIDATE_BOOLEAN),
        ]);
    }
}
