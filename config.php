<?php

$config['rewrite'] = 0;
$config['database'] = 'sqlite:'.getcwd().DS.'database'.DS.'db.sqlite';


if (strpos(value($_SERVER, 'HTTP_HOST'), '.com')) {
  $config['rewrite'] = 1;
  $config['database'] = str_replace('postgres:', 'pgsql:', getenv('SHARED_DATABASE_URL'));
}
