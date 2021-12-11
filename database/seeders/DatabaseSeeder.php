<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Kevin Anggara',
        //     'username' => 'kevinanggara',
        //     'email' => 'vinputra.16@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Appetizer',
            'slug' => 'appetizer'
        ]);

        Category::create([
            'name' => 'Main Course',
            'slug' => 'main-course'
        ]);

        Category::create([
            'name' => 'Dessert',
            'slug' => 'dessert'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptas quidem odio delectus quae porro tempora modi atque recusandae autem quos esse et corrupti',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptas quidem odio delectus quae porro tempora modi atque recusandae autem quos esse et corrupti, ratione laborum fugit voluptatibus optio error repudiandae distinctio quas repellendus mollitia vel officia! Non fugiat asperiores qui voluptates repudiandae minima, illo magnam tempore autem hic? Perferendis libero, fuga soluta aliquam deleniti suscipit quae repudiandae totam velit autem placeat quidem eos tempora nisi quibusdam officiis quasi nemo sit. Quis fugiat voluptatibus laborum porro repellat ipsa aperiam repellendus ipsam! Inventore, adipisci! Corrupti velit iure tenetur sequi nostrum, magnam consectetur. Ducimus sint nihil maxime animi quasi optio eligendi molestiae.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptas quidem odio delectus quae porro tempora modi atque recusandae autem quos esse et corrupti',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptas quidem odio delectus quae porro tempora modi atque recusandae autem quos esse et corrupti, ratione laborum fugit voluptatibus optio error repudiandae distinctio quas repellendus mollitia vel officia! Non fugiat asperiores qui voluptates repudiandae minima, illo magnam tempore autem hic? Perferendis libero, fuga soluta aliquam deleniti suscipit quae repudiandae totam velit autem placeat quidem eos tempora nisi quibusdam officiis quasi nemo sit. Quis fugiat voluptatibus laborum porro repellat ipsa aperiam repellendus ipsam! Inventore, adipisci! Corrupti velit iure tenetur sequi nostrum, magnam consectetur. Ducimus sint nihil maxime animi quasi optio eligendi molestiae.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptas quidem odio delectus quae porro tempora modi atque recusandae autem quos esse et corrupti',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptas quidem odio delectus quae porro tempora modi atque recusandae autem quos esse et corrupti, ratione laborum fugit voluptatibus optio error repudiandae distinctio quas repellendus mollitia vel officia! Non fugiat asperiores qui voluptates repudiandae minima, illo magnam tempore autem hic? Perferendis libero, fuga soluta aliquam deleniti suscipit quae repudiandae totam velit autem placeat quidem eos tempora nisi quibusdam officiis quasi nemo sit. Quis fugiat voluptatibus laborum porro repellat ipsa aperiam repellendus ipsam! Inventore, adipisci! Corrupti velit iure tenetur sequi nostrum, magnam consectetur. Ducimus sint nihil maxime animi quasi optio eligendi molestiae.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptas quidem odio delectus quae porro tempora modi atque recusandae autem quos esse et corrupti',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptas quidem odio delectus quae porro tempora modi atque recusandae autem quos esse et corrupti, ratione laborum fugit voluptatibus optio error repudiandae distinctio quas repellendus mollitia vel officia! Non fugiat asperiores qui voluptates repudiandae minima, illo magnam tempore autem hic? Perferendis libero, fuga soluta aliquam deleniti suscipit quae repudiandae totam velit autem placeat quidem eos tempora nisi quibusdam officiis quasi nemo sit. Quis fugiat voluptatibus laborum porro repellat ipsa aperiam repellendus ipsam! Inventore, adipisci! Corrupti velit iure tenetur sequi nostrum, magnam consectetur. Ducimus sint nihil maxime animi quasi optio eligendi molestiae.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
