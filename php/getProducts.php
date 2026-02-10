<?php

//require  '../php/database.php';

header("Content-Type: application/json");
//sample data
$response = 
[
    [
        'id' => 1,
        'name' => 'the pragmatic programmer',
        'categories' => ['book', 'programming']
    ],
    [
        'id' => 2,
        'name' => 'clean code',
        'categories' => ['book', 'programming']
    ]
];

echo json_encode($response);


