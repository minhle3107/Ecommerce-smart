<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  'code', 'cupon', 'start_date', 'end_date', 'description', 'is_active'
    ];
}
