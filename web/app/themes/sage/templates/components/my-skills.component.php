<?php

use Timber\Timber;
use Templates\Classes\Content_Block;

$context = Timber::get_context();

$context['posts'] = [
  (new Content_Block())
    ->setTitle('<h4>HTML</h4>')
    ->setImgSrc('http://placehold.it/300x300'),
  (new Content_Block())
    ->setTitle('<h4>CSS</h4>')
    ->setImgSrc('http://placehold.it/300x300'),
  (new Content_Block())
    ->setTitle('<h4>JavaScript</h4>')
    ->setImgSrc('http://placehold.it/300x300'),
  (new Content_Block())
    ->setTitle('<h4>jQuery</h4>')
    ->setImgSrc('http://placehold.it/300x300'),
  (new Content_Block())
    ->setTitle('<h4>React</h4>')
    ->setImgSrc('http://placehold.it/300x300'),
  (new Content_Block())
    ->setTitle('<h4>SCSS</h4>')
    ->setImgSrc('http://placehold.it/300x300'),
];

Timber::render('my-skills.view.twig', $context);