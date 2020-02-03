<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota_model extends Model
{
    protected $table="anggota";
    protected $tableprimaryKey="id";
    public $timestamps=false;

    protected $fillable = [
        'nama_anggota', 'alamat', 'telp'
    ];
    public function pinjam() {
        return $this->hasMany('App\Peminjaman','id');
    }
}
