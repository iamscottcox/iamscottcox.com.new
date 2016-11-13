<?php

use Timber\Timber;
use Templates\Classes\Content_Block;

$context = Timber::get_context();

$context['posts'] = [
  (new Content_Block())
    ->setTitle('<h4>HTML</h4>')
    ->setImg('<img src="http://placehold.it/300x300" alt="placeholder">'),
  (new Content_Block())
    ->setTitle('<h4>CSS</h4>')
    ->setImg('<img src="http://placehold.it/300x300" alt="placeholder">'),
  (new Content_Block())
    ->setTitle('<h4>JavaScript</h4>')
    ->setImg('<img src="http://placehold.it/300x300" alt="placeholder">'),
  (new Content_Block())
    ->setTitle('<h4>jQuery</h4>')
    ->setImg('<img src="http://placehold.it/300x300" alt="placeholder">'),
  (new Content_Block())
    ->setTitle('<h4>React</h4>')
    ->setImg('<img src="http://placehold.it/300x300" alt="placeholder">'),
  (new Content_Block())
    ->setTitle('<h4>SCSS</h4>')
    ->setImg('<img src="http://placehold.it/300x300" alt="placeholder">'),
  (new Content_Block())
    ->setTitle('<h4>Git</h4>')
    ->setImg('<img src="http://placehold.it/300x300" alt="placeholder">'),
  (new Content_Block())
    ->setTitle('<h4>Babel</h4>')
    ->setImg('<img src="http://placehold.it/300x300" alt="placeholder">'),
  (new Content_Block())
    ->setTitle('<h4>Webpack</h4>')
    ->setImg('<img src="http://placehold.it/300x300" alt="placeholder">'),
  (new Content_Block())
    ->setTitle('<h4>Terminal</h4>')
    ->setImg('<img src="http://placehold.it/300x300" alt="placeholder">'),
];

Timber::render('my-skills.view.twig', $context);