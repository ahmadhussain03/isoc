<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignMember extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function leadership()
    {
        return $this->belongsTo(Leadership::class);
    }

    public function votes()
    {
        return $this->hasMany(CampaignMemberVote::class);
    }
}
