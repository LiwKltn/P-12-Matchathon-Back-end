<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    use HasFactory;
    protected $table = 'bootcamps';
    protected $guarded = [];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
