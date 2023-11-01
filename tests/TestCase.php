<?php declare(strict_types=1);

namespace Strauss\Tests;

use Strauss\Prefix\lucatume\DI52\Container;

class TestCase extends \PHPUnit\Framework\TestCase {

	protected Container $container;

	protected function setUp(): void {
		parent::setUp();

		$this->container = \Strauss\container();
	}

}
