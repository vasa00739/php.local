<?php
function __autoload($class_name) {
    include __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
}

