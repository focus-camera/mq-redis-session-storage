<?php
/**
 * Copyright (c) 2013 Milq Media (https://github.com/milqmedia)
 * For the full copyright and license information, please view
 * the file LICENSE.txt that was distributed with this source code.
 *
 * @author Milq Media <johan@milq.nl>
 */
return [
	'service_manager' => [
		'factories' => [
			'FocusCamera\\MQRedisSessionStorage\\Storage\\RedisStorage' => 'FocusCamera\\MQRedisSessionStorage\\Factory\\RedisStorageFactory',
		],
	],
];
