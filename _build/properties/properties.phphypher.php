<?php
/**
 * Properties for the PhpHypher snippet.
 *
 * @package phphypher
 * @subpackage build
 */
$properties = array(
	array(
		'name' => 'exclude',
		'desc' => 'phphypher.exclude',
		'type' => 'textfield',
		'options' => '',
		'value' => '!(((title|alt|href|src|value|action|name)=(\"|\')(.*?)(\"|\'))|(<pre(.*?)</pre>)|(<option(.*?)</option>))!ise',
		'lexicon' => 'phphypher:properties',
	),
);

return $properties;
