<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatpelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabel_matpel')->insert([
            [
                'name' => 'Matematika Dasar',
                'desc' => '',
                'image' => ''
            ],
            [
                'name' => 'Fisika Dasar',
                'desc' => '',
                'image' => ''
            ],
            [
                'name' => 'Kimia Dasar',
                'desc' => '',
                'image' => ''
            ],
            [
                'name' => 'Matematika Soshum',
                'desc' => '',
                'image' => ''
            ],
            [
                'name' => 'Ekonomi',
                'desc' => '',
                'image' => ''
            ],
            [
                'name' => 'Geografi',
                'desc' => '',
                'image' => ''
            ],
            [
                'name' => 'Sejarah',
                'desc' => '',
                'image' => ''
            ],
            [
                'name' => 'Sosoiologi',
                'desc' => '',
                'image' => ''
            ],
        ]);
    }
}
