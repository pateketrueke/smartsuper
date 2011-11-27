<?php

import('a_record');

categories::delete_all();
offers::delete_all();

$jsons = dir2arr(__DIR__.DS.'imports', '*.json');

foreach ($jsons as $json_file) {
  $test = read($json_file);

  $title = strtr(extn($json_file, TRUE), '_', ' ');

  $parent = categories::create(array(
    'title' => $title,
  ));

  preg_match_all('/"up":"(\d+)","name":"([^"]+)","c":"[^"]*","d":"([\d.]+)"/', $test, $matches);

  $set = range(0, sizeof($matches[0]) - 1);

  shuffle($set);

  foreach ($set as $c => $one) {
    if ($c > 10) {
      break;
    }

    $product = offers::create(array(
      'title' => $matches[2][$one],
      'image' => $matches[1][$one],
      'price' => $matches[3][$one],
      'parent' => $parent->id(),
    ));
  }
}
