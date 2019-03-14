<?php

use Presenter\App\App;
use Medoo\Medoo;

$database = new Medoo([
	'database_type' => 'sqlite',
	'database_file' => ':memory:'
]);

$createTaskTableQuery = <<< EOF
CREATE TABLE IF NOT EXISTS Tasks
(
	id INT PRIMARY KEY AUTOINCREMENT,
	description TEXT,
	completed TEXT
);
EOF;

$database->query($createTaskTableQuery);

App::bind('database', $database);
