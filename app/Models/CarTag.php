<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarTag extends Model
{
    use HasFactory;

    public function cars()
    {
        $this->hasMany(Cars::class);
    }
    public function cartags()
    {
        $this->hasMany(Cars::class);
    }
}
