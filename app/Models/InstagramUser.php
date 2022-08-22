<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramUser extends Model
{
    protected $fillable = ['user_id', 'instagram_id', 'account_type'];
    use HasFactory;
}
