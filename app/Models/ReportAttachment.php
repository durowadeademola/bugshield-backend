<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportAttachment extends Model {
    use HasFactory;

    protected $fillable = ['bug_report_id', 'file_path'];

    public function bugReport() {
        return $this->belongsTo(BugReport::class);
    }
}

