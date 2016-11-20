<?php

use Timber\Timber;

$context = Timber::get_context();
$args = array(
    'post_type' => 'skills',
    'posts_per_page' => 10
);

$context = Timber::get_context();
$context['posts'] = Timber::get_posts($args);

Timber::render('posts.view.twig', $context);