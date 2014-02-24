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
    'type' => 'varchar(80)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'title_en' => 
  array (
    'field' => 'title_en',
    'type' => 'varchar(80)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'file_url' => 
  array (
    'field' => 'file_url',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'file_url_en' => 
  array (
    'field' => 'file_url_en',
    'type' => 'varchar(100)',
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
    'default' => '',
    'extra' => '',
  ),
  'pic_url_t' => 
  array (
    'field' => 'pic_url_t',
    'type' => 'varchar(150)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'pic_url_en' => 
  array (
    'field' => 'pic_url_en',
    'type' => 'varchar(150)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'pic_url_en_t' => 
  array (
    'field' => 'pic_url_en_t',
    'type' => 'varchar(150)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'url' => 
  array (
    'field' => 'url',
    'type' => 'varchar(150)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'create_time' => 
  array (
    'field' => 'create_time',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
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
  'isshow' => 
  array (
    'field' => 'isshow',
    'type' => 'tinyint(1)',
    'null' => 'NO',
    'key' => false,
    'default' => '1',
    'extra' => '',
  ),
  'orders' => 
  array (
    'field' => 'orders',
    'type' => 'smallint(4)',
    'null' => 'NO',
    'key' => false,
    'default' => '1',
    'extra' => '',
  ),
  'click' => 
  array (
    'field' => 'click',
    'type' => 'mediumint(6)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
);
?>