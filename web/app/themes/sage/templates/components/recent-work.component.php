<?php

use Templates\Classes\Content_Block;
use Timber\Timber;

$context = Timber::get_context();
$context['posts'] = [
  (new Content_Block())
    ->setTitle('<h2>Hello World!</h2>')
    ->setContent('<p>Synth squid twee blog actually master cleanse. Normcore skateboard irony, hella vice yuccie fanny pack hexagon brooklyn man bun before they sold out pinterest. Mustache 90\'s everyday carry, mumblecore occupy neutra gentrify YOLO readymade street art actually knausgaard 3 wolf moon. Truffaut affogato humblebrag everyday carry organic pickled. Pickled chambray quinoa gastropub freegan, kogi tbh organic coloring book. Chillwave vice williamsburg enamel pin, banh mi fam biodiesel scenester. Scenester locavore chicharrones, direct trade semiotics ennui humblebrag PBR&B man braid.</p>')
  ->setImg('<img src="http://lorempixel.com/500/500" alt="placeholder">'),
  (new Content_Block())
    ->setTitle('<h2>Hello World!</h2>')
    ->setContent('<p>Synth squid twee blog actually master cleanse. Normcore skateboard irony, hella vice yuccie fanny pack hexagon brooklyn man bun before they sold out pinterest. Mustache 90\'s everyday carry, mumblecore occupy neutra gentrify YOLO readymade street art actually knausgaard 3 wolf moon. Truffaut affogato humblebrag everyday carry organic pickled. Pickled chambray quinoa gastropub freegan, kogi tbh organic coloring book. Chillwave vice williamsburg enamel pin, banh mi fam biodiesel scenester. Scenester locavore chicharrones, direct trade semiotics ennui humblebrag PBR&B man braid.</p>')
    ->setImg('<img src="http://lorempixel.com/500/500" alt="placeholder">')
];

Timber::render('recent-work-and-posts.view.twig', $context);