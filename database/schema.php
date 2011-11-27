<?php
/* 2011-11-27 05:57:06 */
create_table('offers', array(
                         'title' => array('string', 255),
                         'parent' => array('integer'),
                         'image' => array('string', 255),
                         'price' => array('float'),
                         'id' => array('primary_key'),
                       ), array('force' => TRUE));


create_table('my_list', array(
                          'offer_id' => array('integer'),
                          'id' => array('primary_key'),
                        ), array('force' => TRUE));


create_table('categories', array(
                             'title' => array('string', 255),
                             'image' => array('string', 255),
                             'id' => array('primary_key'),
                           ), array('force' => TRUE));


create_table('my_cats', array(
                          'cat_id' => array('integer'),
                          'id' => array('primary_key'),
                        ), array('force' => TRUE));


