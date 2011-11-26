<?php

function view($file, array $vars = array(), $template = 'default.html') {
  echo partial("layouts/$template", array(
    'body' => partial($file, $vars),
  ));
}
