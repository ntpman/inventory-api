<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProInvInfo;

class ProInvInfoImage extends Model
{
    use HasFactory;

    protected $table = 'pro_inv_info_images';

    protected $primaryKey = 'image_id';

    public function proInvInfo()
    {
        return $this->belongsTo(ProInvInfo::class);
    }
}
