<?php declare(strict_types=1);

namespace Strauss;

use Strauss\Prefix\lucatume\DI52\Container;

function hello(): string {
	return 'Hello';
}

function container(): Container {
	return new Container();
}
