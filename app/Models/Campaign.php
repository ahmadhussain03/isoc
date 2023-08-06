<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    // use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $guarded = [];

    public function members()
    {
        return $this->hasMany(CampaignMember::class);
    }

    public function votes()
    {
        return $this->hasManyThrough(CampaignMemberVote::class, CampaignMember::class);
    }
}
