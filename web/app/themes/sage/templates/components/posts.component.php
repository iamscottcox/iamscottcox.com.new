<?php

use Timber\Timber;

global $paged;
if (!isset($paged) || !$paged){
    $paged = 1;
}
$context = Timber::get_context();
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'paged' => $paged
);

query_posts($args);

$context = Timber::get_context();
$context['posts'] = Timber::get_posts($args);
$context['pagination'] = Timber::get_pagination();

Timber::render('posts.view.twig', $context);