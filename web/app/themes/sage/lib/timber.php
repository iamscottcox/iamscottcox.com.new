<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 10/10/2016
 * Time: 19:50
 */

use Timber\Timber;

Timber::$locations = [
  get_template_directory() . '/templates/views',
  get_template_directory() . '/templates/partials'
];