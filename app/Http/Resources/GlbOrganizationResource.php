<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GlbOrganizationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'org_id' => $this->org_id,
            'org_code' => $this->org_code,
            'org_name' => $this->org_name,
            'org_abbr' => $this->org_abbr,
        ];
    }
}
