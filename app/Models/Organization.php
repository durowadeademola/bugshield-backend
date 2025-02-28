<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model {
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'website'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function bugReports() {
        return $this->hasMany(BugReport::class);
    }
}

