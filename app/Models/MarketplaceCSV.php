<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketplaceCSV extends Model {
    use HasFactory;

    protected $guarded = ['id'];

    // relation with marketplace_setting
    public function marketplace_setting() {
        return $this->hasOne(MarketplaceSetting::class, 'csv_id', 'id');
    }

    /**
     * Agent
     */
    public function scopeHasAgent($query) {
        if (Auth::user()->user_type == 'Agent') {
            return $query->where('owner_id', agent_owner_id());
        }

        return $query->where('owner_id', Auth::user()->id);
    }
}
