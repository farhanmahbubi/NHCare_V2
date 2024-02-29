<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //insert ke table pegawai
       DB::table('detail_profile')->insert([
        'address' => 'Jember',
        'nomor_tlp' => '08123456789',
        'ttl' =>'2000-11-26',
        'foto' => 'picture.png'
       ]);
    }
}
