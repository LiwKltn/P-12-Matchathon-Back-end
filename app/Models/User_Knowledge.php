<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Knowledge extends Model
{
    use HasFactory;
    protected $table = 'users_knowledges';
    protected $guarded = [];

    public function userKowledge()
    {
        return $this->belongsTo(User::class);
    }

    public function knowledge()
    {
        return $this->belongsToMany(Knowledge::class);
    }

    public function level()
    {
        return $this->belongsToMany(Level::class);
    }
}
