<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Special_order extends Model
{
    use HasFactory;
    protected $fillable = ['link' , 'details' , 'image' , 'quantity' , 'user_id'];
}
