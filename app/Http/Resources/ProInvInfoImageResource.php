<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProInvInfoImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'image_id' => $this->image_id,
            'pro_inv_info_id' => $this->pro_inv_info_id,
            'image_name' => $this->image_name,
            'image_url' => 'http://inventory.dss.local/storage/images/retired_pic/' . $this->image_name,
        ];
    }
}
