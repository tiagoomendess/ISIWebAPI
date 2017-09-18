<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Key extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'token' => $this->token,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }


}
