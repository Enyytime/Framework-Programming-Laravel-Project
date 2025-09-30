<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = ['name', 'phone_number'];
    /** @use HasFactory<\Database\Factories\FriendsFactory> */
    use HasFactory;
}
