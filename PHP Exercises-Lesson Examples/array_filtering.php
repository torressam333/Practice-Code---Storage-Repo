<?php 

class Post{

    public $title;

    public $published;

    public $author;


    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->published = $published;
        $this->author = $author;
    }
}

$posts = [
    new Post('My First post', 'Samuel', true),

    new Post('My Second post', 'John', true),

    new Post('My Third post', 'Elizabeth', true),

    new Post('My Fourth post', 'Dewgong', false)
];


$posts = array_map(function ($post){

    return (array) $post;
}, $posts);

var_dump($posts);



$authors = array_column($posts, 'author', 'title');

var_dump($authors);



/*
ARRAY MAP is useful when you need to modify what gets returned.

$modified = array_map(function ($post){

    $post->published = true;
    
    return ['title' => $post->title];
    return $post;


},$posts);

var_dump($modified);

*/


/* 
ARRAY_FILTER Example
$unpublishedPosts = array_filter($posts, function($post) {

    return ! $post->published;

});

$publishedPosts = array_filter($posts, function($post) {

    return $post->published;

});

var_dump($publishedPosts); */