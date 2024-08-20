<?php

namespace App\Models;

use App\Models\GlbOrganization;
use App\Models\ProInvInfoImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProInvInfo extends Model
{
    use HasFactory;

    protected $table = 'pro_inv_info';

    public function glbOrganization()
    {
        return $this->belongsTo(GlbOrganization::class, 'org_org_id', 'org_id');
    }

    public function proInvInfoImages()
    {
        return $this->hasMany(ProInvInfoImage::class, 'pro_inv_info_id');
    }
}
