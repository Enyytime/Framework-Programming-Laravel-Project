<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = ['name', 'phone_number', 'dojo_id'];
    /** @use HasFactory<\Database\Factories\FriendsFactory> */
    use HasFactory;

    public function dojo(){
        return $this->belongsTo(Dojo::class);
    }


}
