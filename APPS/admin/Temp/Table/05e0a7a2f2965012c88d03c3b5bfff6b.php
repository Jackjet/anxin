<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'id' => 
  array (
    'field' => 'id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'title' => 
  array (
    'field' => 'title',
    'type' => 'varchar(100)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'des' => 
  array (
    'field' => 'des',
    'type' => 'varchar(200)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'title_en' => 
  array (
    'field' => 'title_en',
    'type' => 'varchar(200)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'des_en' => 
  array (
    'field' => 'des_en',
    'type' => 'varchar(200)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'pic_url' => 
  array (
    'field' => 'pic_url',
    'type' => 'varchar(150)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'file_url' => 
  array (
    'field' => 'file_url',
    'type' => 'varchar(100)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'file_url_en' => 
  array (
    'field' => 'file_url_en',
    'type' => 'varchar(100)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'type' => 
  array (
    'field' => 'type',
    'type' => 'tinyint(1)',
    'null' => 'NO',
    'key' => false,
    'default' => '1',
    'extra' => '',
  ),
  'url' => 
  array (
    'field' => 'url',
    'type' => 'varchar(120)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'isshow' => 
  array (
    'field' => 'isshow',
    'type' => 'tinyint(1)',
    'null' => 'NO',
    'key' => false,
    'default' => '1',
    'extra' => '',
  ),
  'istop' => 
  array (
    'field' => 'istop',
    'type' => 'tinyint(1)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'orders' => 
  array (
    'field' => 'orders',
    'type' => 'smallint(5)',
    'null' => 'NO',
    'key' => false,
    'default' => '1',
    'extra' => '',
  ),
  'create_time' => 
  array (
    'field' => 'create_time',
    'type' => 'int(11)',
    'null' => 'YES',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'create_time2' => 
  array (
    'field' => 'create_time2',
    'type' => 'datetime',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>