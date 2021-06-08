<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homes extends Model
{
    use HasFactory;
    protected $fillable = ['street', 'city', 'square_footage', 'price', 'rooms_number', 'parking_spaces', 'category', 'user_id'];



    public function user()
    {
        return $this->hasOne(User::class);
    }
}
