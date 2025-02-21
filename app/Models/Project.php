<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function lead() {
        return $this->belongsTo(Lead::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
