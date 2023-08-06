<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function campaignMember()
    {
        return $this->hasMany(CampaignMember::class);
    }

    public function campaigns()
    {
        return $this->hasManyDeep(Campaign::class, [CampaignMember::class]);
    }
}
