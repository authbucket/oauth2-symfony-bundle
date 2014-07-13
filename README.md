AuthBucket\\Bundle\\OAuth2Bundle
================================

[![Build
Status](https://travis-ci.org/authbucket/oauth2-bundle.svg?branch=master)](https://travis-ci.org/authbucket/oauth2-bundle)
[![Coverage
Status](https://img.shields.io/coveralls/authbucket/oauth2-bundle.svg)](https://coveralls.io/r/authbucket/oauth2-bundle?branch=master)
[![Dependency
Status](https://www.versioneye.com/php/authbucket:oauth2-bundle/dev-master/badge.svg)](https://www.versioneye.com/php/authbucket:oauth2-bundle/dev-master)
[![Latest Stable
Version](https://poser.pugx.org/authbucket/oauth2-bundle/v/stable.svg)](https://packagist.org/packages/authbucket/oauth2-bundle)
[![Total
Downloads](https://poser.pugx.org/authbucket/oauth2-bundle/downloads.svg)](https://packagist.org/packages/authbucket/oauth2-bundle)
[![License](https://poser.pugx.org/authbucket/oauth2-bundle/license.svg)](https://packagist.org/packages/authbucket/oauth2-bundle)

[AuthBucket\\Bundle\\OAuth2Bundle](http://oauth2-bundle.authbucket.com/)
is a Symfony Bundle, which integrate
[AuthBucket\\OAuth2](http://oauth2.authbucket.com/) as easy as possible
into your [Symfony](http://symfony.com) Project.

Installation
------------

Simply add a dependency on `authbucket/oauth2-bundle` to your project's
`composer.json` file if you use [Composer](http://getcomposer.org/) to
manage the dependencies of your project.

Here is a minimal example of a `composer.json`:

    {
        "require": {
            "authbucket/oauth2-bundle": "dev-master"
        }
    }

You also have to add `AuthBucketOAuth2Bundle` to your `AppKernel.php`:

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                new AuthBucket\Bundle\OAuth2Bundle\AuthBucketOAuth2Bundle(),
            );
            return $bundles;
        }
    }

Demo
----

This library bundle with a [Symfony](http://symfony.com/) based
[AuthBucketOAuth2Bundle](https://github.com/authbucket/oauth2-bundle/blob/master/AuthBucketOAuth2Bundle.php).
Read though [Demo](http://oauth2-bundle.authbucket.com/demo) for more
information.

You may also run the demo locally. Open a console and execute the
following command to install the latest version in the oauth2-bundle/
directory:

    $ composer create-project authbucket/oauth2-bundle oauth2-bundle/ dev-master

Then use the PHP built-in web server to run the demo application:

    $ cd oauth2-bundle/
    $ php app/console server:run

If you get the error
`There are no commands defined in the "server" namespace.`, then you are
probably using PHP 5.3. That's ok! But the built-in web server is only
available for PHP 5.4.0 or higher. If you have an older version of PHP
or if you prefer a traditional web server such as Apache or Nginx, read
the [Configuring a web
server](http://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html)
article.

Open your browser and access the <http://127.0.0.1:8000> URL to see the
Welcome page of demo application.

Also access <http://127.0.0.1:8000/admin/refresh_database> to initialize
the bundled SQLite database with user account `admin`:`secrete`.

Documentation
-------------

OAuth2Bundle's documentation is built with
[Sami](https://github.com/fabpot/Sami) and publicly hosted on [GitHub
Pages](http://authbucket.github.io/oauth2-bundle).

To built the documents locally, execute the following command:

    $ vendor/bin/sami.php update app/config/config_sami.php

Open `build/oauth2-bundle/index.html` with your browser for the
documents.

Tests
-----

This project is coverage with [PHPUnit](http://phpunit.de/) test cases;
CI result can be found from [Travis
CI](https://travis-ci.org/authbucket/oauth2-bundle); code coverage
report can be found from
[Coveralls](https://coveralls.io/r/authbucket/oauth2-bundle).

To run the test suite locally, execute the following command:

    $ vendor/bin/phpunit

Open `build/logs/html` with your browser for the coverage report.

References
----------

-   [RFC6749](http://tools.ietf.org/html/rfc6749)
-   [Demo](http://oauth2-bundle.authbucket.com/demo)
-   [API](http://authbucket.github.io/oauth2-bundle/)
-   [GitHub](https://github.com/authbucket/oauth2-bundle)
-   [Packagist](https://packagist.org/packages/authbucket/oauth2-bundle)
-   [Travis CI](https://travis-ci.org/authbucket/oauth2-bundle)
-   [Coveralls](https://coveralls.io/r/authbucket/oauth2-bundle)

License
-------

-   Code released under
    [MIT](https://github.com/authbucket/oauth2-bundle/blob/master/LICENSE)
-   Docs released under [CC BY-NC-SA
    3.0](http://creativecommons.org/licenses/by-nc-sa/3.0/)
