<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku_model::insert([
            [
                'judul'=>'Dilan',
                'penerbit'=>'Gramedia',
                'pengarang'=>'Chatlea',
                'foto'=>'-',
                'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'judul'=>'By Me',
                'penerbit'=>'Gramedia',
                'pengarang'=>'Niansa',
                'foto'=>'-',
                'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'judul'=>'Not Me',
                'penerbit'=>'Gramedia',
                'pengarang'=>'Syifa',
                'foto'=>'-',
                'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'judul'=>'Up',
                'penerbit'=>'Gramedia',
                'pengarang'=>'Kiky',
                'foto'=>'-',
                'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'judul'=>'Married',
                'penerbit'=>'Gramedia',
                'pengarang'=>'Kandiya',
                'foto'=>'-',
                'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
            ]
            ]);
        }
    }

