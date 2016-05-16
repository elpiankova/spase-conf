<?php
    /**
     * GIT DEPLOYMENT SCRIPT
     *
     * Used for automatically deploying websites via GitHub
     *
     */

    // array of commands
    $commands = [
        'echo $PWD',
        'whoami',
        'git pull',
        'git status',
        'git submodule sync',
        'git submodule update',
        'git submodule status',
        'php artisan migrate',
    ];

    // exec commands
    $output = '';
    foreach ($commands AS $command) {
        $tmp = shell_exec($command);
    }