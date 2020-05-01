<?php
$path = __DIR__."/../pages/";
$ext = 'cache';
array_map('unlink', glob( "$path*.$ext"));