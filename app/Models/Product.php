<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function project() {
        return $this->hasMany(Project::class);
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_products');
    }
}
