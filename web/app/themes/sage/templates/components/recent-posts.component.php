<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 10/10/2016
 * Time: 20:35
 */

use Timber\Timber;

$args = [
  'post_type' => 'post',
  'posts_per_page' => 2
];

$context = Timber::get_context();
$context['posts'] = Timber::get_posts($args);

Timber::render('recent-work-and-posts.view.twig', $context);


