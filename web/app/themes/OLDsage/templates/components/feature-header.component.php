<?php

use Timber\Timber;

$context = Timber::get_context();

Timber::render('feature-header.view.twig', $context);