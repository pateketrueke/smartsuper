<?php
/* 2011-11-27 04:18:16 */
create_table('offers', array(
                         'title' => array('string', 255),
                         'desc' => array('text'),
                         'image' => array('string', 255),
                         'price' => array('float'),
                         'id' => array('primary_key'),
                       ), array('force' => TRUE));


create_table('my_list', array(
                          'offer_id' => array('integer'),
                          'id' => array('primary_key'),
                        ), array('force' => TRUE));


