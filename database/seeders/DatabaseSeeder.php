<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void 
     */
    public function run()
    {
        User::factory(40)->create();

        User::create([
            'name' => 'Dirga Febriyanda',
            'username' => 'dirgafebriyanda',
            'email' => 'dirgafebriyanda12@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Dadang Riadi',
        //     'email' => 'dadangriadi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Grapic Design',
            'slug' => 'grapic-design'
        ]);
        Category::create([
            'name' => 'Animator',
            'slug' => 'animator'
        ]);
        Category::create([
            'name' => 'UI - UX Design',
            'slug' => 'ui-ux-design'
        ]);
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);

        Post::factory(200)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quisquam quod error officia soluta adipisci sint odio, voluptatibus nulla ea provident omnis corrupti laborum tempora nemo? Magni voluptate, dignissimos quidem officia deserunt similique ea nisi nihil explicabo, molestiae fugit, voluptatibus veniam modi voluptatem voluptas iste minus sint eius id corrupti impedit quia. Sapiente magnam enim at cupiditate laborum explicabo ducimus possimus, praesentium accusamus, repudiandae quia! Totam, nam ipsam.</p><p>Beatae amet, dolorem corporis nemo sit culpa mollitia tempora repellat aut maiores, magni odit illo voluptatum facere quo cupiditate iusto eos aliquid, debitis consequuntur optio consectetur repudiandae. Quas, possimus cumque vitae officia ea esse, eum sed, quidem saepe nesciunt dolores provident porro quam nemo expedita explicabo dignissimos.</p><p> Porro voluptate dicta esse eos suscipit pariatur dolorem nam, voluptatum hic? Ullam doloribus sunt, blanditiis amet minima saepe iusto eos, pariatur maiores fugiat magnam, aliquam praesentium recusandae similique cupiditate aspernatur dolorem laudantium quae vel nulla adipisci magni dolore exercitationem. Dolorum, blanditiis debitis odit sequi, veritatis, rem saepe distinctio sunt iure velit commodi amet quia repellendus cum aperiam eos natus odio fugiat? Temporibus pariatur ad ea vitae, aliquid tempora necessitatibus atque veritatis suscipit doloribus accusantium! Reiciendis fugiat soluta sit! Repellendus dignissimos, dolor dolorem vitae voluptatibus animi.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quisquam quod error officia soluta adipisci sint odio, voluptatibus nulla ea provident omnis corrupti laborum tempora nemo? Magni voluptate, dignissimos quidem officia deserunt similique ea nisi nihil explicabo, molestiae fugit, voluptatibus veniam modi voluptatem voluptas iste minus sint eius id corrupti impedit quia. Sapiente magnam enim at cupiditate laborum explicabo ducimus possimus, praesentium accusamus, repudiandae quia! Totam, nam ipsam.</p><p>Beatae amet, dolorem corporis nemo sit culpa mollitia tempora repellat aut maiores, magni odit illo voluptatum facere quo cupiditate iusto eos aliquid, debitis consequuntur optio consectetur repudiandae. Quas, possimus cumque vitae officia ea esse, eum sed, quidem saepe nesciunt dolores provident porro quam nemo expedita explicabo dignissimos.</p><p> Porro voluptate dicta esse eos suscipit pariatur dolorem nam, voluptatum hic? Ullam doloribus sunt, blanditiis amet minima saepe iusto eos, pariatur maiores fugiat magnam, aliquam praesentium recusandae similique cupiditate aspernatur dolorem laudantium quae vel nulla adipisci magni dolore exercitationem. Dolorum, blanditiis debitis odit sequi, veritatis, rem saepe distinctio sunt iure velit commodi amet quia repellendus cum aperiam eos natus odio fugiat? Temporibus pariatur ad ea vitae, aliquid tempora necessitatibus atque veritatis suscipit doloribus accusantium! Reiciendis fugiat soluta sit! Repellendus dignissimos, dolor dolorem vitae voluptatibus animi.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quisquam quod error officia soluta adipisci sint odio, voluptatibus nulla ea provident omnis corrupti laborum tempora nemo? Magni voluptate, dignissimos quidem officia deserunt similique ea nisi nihil explicabo, molestiae fugit, voluptatibus veniam modi voluptatem voluptas iste minus sint eius id corrupti impedit quia. Sapiente magnam enim at cupiditate laborum explicabo ducimus possimus, praesentium accusamus, repudiandae quia! Totam, nam ipsam.</p><p>Beatae amet, dolorem corporis nemo sit culpa mollitia tempora repellat aut maiores, magni odit illo voluptatum facere quo cupiditate iusto eos aliquid, debitis consequuntur optio consectetur repudiandae. Quas, possimus cumque vitae officia ea esse, eum sed, quidem saepe nesciunt dolores provident porro quam nemo expedita explicabo dignissimos.</p><p> Porro voluptate dicta esse eos suscipit pariatur dolorem nam, voluptatum hic? Ullam doloribus sunt, blanditiis amet minima saepe iusto eos, pariatur maiores fugiat magnam, aliquam praesentium recusandae similique cupiditate aspernatur dolorem laudantium quae vel nulla adipisci magni dolore exercitationem. Dolorum, blanditiis debitis odit sequi, veritatis, rem saepe distinctio sunt iure velit commodi amet quia repellendus cum aperiam eos natus odio fugiat? Temporibus pariatur ad ea vitae, aliquid tempora necessitatibus atque veritatis suscipit doloribus accusantium! Reiciendis fugiat soluta sit! Repellendus dignissimos, dolor dolorem vitae voluptatibus animi.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quisquam quod error officia soluta adipisci sint odio, voluptatibus nulla ea provident omnis corrupti laborum tempora nemo? Magni voluptate, dignissimos quidem officia deserunt similique ea nisi nihil explicabo, molestiae fugit, voluptatibus veniam modi voluptatem voluptas iste minus sint eius id corrupti impedit quia. Sapiente magnam enim at cupiditate laborum explicabo ducimus possimus, praesentium accusamus, repudiandae quia! Totam, nam ipsam.</p><p>Beatae amet, dolorem corporis nemo sit culpa mollitia tempora repellat aut maiores, magni odit illo voluptatum facere quo cupiditate iusto eos aliquid, debitis consequuntur optio consectetur repudiandae. Quas, possimus cumque vitae officia ea esse, eum sed, quidem saepe nesciunt dolores provident porro quam nemo expedita explicabo dignissimos.</p><p> Porro voluptate dicta esse eos suscipit pariatur dolorem nam, voluptatum hic? Ullam doloribus sunt, blanditiis amet minima saepe iusto eos, pariatur maiores fugiat magnam, aliquam praesentium recusandae similique cupiditate aspernatur dolorem laudantium quae vel nulla adipisci magni dolore exercitationem. Dolorum, blanditiis debitis odit sequi, veritatis, rem saepe distinctio sunt iure velit commodi amet quia repellendus cum aperiam eos natus odio fugiat? Temporibus pariatur ad ea vitae, aliquid tempora necessitatibus atque veritatis suscipit doloribus accusantium! Reiciendis fugiat soluta sit! Repellendus dignissimos, dolor dolorem vitae voluptatibus animi.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);           
    }
}
