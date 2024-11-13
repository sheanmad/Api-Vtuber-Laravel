<?php

namespace App\Repositories;

use App\Models\Character;
use App\Http\Resources\CharacterResource;

class CharacterRepository{ 
    protected $character;

    public function __construct(Character $character){
        $this -> character = $character;
    }
    
    public function getAll($id = null){
        if($id ==null){
            $response = CharacterResource::collection($this -> character -> with('affiliation')->get());
            return $response;
        }
        
        $character = $this -> character -> with('affiliation') -> find($id);
        if(!$character){
            throw new \Exception('Data not found', 400);
        }
        return new CharacterResource($character);
    }

}