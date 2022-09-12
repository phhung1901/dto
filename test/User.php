<?php
namespace test;

use src\Data;

class User extends Data{

}

$user = new User;
$user->name = "Hung";
echo $user->name;