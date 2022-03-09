<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe_id',
        'status_kamar_id',
        'nomor',
        'kapasitas',
        'harga',
        'pemandangan',
    ];

    public function type()
    {
        return $this->belongsTo(Tipe::class);
    }

    public function roomStatus()
    {
        return $this->belongsTo(StatusKamar::class);
    }
    public function image()
    {
        return $this->hasMany(Gambar::class);
    }

    // public function firstImage()
    // {
    //     if (count($this->image) > 0) {
    //         return $this->image->first()->getRoomImage();
    //     }
    //     return asset('img/default/default-room.png');
    // }
}
