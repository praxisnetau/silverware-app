<?php

// =====================================================================================================================
// Application Deployment Script
// =====================================================================================================================

namespace Deployer;

// Load Common Requirements:

require 'recipe/common.php';

// Load Server Configuration:

inventory('deploy.yml');

// Define Custom Binaries:

set('bin/composer', function () {
    return run('which composer');
});

// Define SSH Settings:

set('ssh_type', 'native');
set('ssh_multiplexing', false);

// Define Default Stage:

set('default_stage', 'staging');

// Define Git Repository:

set('repository', '{repo-url}');

// Define Shared Dirs:

set('shared_dirs', [
    'assets'
]);

// Define Writable Dirs:

set('writable_dirs', [
    'assets'
]);

// Define SilverStripe Helper Tasks:

task('silverstripe:build', function () {
    return run('{{bin/php}} {{release_path}}/vendor/silverstripe/framework/cli-script.php dev/build');
})->desc('Run /dev/build');

task('silverstripe:buildflush', function () {
    return run('{{bin/php}} {{release_path}}/vendor/silverstripe/framework/cli-script.php dev/build flush=all');
})->desc('Run /dev/build?flush=all');

// Define Deployment Task:

task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:vendors',
    'deploy:shared',
    'deploy:writable',
    'silverstripe:buildflush',
    'deploy:symlink',
    'cleanup',
])->desc('Deploy application');

// After Deployment Success Task:

after('deploy', 'success');

// After Deployment Failure Task:

after('deploy:failed', 'deploy:unlock');
