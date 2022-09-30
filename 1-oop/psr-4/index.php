<?php

include "vendor/autoload.php";

use App\Models\User;
use Database\create_users_table;
use App\Controllers\UserController;
use Database\Factory\UserFactory;

$user = new User;
$userControlle = new UserController;

$usersTable = new create_users_table;

$userFactory = new UserFactory;

