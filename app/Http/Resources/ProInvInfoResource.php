<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\GlbOrganizationResource;

class ProInvInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'fiscal_year' => $this->fiscal_year,
            'inv_detail' => $this->inv_detail,
            'pfix_inv_no' => $this->pfix_inv_no,
            'org' => new GlbOrganizationResource($this->glbOrganization),
            'images' => ProInvInfoImageResource::collection($this->proInvInfoImages),
        ];
    }
}
