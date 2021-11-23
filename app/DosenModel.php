<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    protected $table = "dosen";
    protected $primarykey="id";
    protected $fillable=['id', 'nip', 'nama', 'telp', 'email'];
}
