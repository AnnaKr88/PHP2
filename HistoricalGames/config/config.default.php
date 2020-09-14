<?php
session_start();

$config['DRIVER']= 'mysql';
$config['SERVER']= 'localhost';
$config['DB']= 'historical_games';
$config['LOGIN']= 'root';
$config['PASS']= 'root';

$config['path_root'] = __DIR__;
$config['path_public'] = $config['path_root'] . '/../public';
$config['path_model'] = $config['path_root'] . '/../model';
$config['path_controller'] = $config['path_root'] . '/../controller';
$config['path_cache'] = $config['path_root'] . '/../cache';
$config['path_data'] = $config['path_root'] . '/data';
$config['path_fixtures'] = $config['path_data'] . '/fixtures';
$config['path_migrations'] = $config['path_data'] . '/../migrate';
$config['path_commands'] = $config['path_root'] . '/../lib/commands';
$config['path_libs'] = $config['path_root'] . '/../lib';
$config['views'] = $config['path_root'] . '/../views';

$config['path_logs'] = $config['path_root'] . '/../logs';

$config['sitename'] = 'Historical Games';