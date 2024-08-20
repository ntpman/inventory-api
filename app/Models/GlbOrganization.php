<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/** Import */
use App\Models\ProInvInfo;

class GlbOrganization extends Model
{
    use HasFactory;

    protected $table = 'glb_organization';

    protected $primaryKey ='org_id';

    public function proInvInfos() {
        return $this->hasMany(ProInvInfo::class, 'org_org_id');
    }
}
