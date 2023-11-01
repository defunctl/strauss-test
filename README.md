# Strauss Test

Testing file autloading for [Strauss](https://github.com/BrianHenryIE/strauss).

This project includes [guzzle/psr7](https://github.com/guzzle/psr7), which itself includes 
[ralouphie/getallheaders](https://github.com/ralouphie/getallheaders), which [autoloads a file](https://github.com/ralouphie/getallheaders/blob/develop/composer.json#L19)
that causes everything to crash with Strauss.

The tests autoload the [bootstrap.php file](./tests/bootstrap.php), which requires Strauss' autoloaders.

### Testing

First run:

```
composer install
```

Then, run to see the errors: 

```
composer test
```

Errors:

```
> @php vendor/bin/phpunit -c phpunit.xml.dist --colors=always -d memory_limit=2G
PHP Warning:  require(/home/user/strauss-test/vendor/composer/../ralouphie/getallheaders/src/getallheaders.php): Failed to open stream: No such file or directory in /home/user/strauss-test/vendor/composer/autoload_real.php on line 41
PHP Stack trace:
PHP   1. {main}() /home/user/strauss-test/vendor/bin/phpunit:0
PHP   2. include() /home/user/strauss-test/vendor/bin/phpunit:122
PHP   3. require() /home/user/strauss-test/vendor/phpunit/phpunit/phpunit:97
PHP   4. ComposerAutoloaderInitc022b62b8304ba992d7e730f00fae8fc::getLoader() /home/user/strauss-test/vendor/autoload.php:25
PHP   5. {closure:/home/user/strauss-test/vendor/composer/autoload_real.php:37-43}($fileIdentifier = '7b11c4dc42b3b3023073cb14e519683c', $file = '/home/user/strauss-test/vendor/composer/../ralouphie/getallheaders/src/getallheaders.php') /home/user/strauss-test/vendor/composer/autoload_real.php:45
PHP Fatal error:  Uncaught Error: Failed opening required '/home/user/strauss-test/vendor/composer/../ralouphie/getallheaders/src/getallheaders.php' (include_path='.:') in /home/user/strauss-test/vendor/composer/autoload_real.php:41
Stack trace:
#0 /home/user/strauss-test/vendor/composer/autoload_real.php(45): {closure}()
#1 /home/user/strauss-test/vendor/autoload.php(25): ComposerAutoloaderInitc022b62b8304ba992d7e730f00fae8fc::getLoader()
#2 /home/user/strauss-test/vendor/phpunit/phpunit/phpunit(97): require('...')
#3 /home/user/strauss-test/vendor/bin/phpunit(122): include('...')
#4 {main}
  thrown in /home/user/strauss-test/vendor/composer/autoload_real.php on line 41


```
