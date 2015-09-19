AuthBucket\\Bundle\\OAuth2Bundle
================================

[![Build
Status](https://travis-ci.org/authbucket/oauth2-symfony-bundle.svg?branch=master)](https://travis-ci.org/authbucket/oauth2-symfony-bundle)
[![Coverage
Status](https://coveralls.io/repos/authbucket/oauth2-symfony-bundle/badge.svg?branch=master&service=github)](https://coveralls.io/github/authbucket/oauth2-symfony-bundle?branch=master)
[![Dependency
Status](https://www.versioneye.com/php/authbucket:oauth2-symfony-bundle/dev-master/badge.svg)](https://www.versioneye.com/php/authbucket:oauth2-symfony-bundle/dev-master)
[![Latest Stable
Version](https://poser.pugx.org/authbucket/oauth2-symfony-bundle/v/stable.svg)](https://packagist.org/packages/authbucket/oauth2-symfony-bundle)
[![Total
Downloads](https://poser.pugx.org/authbucket/oauth2-symfony-bundle/downloads.svg)](https://packagist.org/packages/authbucket/oauth2-symfony-bundle)
[![License](https://poser.pugx.org/authbucket/oauth2-symfony-bundle/license.svg)](https://packagist.org/packages/authbucket/oauth2-symfony-bundle)

[AuthBucket\\Bundle\\OAuth2Bundle](http://oauth2-symfony-bundle.authbucket.com/)
is a Symfony Bundle, which integrate
[AuthBucket\\OAuth2](http://oauth2-php.authbucket.com/) as easy as
possible into your [Symfony](http://symfony.com) Project.

Installation
------------

Simply add a dependency on `authbucket/oauth2-symfony-bundle` to your
project's `composer.json` file if you use
[Composer](http://getcomposer.org/) to manage the dependencies of your
project.

Here is a minimal example of a `composer.json`:

    {
        "require": {
            "authbucket/oauth2-symfony-bundle": "~3.0"
        }
    }

### Parameters

This bundle come with following parameters:

-   `driver`: (Optional) Currently we support in-memory (`in_memory`),
    or Doctrine ORM (`orm`). Default with in-memory for using resource
    firewall with remote debug endpoint.
-   `user_provider`: (Optional) For using `grant_type = password`,
    override this parameter with your own user provider, e.g. using
    InMemoryUserProvider or a Doctrine ORM EntityRepository that
    implements UserProviderInterface.
-   `model`: (Optional) Override this with your own model classes,
    default with in-memory AccessToken for using resource firewall with
    remote debug endpoint.

### Services

This bundle come with following services controller which simplify the
OAuth2.0 controller implementation overhead:

-   `authbucket_oauth2.oauth2_controller`: OAuth2 endpoint controller.

### Registering

You have to add `AuthBucketOAuth2Bundle` to your `AppKernel.php`:

    # app/AppKernel.php

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = [
                new AuthBucket\Bundle\OAuth2Bundle\AuthBucketOAuth2Bundle(),
            ];

            return $bundles;
        }
    }

Moreover, enable following bundles if that's not already the case:

    $bundles = [
        new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
        new Symfony\Bundle\SecurityBundle\SecurityBundle(),
        new Symfony\Bundle\MonologBundle\MonologBundle(),
    ];

Usage
-----

This library seperate the endpoint logic in frontend firewall and
backend controller point of view, so you will need to setup both for
functioning.

To enable the built-in controller with corresponding routing, add the
following into your `routing.yml`, all above controllers will be enabled
accordingly with routing prefix `/api/oauth2`:

    # app/config/routing.yml

    authbucketoauth2bundle:
        prefix:     /api/oauth2
        resource:   "@AuthBucketOAuth2Bundle/Resources/config/routing.yml"

Below is a list of recipes that cover some common use cases.

### Authorization Endpoint

We don't provide custom firewall for this endpoint, which you should
protect it by yourself, authenticate and capture the user credential,
e.g. by
[SecurityBundle](http://symfony.com/doc/current/reference/configuration/security.html):

    # app/config/security.yml

    security:
        encoders:
            Symfony\Component\Security\Core\User\User: plaintext

        providers:
            default:
                memory:
                    users:
                        demousername1:  { roles: 'ROLE_USER', password: demopassword1 }
                        demousername2:  { roles: 'ROLE_USER', password: demopassword2 }
                        demousername3:  { roles: 'ROLE_USER', password: demopassword3 }

        firewalls:
            api_oauth2_authorize:
                pattern:                ^/api/oauth2/authorize$
                http_basic:             ~
                provider:               default

### Token Endpoint

Similar as authorization endpoint, we need to protect this endpoint with
our custom firewall `oauth2_token`:

    # app/config/security.yml

    security:
        firewalls:
            api_oauth2_token:
                pattern:                ^/api/oauth2/token$
                oauth2_token:           ~

### Debug Endpoint

We should protect this endpoint with our custom firewall
`oauth2_resource`:

    # app/config/security.yml

    security:
        firewalls:
            api_oauth2_debug:
                pattern:                ^/api/oauth2/debug$
                oauth2_resource:        ~

### Resource Endpoint

We don't provide other else resource endpoint controller implementation
besides above debug endpoint. You should consider implement your own
endpoint with custom logic, e.g. fetching user email address or profile
image.

On the other hand, you can protect your resource server endpoint with
our custom firewall `oauth2_resource`. Shorthand version (default assume
resource server bundled with authorization server, query local model
manager, without scope protection):

    # app/config/security.yml

    security:
        firewalls:
            api_resource:
                pattern:                ^/api/resource
                oauth2_resource:        ~

Longhand version (assume resource server bundled with authorization
server, query local model manager, protect with scope `demoscope1`):

    # app/config/security.yml

    security:
        firewalls:
            api_resource:
                pattern:                ^/api/resource
                oauth2_resource:
                    resource_type:      model
                    scope:              [ demoscope1 ]

If authorization server is hosting somewhere else, you can protect your
local resource endpoint by query remote authorization server debug
endpoint:

    # app/config/security.yml

    security:
        firewalls:
            api_resource:
                pattern:                ^/api/resource
                oauth2_resource:
                    resource_type:      debug_endpoint
                    scope:              [ demoscope1 ]
                    options:
                        debug_endpoint: http://example.com/api/oauth2/debug
                        cache:          true

Demo
----

The demo is based on [Symfony](http://symfony.com/) and
[AuthBucketOAuth2Bundle](https://github.com/authbucket/oauth2-symfony-bundle/blob/master/src/AuthBucketOAuth2Bundle.php).
Read though [Demo](http://oauth2-symfony-bundle.authbucket.com/demo) for
more information.

You may also run the demo locally. Open a console and execute the
following command to install the latest version in the
`oauth2-symfony-bundle` directory:

    $ composer create-project authbucket/oauth2-symfony-bundle authbucket/oauth2-symfony-bundle "~3.0"

Then use the PHP built-in web server to run the demo application:

    $ cd authbucket/oauth2-symfony-bundle
    $ ./app/console server:run

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
Pages](http://authbucket.github.io/oauth2-symfony-bundle).

To built the documents locally, execute the following command:

    $ composer sami

Open `build/sami/index.html` with your browser for the documents.

Tests
-----

This project is coverage with [PHPUnit](http://phpunit.de/) test cases;
CI result can be found from [Travis
CI](https://travis-ci.org/authbucket/oauth2-symfony-bundle); code
coverage report can be found from
[Coveralls](https://coveralls.io/r/authbucket/oauth2-symfony-bundle).

To run the test suite locally, execute the following command:

    $ composer phpunit

Open `build/logs/html` with your browser for the coverage report.

References
----------

-   [RFC6749](http://tools.ietf.org/html/rfc6749)
-   [Demo](http://oauth2-symfony-bundle.authbucket.com/demo)
-   [API](http://authbucket.github.io/oauth2-symfony-bundle/)
-   [GitHub](https://github.com/authbucket/oauth2-symfony-bundle)
-   [Packagist](https://packagist.org/packages/authbucket/oauth2-symfony-bundle)
-   [Travis CI](https://travis-ci.org/authbucket/oauth2-symfony-bundle)
-   [Coveralls](https://coveralls.io/r/authbucket/oauth2-symfony-bundle)

License
-------

-   Code released under
    [MIT](https://github.com/authbucket/oauth2-symfony-bundle/blob/master/LICENSE)
-   Docs released under [CC BY
    4.0](http://creativecommons.org/licenses/by/4.0/)
