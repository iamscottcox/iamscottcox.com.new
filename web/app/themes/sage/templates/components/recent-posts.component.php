<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 10/10/2016
 * Time: 20:35
 */

use Timber\Timber;
use Templates\Classes\Content_Block;

$context = Timber::get_context();
$context['posts'] = [
  (new Content_Block())
    ->setTitle('<h2>Hello World!</h2>')
    ->setContent('<p>Synth squid twee blog actually master cleanse. Normcore skateboard irony, hella vice yuccie fanny pack hexagon brooklyn man bun before they sold out pinterest. Mustache 90\'s everyday carry, mumblecore occupy neutra gentrify YOLO readymade street art actually knausgaard 3 wolf moon. Truffaut affogato humblebrag everyday carry organic pickled. Pickled chambray quinoa gastropub freegan, kogi tbh organic coloring book. Chillwave vice williamsburg enamel pin, banh mi fam biodiesel scenester. Scenester locavore chicharrones, direct trade semiotics ennui humblebrag PBR&B man braid.</p>'),
(new Content_Block())
  ->setTitle('<h2>Hello World!</h2>')
  ->setContent('<p>Synth squid twee blog actually master cleanse. Normcore skateboard irony, hella vice yuccie fanny pack hexagon brooklyn man bun before they sold out pinterest. Mustache 90\'s everyday carry, mumblecore occupy neutra gentrify YOLO readymade street art actually knausgaard 3 wolf moon. Truffaut affogato humblebrag everyday carry organic pickled. Pickled chambray quinoa gastropub freegan, kogi tbh organic coloring book. Chillwave vice williamsburg enamel pin, banh mi fam biodiesel scenester. Scenester locavore chicharrones, direct trade semiotics ennui humblebrag PBR&B man braid.</p>'),
  (new Content_Block())
  ->setTitle('<h2>Hello World!</h2>')
  ->setContent('<p>Synth squid twee blog actually master cleanse. Normcore skateboard irony, hella vice yuccie fanny pack hexagon brooklyn man bun before they sold out pinterest. Mustache 90\'s everyday carry, mumblecore occupy neutra gentrify YOLO readymade street art actually knausgaard 3 wolf moon. Truffaut affogato humblebrag everyday carry organic pickled. Pickled chambray quinoa gastropub freegan, kogi tbh organic coloring book. Chillwave vice williamsburg enamel pin, banh mi fam biodiesel scenester. Scenester locavore chicharrones, direct trade semiotics ennui humblebrag PBR&B man braid.</p>')
];

Timber::render('recent-posts.view.twig', $context);


