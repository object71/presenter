<?php

require 'app/bootstrap.php';
use Presenter\App\{Router, Request};

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
