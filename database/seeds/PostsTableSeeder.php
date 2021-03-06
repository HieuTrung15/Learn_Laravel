<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Post Two',
            'body' => 'This is Post two',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>null
        ]);
    }
}
