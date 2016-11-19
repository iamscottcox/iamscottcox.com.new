<?php

use Timber\Timber;

$args = [
    'post_type' => 'post',
    'posts_per_page' => 10,
];

$context = Timber::get_context();
$context['posts'] = Timber::get_posts($args);

Timber::render('posts.view.twig', $context);