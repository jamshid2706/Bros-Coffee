<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'receipt',
        'price',
        'category_id',
        'destroy'
    ];

    public function foods() {
        return $this->hasMany(Food::class, 'category_id', 'id');
    }
}
