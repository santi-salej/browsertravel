<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrowsertravelModel extends Model
{
    use HasFactory;

    protected $table = 'table__browsertravel';

    protected $fillable = [
        'id', 
        'name',
        'main_weather',
        'description_weather', 
        'humidity',
        'temp',
        'country',
        'logitud',
        'latitud',
        'cod',
    ];
}
