<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class AboutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
          'id'=>$this->id,
          'title'=> $this->title,
          'description'=> $this->description,
          'link'=> $this->link,
          'created_at'=> Carbon::parse($this->create_at)->toDateTimeString(),
          'updated_at'=> Carbon::parse($this->updated_at)->toDateTimeString(),
        ];
    }
}
