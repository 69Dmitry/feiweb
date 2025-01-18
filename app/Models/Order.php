<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $table = 'orders';
    protected $guarded = false;

    protected $fillable = ['data', 'user_id', 'number', 'status'];

}
