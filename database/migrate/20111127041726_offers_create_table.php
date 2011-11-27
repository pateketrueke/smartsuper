<?php
/* 2011-11-27 04:17:26 */
create_table('offers', array(
  'title' => array(
    'string',
  ),
  'desc' => array(
    'text',
  ),
  'image' => array(
    'string',
  ),
  'price' => array(
    'float',
  ),
  'id' => array(
    'primary_key',
  ),
), array(
  'force' => true,
));
