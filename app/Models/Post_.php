<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aziz Kurniawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam error sequi minima cumque ratione reprehenderit consequuntur, voluptates eveniet? Libero omnis optio fuga vel quo amet enim rerum tenetur vero repudiandae temporibus qui autem facere voluptatibus doloremque tempore esse consequuntur quisquam dolore quae, ad magnam molestiae harum. Sapiente unde quos officia, perferendis provident in. Ad veniam, vero dolores veritatis recusandae maiores at quia dicta? Culpa alias assumenda, dignissimos earum quas quam adipisci aperiam illum vel dolores, nobis fugit eos neque commodi quaerat veniam consectetur quidem? Dolorum dolor atque amet."
        ],
        [
            
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rafa Al Fatih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam expedita rerum numquam nesciunt commodi at error voluptatum quis incidunt deserunt quasi nostrum tempora, molestiae quibusdam! Autem excepturi deleniti eos odio ratione fuga nesciunt non? Beatae officia optio rem dicta aperiam quod, obcaecati dolore quas quia eius animi? Voluptas perspiciatis, ab officiis nesciunt sequi expedita inventore aliquam consequuntur amet quae voluptatibus optio incidunt blanditiis assumenda repellendus iusto. Debitis quos vel placeat aliquid est, nemo praesentium aperiam sapiente ratione tempore mollitia! Nobis voluptatem magnam fugit ab maiores quidem, inventore temporibus! Fugit saepe facilis at magni libero possimus magnam, sed consectetur numquam quod."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
