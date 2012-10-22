<?php
/**
 * Add snippets to build
 * 
 * @package phphypher
 * @subpackage build
 */
$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
	'id' => 0,
	'name' => 'PhpHypher',
	'description' => '',
	'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.phphypher.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.phphypher.php';
$snippets[0]->setProperties($properties);
unset($properties);

return $snippets;