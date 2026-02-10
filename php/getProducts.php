<?php

//require  '../php/database.php'; // causes an error

header("Content-Type: application/json");
//sample data
$response = 
[
    [
        'id' => 1,
        'name' => 'the pragmatic programmer',
        'price' => 150.00
    ],
    [
        'id' => 2,
        'name' => 'clean code',
        'price' => 300.00      
    ],
    [
        'id' => 3,
        'name' => 'grokking algorithms',
        'price' => 265.00      
    ]
];

echo json_encode($response);


