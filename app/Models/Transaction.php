<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
    use HasFactory;

    protected $fillable = [
        'bounty_id',
        'hacker_id',
        'organization_id',
        'amount',
        'status',
        'payment_method',
        'transaction_reference',
    ];

    public function bounty() {
        return $this->belongsTo(Bounty::class);
    }

    public function hacker() {
        return $this->belongsTo(User::class, 'hacker_id'); 
    }

    public function organization() {
        return $this->belongsTo(User::class, 'organization_id');
    }
}

