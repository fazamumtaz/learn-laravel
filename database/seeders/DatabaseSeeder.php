<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Badzlan Nur D',
            'email' => 'badland@gmail.com',
            'password' => bcrypt('234')
        ]);
        User::create([
            'name' => 'Faza Mumtaz Ramadhan',
            'email' => 'fazam@gmail.com',
            'password' => bcrypt('234')
        ]);
        User::create([
            'name' => 'Syaikhani Giffa I',
            'email' => 'sgi@gmail.com',
            'password' => bcrypt('234')
        ]);

        Category::create([
            'name' => 'Productivity',
            'slug' => 'productivity'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Post::create([
            'blogTitle' => 'Dart: Multiplatform Programming Language',
            'slug' => 'dmpl',
            'category_id' => 2,
            'user_id' => 1,
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt repellendus eligendi ducimus officiis dolorum recusandae, voluptatum vitae unde eveniet voluptatem hic odit fugit perspiciatis deleniti earum praesentium, ut adipisci animi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quos amet vel blanditiis, exercitationem, cupiditate aliquid consectetur consequuntur dicta, laudantium atque odit enim aliquam eius autem voluptatem. Alias nobis aspernatur quod facere dolorum quas cumque nesciunt dignissimos sit ad quae itaque laborum, accusamus maiores dolore sint odit distinctio sed maxime?</p>'
        ]);
        Post::create([
            'blogTitle' => 'Python is Insane',
            'slug' => 'pii',
            'category_id' => 2,
            'user_id' => 2,
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt repellendus eligendi ducimus officiis dolorum recusandae, voluptatum vitae unde eveniet voluptatem hic odit fugit perspiciatis deleniti earum praesentium, ut adipisci animi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quos amet vel blanditiis, exercitationem, cupiditate aliquid consectetur consequuntur dicta, laudantium atque odit enim aliquam eius autem voluptatem. Alias nobis aspernatur quod facere dolorum quas cumque nesciunt dignissimos sit ad quae itaque laborum, accusamus maiores dolore sint odit distinctio sed maxime?</p>'
        ]);
        Post::create([
            'blogTitle' => 'How to be a morning person',
            'slug' => 'htbamp',
            'category_id' => 2,
            'user_id' => 3,
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt repellendus eligendi ducimus officiis dolorum recusandae, voluptatum vitae unde eveniet voluptatem hic odit fugit perspiciatis deleniti earum praesentium, ut adipisci animi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quos amet vel blanditiis, exercitationem, cupiditate aliquid consectetur consequuntur dicta, laudantium atque odit enim aliquam eius autem voluptatem. Alias nobis aspernatur quod facere dolorum quas cumque nesciunt dignissimos sit ad quae itaque laborum, accusamus maiores dolore sint odit distinctio sed maxime?</p>'
        ]);
        Post::create([
            'blogTitle' => 'React JS is getting old',
            'slug' => 'rjsigo',
            'category_id' => 2,
            'user_id' => 1,
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt repellendus eligendi ducimus officiis dolorum recusandae, voluptatum vitae unde eveniet voluptatem hic odit fugit perspiciatis deleniti earum praesentium, ut adipisci animi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quos amet vel blanditiis, exercitationem, cupiditate aliquid consectetur consequuntur dicta, laudantium atque odit enim aliquam eius autem voluptatem. Alias nobis aspernatur quod facere dolorum quas cumque nesciunt dignissimos sit ad quae itaque laborum, accusamus maiores dolore sint odit distinctio sed maxime?</p>'
        ]);
    }
}
