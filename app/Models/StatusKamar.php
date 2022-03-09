<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusKamar extends Model
{
    use HasFactory;

    public $table= "Status_kamar";

    protected $fillable = [
        'nama',
        'kode',
        'informasi'
    ];
}
