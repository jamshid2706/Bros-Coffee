<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Events extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
      'title',
      'description',
      'image'
    ];

    public function events() {
        return $this->hasMany(Events::class, 'category_id', 'id');
    }
}
