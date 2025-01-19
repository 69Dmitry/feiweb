<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = false;

    protected $fillable = ['data', 'user_id', 'number', 'status'];

}
