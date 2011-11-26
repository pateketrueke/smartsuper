<?php

chdir(__DIR__);

call_user_func(function () {
  require 'tetlphp/framework/initialize.php';
  require __DIR__.DS.'helpers'.EXT;

  import('server');

  run(function () {

    import('partial');

    root(function () {
      view('home/index.html');
    }, array('path' => 'home'));

    get('/show', function () {
      view('home/show.html');
    }, array('path' => 'show_list'));


  });
});
