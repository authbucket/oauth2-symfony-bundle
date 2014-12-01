<?php

// See http://symfony.com/doc/current/cookbook/testing/bootstrap.html
if (isset($_ENV['BOOTSTRAP_ENV'])) {
    passthru(sprintf(
        'php "%s/console" cache:clear --env=%s -q --no-warmup',
        __DIR__,
        $_ENV['BOOTSTRAP_ENV']
    ));

    passthru(sprintf(
        'php "%s/console" doctrine:schema:drop --env=%s -q --force',
        __DIR__,
        $_ENV['BOOTSTRAP_ENV']
    ));

    passthru(sprintf(
        'php "%s/console" doctrine:schema:create --env=%s -q',
        __DIR__,
        $_ENV['BOOTSTRAP_ENV']
    ));

    passthru(sprintf(
        'php "%s/console" doctrine:fixtures:load --env=%s -q --no-interaction --purge-with-truncate',
        __DIR__,
        $_ENV['BOOTSTRAP_ENV']
    ));
}

require __DIR__.'/bootstrap.php.cache';
