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
		'value' => '!<pre(.*?)</pre>!ise',
		'lexicon' => 'phphypher:properties',
	),
);

return $properties;