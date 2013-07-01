<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Doctrine\Common\Annotations\AnnotationRegistry;

// Clean cache before test, see http://symfony.com/doc/current/cookbook/testing/bootstrap.html
if (isset($_ENV['BOOTSTRAP_CLEAR_CACHE_ENV'])) {
    passthru(sprintf(
        'php "%s/console" cache:clear --env=%s --no-warmup',
        __DIR__,
        $_ENV['BOOTSTRAP_CLEAR_CACHE_ENV']
    ));
}

$loader = require __DIR__ . '/../../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
