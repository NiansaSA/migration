<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Petugas_model::insert([
            [
                'nama_petugas'=>'Dilan',
                'alamat'=>'jalan danau buyan 1',
                'telp'=>'089777222111',
                'username'=>'della',
                'password'=>'della123',
                'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_petugas'=>'Heni',
                'alamat'=>'jalan danau kerinci 1',
                'telp'=>'081777000111',
                'username'=>'heni',
                'password'=>'heni123',
                'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_petugas'=>'Serli',
                'alamat'=>'jalan danau bratan 1',
                'telp'=>'089787677655',
                'username'=>'serli',
                'password'=>'serli123',
                'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_petugas'=>'Ninis',
                'alamat'=>'jalan danau buyan 2',
                'telp'=>'087111555666',
                'username'=>'heni',
                'password'=>'heni123',
                'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_petugas'=>'Zulfa',
                'alamat'=>'jalan danau bratan 4',
                'telp'=>'084567890123',
                'username'=>'zulfa',
                'password'=>'zulfa123',
                'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
            ]
            ]);
    }
}
