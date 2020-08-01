<?php 
return array (
  'id' => 
  array (
    'name' => 'id',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => true,
    'autoinc' => false,
  ),
  'piclist' => 
  array (
    'name' => 'piclist',
    'type' => 'text',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'content' => 
  array (
    'name' => 'content',
    'type' => 'text',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'price' => 
  array (
    'name' => 'price',
    'type' => 'decimal(18,2)',
    'notnull' => false,
    'default' => '0.00',
    'primary' => false,
    'autoinc' => false,
  ),
  'market_price' => 
  array (
    'name' => 'market_price',
    'type' => 'decimal(18,2)',
    'notnull' => false,
    'default' => '0.00',
    'primary' => false,
    'autoinc' => false,
  ),
);