<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            // instead of loading the whole relationship, just load the key inside the relationship
            // without the  ?? '' it will give an error because most of the records do not have data
            'role' => $this->role->role ?? '',
            // 'age' => $this->age,
            // 'active' => $this->active,
             'posts' => $this->posts
        ];
    }
}
