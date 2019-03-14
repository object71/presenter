<?php

require 'vendor/autoload.php';

use Presenter\App\App;
use Presenter\App\Database\{QueryBuilder, Connection};

require 'app/database/connection.php';
require 'helpers/view.php';
require 'helpers/redirect.php';

App::bind('config', require 'config.php');

if (App::get('config')['DEBUG']) {
    require 'helpers/dd.php';
}
