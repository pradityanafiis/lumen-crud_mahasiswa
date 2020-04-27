<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'nrp';

    public $incrementing = false;

    protected $fillable = [
        'nrp', 'nama', 'alamat', 'foto'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}