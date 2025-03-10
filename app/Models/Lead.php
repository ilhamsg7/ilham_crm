<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function project() {
        return $this->hasMany(Project::class);
    }

    public function customer() {
        return $this->hasMany(Customer::class);
    }
}
