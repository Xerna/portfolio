<?php
//dump and die
function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}
//dump data
function dump($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function basePath(string $file = '')
{
    return __DIR__ . '/' . $file;
}
function loadView($name, $data = [])
{
    $viewPath = basePath("views/{$name}.php");
    if (!file_exists($viewPath)) {
        die("The view {$name} does not exist.");
    } else {
        extract($data); // Extract the data array into variables
        require basePath("views/{$name}.php");
    }
}
/**
 * Load a partial
 *
 * @param [string] $name
 * @return void
 */
function loadPartial($name)
{
    $viewPath = basePath("views/layout/{$name}.php");
    if (!file_exists($viewPath)) {
        die("The partial {$name} does not exist.");
    } else {
        require basePath("views/layout/{$name}.php");
    }
}
