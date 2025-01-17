<?php

namespace App\Http\Resources\api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'name'=>$this->name,
        'email'=>$this->email,
        'phone_number'=>$this->phone_number,
        'type'=>$this->type,
        'details'=>new StudentResource($this->whenLoaded('student'))
        ];
    }
}
