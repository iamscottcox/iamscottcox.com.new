<?php

use Timber\Timber;

$fields = get_fields();

$context = Timber::get_context();

Timber::render('feature-header.view.twig', $context);