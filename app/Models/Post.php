<?php

namespace App\Models;

use PDO;

class Post
{
    private static $blog_post = [
        [
            "blogTitle" => "Tutor jago main fanny",
            "slug" => "blog-pertama",
            "author" => "Syaikhani Giffa Indrawan",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, omnis? Maiores hic autem enim magni in doloribus officia, reprehenderit molestiae vitae repellendus fuga dolorum obcaecati deserunt explicabo nostrum debitis modi cum dicta quasi velit! Fuga beatae temporibus, ab aspernatur quidem labore odit in, minus obcaecati cumque officia quos iure doloremque tenetur impedit nemo enim ipsam sequi commodi? Dolor quas fugit ad eligendi possimus laborum et ipsam consequatur, odit necessitatibus tempore, itaque recusandae deserunt! Ex et quasi, facilis nulla molestias commodi libero in ratione consequuntur numquam reiciendis ipsa earum corporis, tenetur accusantium, odit deserunt dolore laboriosam dolorum voluptate quam. Aperiam, impedit."
        ],
        [
            "blogTitle" => "Belajar ReactJS",
            "slug" => "blog-kedua",
            "author" => "Faza Mumtaz Ramadhan",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quibusdam voluptas dolor accusamus quo mollitia ipsum vero facilis rem nisi blanditiis alias aperiam expedita consequatur sit ex veritatis architecto, animi magni exercitationem corrupti deserunt quam veniam corporis? Esse suscipit animi quae! Aperiam facilis nostrum praesentium vel officiis reiciendis! Quaerat est tempora tenetur officiis eos quo, iste neque maxime magni, facere ullam! Esse velit modi est itaque magnam, praesentium et voluptas nisi, laboriosam atque quas. Tempora assumenda voluptatem et, voluptates culpa placeat dignissimos voluptate eum maiores, quos, suscipit sed aliquam laboriosam."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
