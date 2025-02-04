<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $table = 'managers';

    protected $fillable = ['name', 'surname', 'second_name', 'gender', 'is_online', 'user_id', 'email'];
    

    public static function isExists($email) {
        return self::where('email', $email)->exists();
    }
}
