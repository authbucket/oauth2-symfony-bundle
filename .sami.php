<?php

use Sami\Sami;
use Sami\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->exclude('Resources')
    ->exclude('Tests')
    ->exclude('app')
    ->exclude('build')
    ->exclude('vendor')
    ->name('*.php')
    ->in($dir = '.');

$versions = GitVersionCollection::create($dir)
    ->addFromTags('v1.0.*')
    ->add('master', 'master branch');

return new Sami($iterator, array(
    'theme' => 'enhanced',
    'versions' => $versions,
    'title' => 'AuthBucket\Bundle\OAuth2Bundle API',
    'build_dir' => __DIR__ . '/build/oauth2-bundle/%version%',
    'cache_dir' => __DIR__ . '/build/cache/oauth2-bundle/%version%',
    'include_parent_data' => false,
    'default_opened_level' => 3,
));
