<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
	'url' => [
		'class' 	=> 'fecshop\services\Url',
		'storage'	=> 'mongodb',  # 'mongodb or mysqldb'
		'randomCount'=> 8,  # if url key  is exist in url write table ,  add a random string  behide the url key, this param is define random String length
	],
];