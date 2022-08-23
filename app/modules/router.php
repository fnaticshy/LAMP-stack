<?php
$request_path = array_key_exists('route', $_GET) ? $_GET['route'] : '';

if ($request_path == '') {
    $ctr = new \Controllers\Images();
    $ctr->list();
} else {
    $index = (integer)$request_path;
    $ctr = new \Controllers\Images();
    $ctr->item($index);
}