<?php 
return array (
  'id' => 
  array (
    'name' => 'id',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => NULL,
    'primary' => true,
    'autoinc' => true,
  ),
  'uid' => 
  array (
    'name' => 'uid',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'writer' => 
  array (
    'name' => 'writer',
    'type' => 'varchar(50)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'name' => 
  array (
    'name' => 'name',
    'type' => 'char(40)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'title' => 
  array (
    'name' => 'title',
    'type' => 'char(80)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'category_id' => 
  array (
    'name' => 'category_id',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'keywords' => 
  array (
    'name' => 'keywords',
    'type' => 'varchar(255)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'description' => 
  array (
    'name' => 'description',
    'type' => 'varchar(255)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'type' => 
  array (
    'name' => 'type',
    'type' => 'varchar(50)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'isrecommend' => 
  array (
    'name' => 'isrecommend',
    'type' => 'tinyint(4)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'istop' => 
  array (
    'name' => 'istop',
    'type' => 'tinyint(4)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'link_str' => 
  array (
    'name' => 'link_str',
    'type' => 'varchar(255)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'cover_path' => 
  array (
    'name' => 'cover_path',
    'type' => 'varchar(255)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'display' => 
  array (
    'name' => 'display',
    'type' => 'tinyint(3) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'view' => 
  array (
    'name' => 'view',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'sort' => 
  array (
    'name' => 'sort',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'create_time' => 
  array (
    'name' => 'create_time',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'update_time' => 
  array (
    'name' => 'update_time',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'status' => 
  array (
    'name' => 'status',
    'type' => 'tinyint(4)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
);