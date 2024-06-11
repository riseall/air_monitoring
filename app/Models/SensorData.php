<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    use HasFactory;

    protected $table = 'sensor_data';

    protected $fillable = [
        'tanggal',
        'co2',
        'no2',
        'co',
        'benzene',
        'toluene',
        'pm25',
        'temperature',
        'humidity'
    ];

    protected $dates = ['tanggal'];

    public function getTanggalAttribute($value)
    {
        return Carbon::parse($value)->translatedFormat('l, d F Y H:i:s');
    }
}
