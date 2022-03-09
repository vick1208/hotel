<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'pekerjaan',
        'tanggal_lahir',
        'user_id',
        'jenis_kelamin'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
