<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;
    protected $fillable = [
        'kamar_id',
        'url'
    ];

    public function room()
    {
        return $this->belongsTo(Kamar::class);
    }

    public function getRoomImage()
    {
        return asset('img/room/' . $this->room->number . '/' . $this->url);
    }
}
