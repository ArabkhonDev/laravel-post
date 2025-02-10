<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'title' => $this->title,
            'short_content' => $this->short_content,
            'body' => $this->body,
            'photo'=>$this->photo,
            'tags'=>$this->tags
        ];
    }
}
