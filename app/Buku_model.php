<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku_model extends Model
{
    protected $table="buku";
    protected $tableprimaryKey="id";
    public $timestamps=false;

    protected $fillable = [
        'judul', 'penerbit', 'pengarang', 'foto'
    ];
    public function detail(){
        return $this->hasMany('App\Detail_model','id');
    }
}
