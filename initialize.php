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

    get('/:action/:id', function () {
      view(sprintf('home/%s.html', params('action')), array(), 'dialog.html');
    }, array(
      'constraints' => array(
        ':action' => '(add|rm)',
      ),
    ));

    get('/:part(/:id)', function () {
      view(sprintf('home/%s.html', params('part')));
    });


  });
});
