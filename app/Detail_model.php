<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_model extends Model
{
    protected $table="detail_peminjaman";
    protected $tableprimaryKey="id";
    public $timestamps=false;

    protected $fillable = [
        'id_pinjam', 'id_buku', 'qty'
    ];
    public function buku(){
        return this()->belongsTo('App\Buku_model','id_buku');
    }
    public function peminjaman(){
        return this()->belongsTo('App\Peminjaman_model','id_pinjam');
    }
}
