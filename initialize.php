<?php

chdir(__DIR__);

call_user_func(function () {
  require 'tetlphp/framework/initialize.php';
  require __DIR__.DS.'helpers'.EXT;

  import('server');

  run(function () {

    import('partial');
    import('a_record');

    if (request::get('migrate')) {
      import('db');

      require __DIR__.DS.'database'.DS.'schema'.EXT;
      require __DIR__.DS.'database'.DS.'seeds'.EXT;

      redirect();
    }

    root(function () {
      if ( ! my_cats::count()) {
        redirect(url_for('profile'));
      }
      view('home/index.html');
    }, array('path' => 'home'));

    post('/async', function () {
      if ($oid = request::get('oid')) {
        if (request::get('rm')) {
          ($old = my_list::find_by_offer_id($oid)) ? $old->delete() : NULL;
        } else {
          my_list::create(array(
            'offer_id' => $oid,
          ));
        }
      } else {
        if (request::get('st')) {
          my_cats::create(array(
            'cat_id' => request::get('cid'),
          ));
        } else {
          ($old = my_cats::find_by_cat_id(request::get('cid'))) ? $old->delete() : NULL;
        }
      }
      exit;
    });

    get('/:part(/:id)', function () {
      view(sprintf('home/%s.html', params('part')));
    });


  });
});
