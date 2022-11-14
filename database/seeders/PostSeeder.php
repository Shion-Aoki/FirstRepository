<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'title1',
            'body' => 'This is body',
            'category_id' => 1,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        //
    }
}
