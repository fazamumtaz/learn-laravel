<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        "pageTitle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "pageTitle" => "About"
    ]);
});

Route::get('posts', function () {
    $blog_post = [
        [
            "blogTitle" => "Judul blog 1",
            "slug" => "blog-pertama",
            "author" => "Syaikhani Giffa Indrawan",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, omnis? Maiores hic autem enim magni in doloribus officia, reprehenderit molestiae vitae repellendus fuga dolorum obcaecati deserunt explicabo nostrum debitis modi cum dicta quasi velit! Fuga beatae temporibus, ab aspernatur quidem labore odit in, minus obcaecati cumque officia quos iure doloremque tenetur impedit nemo enim ipsam sequi commodi? Dolor quas fugit ad eligendi possimus laborum et ipsam consequatur, odit necessitatibus tempore, itaque recusandae deserunt! Ex et quasi, facilis nulla molestias commodi libero in ratione consequuntur numquam reiciendis ipsa earum corporis, tenetur accusantium, odit deserunt dolore laboriosam dolorum voluptate quam. Aperiam, impedit."
        ],
        [
            "blogTitle" => "Judul blog 2",
            "slug" => "blog-kedua",
            "author" => "Faza Mumtaz Ramadhan",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quibusdam voluptas dolor accusamus quo mollitia ipsum vero facilis rem nisi blanditiis alias aperiam expedita consequatur sit ex veritatis architecto, animi magni exercitationem corrupti deserunt quam veniam corporis? Esse suscipit animi quae! Aperiam facilis nostrum praesentium vel officiis reiciendis! Quaerat est tempora tenetur officiis eos quo, iste neque maxime magni, facere ullam! Esse velit modi est itaque magnam, praesentium et voluptas nisi, laboriosam atque quas. Tempora assumenda voluptatem et, voluptates culpa placeat dignissimos voluptate eum maiores, quos, suscipit sed aliquam laboriosam."
        ]
    ];

    return view('posts', [
        "pageTitle" => "Posts",
        "posts" => $blog_post
        // "postTitle" => "blogTitle",
        // "author" => "author",
        // "content" => "content"
    ]);
});

Route::get('post/{slug}', function ($slug) {
    $blog_post = [
        [
            "blogTitle" => "Judul blog 1",
            "slug" => "blog-pertama",
            "author" => "Syaikhani Giffa Indrawan",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, omnis? Maiores hic autem enim magni in doloribus officia, reprehenderit molestiae vitae repellendus fuga dolorum obcaecati deserunt explicabo nostrum debitis modi cum dicta quasi velit! Fuga beatae temporibus, ab aspernatur quidem labore odit in, minus obcaecati cumque officia quos iure doloremque tenetur impedit nemo enim ipsam sequi commodi? Dolor quas fugit ad eligendi possimus laborum et ipsam consequatur, odit necessitatibus tempore, itaque recusandae deserunt! Ex et quasi, facilis nulla molestias commodi libero in ratione consequuntur numquam reiciendis ipsa earum corporis, tenetur accusantium, odit deserunt dolore laboriosam dolorum voluptate quam. Aperiam, impedit."
        ],
        [
            "blogTitle" => "Judul blog 2",
            "slug" => "blog-kedua",
            "author" => "Faza Mumtaz Ramadhan",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quibusdam voluptas dolor accusamus quo mollitia ipsum vero facilis rem nisi blanditiis alias aperiam expedita consequatur sit ex veritatis architecto, animi magni exercitationem corrupti deserunt quam veniam corporis? Esse suscipit animi quae! Aperiam facilis nostrum praesentium vel officiis reiciendis! Quaerat est tempora tenetur officiis eos quo, iste neque maxime magni, facere ullam! Esse velit modi est itaque magnam, praesentium et voluptas nisi, laboriosam atque quas. Tempora assumenda voluptatem et, voluptates culpa placeat dignissimos voluptate eum maiores, quos, suscipit sed aliquam laboriosam."
        ]
    ];

    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "pageTitle" => "Single Post",
        "post" => $new_post

    ]);
});
