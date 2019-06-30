# Development

## Development install

1. Clone this repo in your development environment
2. Run `composer install`

### Install for development within a Laravel app

1. Remove any existing directory `vendor/kontenta/kontour-forms`
2. Install the package from git using `composer install --prefer-source`
3. Run `cd vendor/kontenta/kontour-forms` and `composer install` to install dependencies within the package.

## Testing

`composer test` from the project directory will run the default test suite containing all tests.

`composer test -- --testsuite=Feature` will run the Feature tests only.

`composer test -- --filter=...` will pass through options to phpunit.

`composer report` will run the tests and generate coverage reports.

If you want your own local configuration for phpunit,
copy the file `phpunit.xml.dist` to `phpunit.xml` and modify the latter to your needs.

### Test logs

Any Laravel log messages generated during testing can be found in the
`vendor/orchestra/testbench-core/laravel/storage/logs` directory.

### Testing with different versions

[Travis CI](https://travis-ci.org/kontenta/kontour-forms) is set up to run tests
against PHP `7.1`, `7.2` & `7.3` in combination with Laravel `5.7` & `5.8`.
See `.travis.yml` for details.

- `composer update --prefer-lowest` can be used before running tests for testing backwards compatibility.
- `composer show -D -o` can be used to check how far behind latest version the currently installed dependencies are.
- `composer update` will install the latest versions of dependencies.

## Following PSR2

This project can be checked against configured coding standards using `composer phpcs` from the project directory.

Automatic attempt to fix some reported coding standard violations can be run with
`./vendor/bin/phpcbf` from the project directory.
