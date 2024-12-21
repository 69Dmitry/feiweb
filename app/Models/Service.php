<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Filterable;

    protected $table = 'services';
    protected $guarded = false;

    protected $fillable = ['title', 'active', 'description'];

}
