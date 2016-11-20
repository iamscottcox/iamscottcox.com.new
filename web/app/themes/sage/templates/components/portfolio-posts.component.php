<?php

use Timber\Timber;

global $paged;
if (!isset($paged) || !$paged){
    $paged = 1;
}
$context = Timber::get_context();
$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => 5,
    'paged' => $paged
);

query_posts($args);

$context = Timber::get_context();
$context['posts'] = Timber::get_posts($args);
$context['pagination'] = Timber::get_pagination();

Timber::render('posts.view.twig', $context);