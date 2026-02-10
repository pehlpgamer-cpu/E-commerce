<?php

//require  '../php/database.php';

header("Content-Type: application/json");
//sample data
$response = [
    [
        'id' => 1,
        'name' => 'acer nitro 15',
        'categories' => ['laptop', 'electronics'],
    ],
    [
        'id' => 2,
        'name' => 'poco x3 pro',
        'categories' => ['phone', 'electronics', '2025', 'type-c'],
    ],
    [
        'id' => 3,
        'name' => 'atomic habits',
        'categories' => ['book', 'self-improvement'],
    ]
];

echo json_encode($response);


