<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSewa extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobil_id',
        'name',
        'alamat',
        'no_telp',
        'email',
        'start_date',
        'end_date',
        'total_days',
        'jarak',
        'delivery_option',
        'name_driver',
        'total_amount',
        'payment_receipt',
    ];

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'mobil_id');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'name_driver');
    }

    public function penyewas()
    {
        return $this->hasMany(Penyewa::class, 'penyewa_id');
    }
}

