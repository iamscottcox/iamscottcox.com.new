<?php

use Timber\Timber;

$fields = get_fields();

$context = Timber::get_context();

if ($fields['feature_header'] === 'yes') {
  $context['fields'] = $fields;
  $context['title'] = wp_title();
  Timber::render('feature-header.view.twig', $context);
} else {
  Timber::render('header.view.twig', $context);
}

