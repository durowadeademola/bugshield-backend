<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bounty extends Model {
    use HasFactory;

    protected $fillable = ['bug_report_id', 'hacker_id', 'organization_id', 'amount', 'status'];

    public function bugReport() {
        return $this->belongsTo(BugReport::class);
    }

    public function hacker() {
        return $this->belongsTo(User::class, 'hacker_id');
    }

    public function organization() {
        return $this->belongsTo(User::class, 'organization_id'); 
    }

    // public function transactions() {
    //     return $this->hasMany(Transaction::class);
    // }
}


