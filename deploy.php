<?php

/**
 * {app-title} deployment script.
 *
 * PHP version >=5.6.0
 *
 * For full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code.
 *
 * @package {app-namespace}
 * @author {author-name} <{author-email}>
 * @copyright {year} {author-company}
 * @license {license-link} {license-name}
 * @link {project-link}
 */

namespace Deployer;

// Load Common Recipe:

require 'recipe/common.php';

// Load Server Inventory:

inventory('deploy.yml');

// Define Custom Binaries:

set('bin/composer', function () {
    return run('which composer');
});

// Define Default Stage:

set('default_stage', 'staging');

// Define Project Details:

set('application', '{app-name}');
set('repository', '{repo-url}');

// Allow Anonymous Statistics?

set('allow_anonymous_stats', false);

// Define Shared Dirs:

set('shared_dirs', [
    'public/assets'
]);

// Define Writable Dirs:

set('writable_dirs', [
    'public/assets'
]);

// Define Helper Tasks:

task('silverstripe:build', function () {
    return run('{{bin/php}} {{release_path}}/vendor/silverstripe/framework/cli-script.php dev/build');
})->desc('Run /dev/build');

task('silverstripe:buildflush', function () {
    return run('{{bin/php}} {{release_path}}/vendor/silverstripe/framework/cli-script.php dev/build flush=all');
})->desc('Run /dev/build?flush=all');

// Define Deployment Task:

task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:vendors',
    'deploy:shared',
    'deploy:writable',
    'silverstripe:buildflush',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup'
])->desc('Deploy application');

// After Deployment Success Task:

after('deploy', 'success');

// After Deployment Failure Task:

after('deploy:failed', 'deploy:unlock');
