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
            ['name' => 'Matematika Dasar'],
            ['name' => 'Fisika Dasar'],
            ['name' => 'Kimia Dasar'],
            ['name' => 'Matematika Soshum'],
            ['name' => 'Ekonomi'],
            ['name' => 'Geografi'],
            ['name' => 'Sejarah'],
            ['name' => 'Sosoiologi'],
        ]);
    }
}
