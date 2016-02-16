<?php

use App\Models\User;

include 'autoload.php';

$user = User::findById(2);

var_dump($user);