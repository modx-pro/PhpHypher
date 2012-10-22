<?php
/**
 * Resolve creating db tables
 *
 * @package phphypher
 * @subpackage build
 */
if ($object->xpdo) {
	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
			$modx =& $object->xpdo;
			$modelPath = $modx->getOption('phphypher.core_path',null,$modx->getOption('core_path').'components/phphypher/').'model/';
			$modx->addPackage('phphypher',$modelPath);

			$manager = $modx->getManager();

			$manager->createObjectContainer('PhpHypherItem');

			break;
		case xPDOTransport::ACTION_UPGRADE:
			break;
	}
}
return true;