<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 10/10/2016
 * Time: 20:35
 */

use Timber\Timber;

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();

Timber::render('recent-posts.view.twig', $context);

