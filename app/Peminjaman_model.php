<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman_model extends Model
{
    protected $table="peminjaman";
    protected $tableprimaryKey="id";
    public $timestamps=false;

    protected $fillable = [
        'id_anggota', 'id_petugas', 'tgl_pinjam', 'deadline', 'denda'
    ];
    public function anggota() {
        return $this->belongsTo('App/Anggota_model', 'id_anggota');
      }
      public function petugas() {
        return $this->belongsTo('App/Petugas_model', 'id_petugas');
      }
      public function detail(){
        return $this->hasOne('App\Detail_model','id');
      }
}
