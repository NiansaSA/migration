<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota_model::insert([
        [
            'nama_anggota'=>'Dilan',
            'alamat'=>'jalan danau buyan 1',
            'telp'=>'089777000111',
            'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
        ],
        [
            'nama_anggota'=>'Milea',
            'alamat'=>'jalan danau buyan 2',
            'telp'=>'089777002211',
            'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
        ],
        [
            'nama_anggota'=>'Niansa',
            'alamat'=>'jalan danau bratan',
            'telp'=>'089765432123',
            'created_at'=> \Carbon\Carbon::now('Asia/Jakarta') //Date('Y-m-d H:i:s')
        ],
        [
            'nama_anggota'=>'Cinta',
            'alamat'=>'jalan danau kerinci',
            'telp'=>'089777888999',
            'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
        ],
        [
            'nama_anggota'=>'Naura',
            'alamat'=>'jalan danau buyan',
            'telp'=>'089777888111',
            'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
        ]
        ]);
    }
}
