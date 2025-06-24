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
