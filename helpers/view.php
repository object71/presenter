<?php

function view(string $viewName, $context=[])
{
    extract($context);
    $filePath = str_replace('.', '/', $viewName);
    $viewContentPath = "views/{$filePath}.php";
    require "views/layouts/masterpage.php";
}
