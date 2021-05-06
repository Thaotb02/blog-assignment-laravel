<?php

use Illuminate\Database\Seeder;
use App\Model\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           factory(Post::class,20)->create();
    }
}
