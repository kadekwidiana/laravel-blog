<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        User::create([
            'name' => 'Kadek Widiaana',
            'username' => 'Kadek Widiana',
            'email' => 'kdkonos10@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Erik',
        //     'email' => 'erik@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ducimus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ducimus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ducimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ducimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Lima',
        //     'slug' => 'judul-ke lima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ducimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis dolor, impedit voluptatem, atque repellendus ipsum dolorum recusandae molestiae laudantium fugiat consequuntur unde ex minima beatae cum eius quia deleniti?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
