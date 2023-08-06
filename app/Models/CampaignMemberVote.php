<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignMemberVote extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function campaignMember()
    {
        return $this->belongsTo(CampaignMember::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
