<?php


use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Aziz Kurniawan",
        "email" => "aziz.kurniawan13@gmail.com",
        "image" => "arsen.jpg"
    ]);
});

// Route::get('/blog', function () {
//     $blog_posts = [
//         [
//             "title" => "Judul Posts Pertama",
//             "slug" => "judul-post-pertama",
//             "author" => "Aziz Kurniawan",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam error sequi minima cumque ratione reprehenderit consequuntur, voluptates eveniet? Libero omnis optio fuga vel quo amet enim rerum tenetur vero repudiandae temporibus qui autem facere voluptatibus doloremque tempore esse consequuntur quisquam dolore quae, ad magnam molestiae harum. Sapiente unde quos officia, perferendis provident in. Ad veniam, vero dolores veritatis recusandae maiores at quia dicta? Culpa alias assumenda, dignissimos earum quas quam adipisci aperiam illum vel dolores, nobis fugit eos neque commodi quaerat veniam consectetur quidem? Dolorum dolor atque amet."
//         ],
//         [
            
//             "title" => "Judul Posts Kedua",
//             "slug" => "judul-post-kedua",
//             "author" => "Rafa Al Fatih",
//             "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam expedita rerum numquam nesciunt commodi at error voluptatum quis incidunt deserunt quasi nostrum tempora, molestiae quibusdam! Autem excepturi deleniti eos odio ratione fuga nesciunt non? Beatae officia optio rem dicta aperiam quod, obcaecati dolore quas quia eius animi? Voluptas perspiciatis, ab officiis nesciunt sequi expedita inventore aliquam consequuntur amet quae voluptatibus optio incidunt blanditiis assumenda repellendus iusto. Debitis quos vel placeat aliquid est, nemo praesentium aperiam sapiente ratione tempore mollitia! Nobis voluptatem magnam fugit ab maiores quidem, inventore temporibus! Fugit saepe facilis at magni libero possimus magnam, sed consectetur numquam quod."
//         ]
        
//     ];
//     return view('posts', [
//         "title" => "Posts",
//         "posts" => $blog_posts
//     ]);
// });

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => $category->name,
        'posts' => $category->posts,

    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts

    ]);
});