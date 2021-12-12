<?php

require __DIR__ . '/vendor/autoload.php';

use App\Post;
use App\Comment;

$post = new Post();

$comment1 = new Comment();
$comment2 = new Comment();
$comment3 = new Comment();
$comment4 = new Comment();

$post->addComment($comment1);
$post->addComment($comment2);
$post->addComment($comment3);
$post->addComment($comment4);

$comments = $post->getComments();

$total_comments = count($comments);

echo "La cantidad de comentarios en el post es: $total_comments";