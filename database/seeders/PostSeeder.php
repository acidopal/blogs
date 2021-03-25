<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'title' => 'Hello World!',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur architecto doloribus excepturi hic in labore deleniti. Dolorum, ut. Quo aspernatur laudantium voluptates deserunt voluptas ducimus ut dolore iure veritatis',
        ]);
    }
}
