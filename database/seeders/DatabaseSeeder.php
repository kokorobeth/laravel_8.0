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
        // User::create([
        //         'name' => 'Aziz Kurniawan',
        //         'email' => 'aziz.kurniawan13@gmail.com',
        //         'password' => bcrypt('1234')
        //     ]);
            
        //     User::create([
        //             'name' => 'Rafa Al  Fatih',
        //             'email' => 'rafaalfatih@gmail.com',
        //             'password' => bcrypt('1234')
        //         ]);
                
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quae quos esse voluptas vero recusandae accusamus sint reprehenderit suscipit,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quae quos esse voluptas vero recusandae accusamus sint reprehenderit suscipit, molestias libero cum ipsum adipisci animi ullam? Sint quia dolorem, eum omnis quam in reiciendis. Consequatur est doloribus aperiam voluptatum deserunt officia voluptatibus atque necessitatibus recusandae. Voluptatibus aliquam eaque, delectus modi accusantium nemo inventore culpa quae magnam distinctio molestiae ducimus corporis mollitia perspiciatis. Repudiandae iusto temporibus maiores nostrum odit sit! Optio corrupti, dolorum dicta voluptates, doloribus repellat, quae ipsam consectetur eum suscipit officia? Tenetur impedit voluptatum perspiciatis beatae quis veniam quaerat ipsum fugiat tempore, distinctio, ad consectetur, molestiae dicta neque. Tempora.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quae quos esse voluptas vero recusandae accusamus sint reprehenderit suscipit,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quae quos esse voluptas vero recusandae accusamus sint reprehenderit suscipit, molestias libero cum ipsum adipisci animi ullam? Sint quia dolorem, eum omnis quam in reiciendis. Consequatur est doloribus aperiam voluptatum deserunt officia voluptatibus atque necessitatibus recusandae. Voluptatibus aliquam eaque, delectus modi accusantium nemo inventore culpa quae magnam distinctio molestiae ducimus corporis mollitia perspiciatis. Repudiandae iusto temporibus maiores nostrum odit sit! Optio corrupti, dolorum dicta voluptates, doloribus repellat, quae ipsam consectetur eum suscipit officia? Tenetur impedit voluptatum perspiciatis beatae quis veniam quaerat ipsum fugiat tempore, distinctio, ad consectetur, molestiae dicta neque. Tempora.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quae quos esse voluptas vero recusandae accusamus sint reprehenderit suscipit,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quae quos esse voluptas vero recusandae accusamus sint reprehenderit suscipit, molestias libero cum ipsum adipisci animi ullam? Sint quia dolorem, eum omnis quam in reiciendis. Consequatur est doloribus aperiam voluptatum deserunt officia voluptatibus atque necessitatibus recusandae. Voluptatibus aliquam eaque, delectus modi accusantium nemo inventore culpa quae magnam distinctio molestiae ducimus corporis mollitia perspiciatis. Repudiandae iusto temporibus maiores nostrum odit sit! Optio corrupti, dolorum dicta voluptates, doloribus repellat, quae ipsam consectetur eum suscipit officia? Tenetur impedit voluptatum perspiciatis beatae quis veniam quaerat ipsum fugiat tempore, distinctio, ad consectetur, molestiae dicta neque. Tempora.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quae quos esse voluptas vero recusandae accusamus sint reprehenderit suscipit,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quae quos esse voluptas vero recusandae accusamus sint reprehenderit suscipit, molestias libero cum ipsum adipisci animi ullam? Sint quia dolorem, eum omnis quam in reiciendis. Consequatur est doloribus aperiam voluptatum deserunt officia voluptatibus atque necessitatibus recusandae. Voluptatibus aliquam eaque, delectus modi accusantium nemo inventore culpa quae magnam distinctio molestiae ducimus corporis mollitia perspiciatis. Repudiandae iusto temporibus maiores nostrum odit sit! Optio corrupti, dolorum dicta voluptates, doloribus repellat, quae ipsam consectetur eum suscipit officia? Tenetur impedit voluptatum perspiciatis beatae quis veniam quaerat ipsum fugiat tempore, distinctio, ad consectetur, molestiae dicta neque. Tempora.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}