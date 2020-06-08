<?php

/**
 * Copyright (c) 2013 Milq Media (https://github.com/milqmedia)
 * For the full copyright and license information, please view
 * the file LICENSE.txt that was distributed with this source code.
 *
 * @author Milq Media <johan@milq.nl>
 */

namespace FocusCamera\MQRedisSessionStorage\Factory;

use FocusCamera\MQRedisSessionStorage\Storage\RedisStorage;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class RedisStorageFactory
 *
 * @package MQRedisSessionStorage\Factory
 */
class RedisStorageFactory implements FactoryInterface {
	/**
	 * @param ServiceLocatorInterface $container
	 * @param string $requestedName
	 * @param array|null $options
	 *
	 * @return RedisStorage
	 */
	public function __invoke(ServiceLocatorInterface $container, $requestedName, array $options = null) {
		return new RedisStorage($container->get('Config')['mq-redis-session'] ?? null);
	}

	/**
	 * @param ServiceLocatorInterface $services
	 *
	 * @return RedisStorage
	 */
	public function createService(ServiceLocatorInterface $services) {
		return $this($services, 'MQRedis');
	}
}
