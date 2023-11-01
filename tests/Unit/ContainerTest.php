<?php declare(strict_types=1);

namespace Strauss\Tests\Unit;

use Strauss\Prefix\GuzzleHttp\Psr7\Query;
use Strauss\Prefix\lucatume\DI52\Container;
use Strauss\Tests\TestCase;

use function Strauss\hello;

final class ContainerTest extends TestCase {

	public function test_it_finds_the_container(): void {
		$this->assertInstanceOf( Container::class, $this->container );
	}

	public function test_it_runs_hello(): void {
		$this->assertSame( 'Hello', hello() );
	}

	public function test_it_builds_a_query(): void {
		$query = Query::build( [
			'test' => 'one',
			'test-two' => 'two',
		] );

		$this->assertIsString( $query );
	}

}
