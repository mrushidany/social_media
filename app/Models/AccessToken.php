<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{
    protected $fillable = ['user_id', 'live_token', 'token_type', 'expires_in'];
    use HasFactory;
}
