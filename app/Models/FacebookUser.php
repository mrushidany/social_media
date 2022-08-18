<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookUser extends Model
{
    protected $fillable = ['user_id', 'facebook_id'];
    use HasFactory;
}
