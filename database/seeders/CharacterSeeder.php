<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Character::create([
            'affiliation_id' => '1',
            'name' => 'Usada Pekora',
            'description' => 'A mischievous rabbit character from Hololive.',
            'avatar_url' => 'https://static.wikia.nocookie.net/virtualyoutuber/images/2/23/Usada_Pekora_-_Portrait_Transparent.png',
            'debut' => '2019-07-17 12:00:00'
        ]);
        Character::create([
            'affiliation_id' => 2,
            'name' => 'Kuzuha',
            'description' => 'A vampire character and one of Nijisanji\'s most popular VTubers.',
            'avatar_url' => 'https://static.wikia.nocookie.net/virtualyoutuber/images/5/58/Kuzuha_Portrait.png',
            'debut' => '2018-09-16 12:00:00',
        ]);
    }
}
