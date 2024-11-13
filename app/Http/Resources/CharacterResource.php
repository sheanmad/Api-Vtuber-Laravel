<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class CharacterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'id' => $this -> id,
          'affiliation_id' => $this -> affiliation ? $this->affiliation->id:null,
          'name' => $this -> name,
          'description' => $this -> description,
          'avatar_url' => $this -> avatar_url,
          'debut' => Carbon::parse($this->debut)->format('d-m-Y'),
        ];
    }
}
