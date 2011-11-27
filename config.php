<?php

$config['rewrite'] = strpos(value($_SERVER, 'HTTP_HOST'), '.com') ? 1 : 0;
$config['database'] = 'sqlite:'.getcwd().DS.'database'.DS.'db.sqlite';
