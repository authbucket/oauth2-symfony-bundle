<?php

use Sami\Sami;
use Sami\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Resources')
    ->exclude('Tests')
    ->exclude('app')
    ->exclude('build')
    ->exclude('vendor')
    ->in($dir = '.');

$versions = GitVersionCollection::create($dir)
    ->add('develop', 'develop branch')
    ->add('master', 'master branch')
    ->addFromTags('*');

return new Sami($iterator, array(
    'theme' => 'enhanced',
    'versions' => $versions,
    'title' => 'AuthBucket\Bundle\OAuth2Bundle API',
    'build_dir' => __DIR__ . '/build/sami/%version%',
    'cache_dir' => __DIR__ . '/build/cache/sami/%version%',
    'include_parent_data' => false,
    'default_opened_level' => 3,
));
