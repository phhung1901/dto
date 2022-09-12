<?php
namespace test;

//include "User.php";
include "Book.php";

use test\User;
use test\Book;

$me = ['name' => 'Nguyễn Gia Hào', 'email' => 'giahao9899@gmail.com'];
//
//$user = new \test\User();
//$user = $user->from($me);
//
//echo $user->name."\n";
//$user->name = "Hung";
//print_r($user);

$array = [
    ['name' => 'Nguyễn Gia Hào', 'email' => 'giahao9899@gmail.com'],
    ['name' => 'VNP Group', 'email' => 'vnp@gmail.com'],
];

$book = new \test\Book();
$book = $book->collection($array);
print_r($book);

?>