<?php

//require  '../php/database.php'; // causes an error

header("Content-Type: application/json");

$sampleData = 
[
    ['id' => 1, 'name' => 'The Pragmatic Programmer', 'price' => 150.00],
    ['id' => 2, 'name' => 'Clean Code', 'price' => 300.00],
    ['id' => 3, 'name' => 'Grokking Algorithms', 'price' => 265.00],
    ['id' => 4, 'name' => 'Code Complete', 'price' => 450.00],
    ['id' => 5, 'name' => 'Design Patterns', 'price' => 350.00],
    ['id' => 6, 'name' => 'Refactoring', 'price' => 280.00],
    ['id' => 7, 'name' => 'Head First Design Patterns', 'price' => 320.00],
    ['id' => 8, 'name' => 'JavaScript: The Good Parts', 'price' => 220.00],
    ['id' => 9, 'name' => 'Eloquent JavaScript', 'price' => 250.00],
    ['id' => 10, 'name' => 'You Don\'t Know JS', 'price' => 180.00],
    ['id' => 11, 'name' => 'Python Crash Course', 'price' => 290.00],
    ['id' => 12, 'name' => 'Learning Python', 'price' => 400.00],
    ['id' => 13, 'name' => 'Effective Java', 'price' => 380.00],
    ['id' => 14, 'name' => 'Java Concurrency in Practice', 'price' => 420.00],
    ['id' => 15, 'name' => 'The C Programming Language', 'price' => 200.00],
    ['id' => 16, 'name' => 'C++ Primer', 'price' => 500.00],
    ['id' => 17, 'name' => 'Accelerated C++', 'price' => 360.00],
    ['id' => 18, 'name' => 'Programming Pearls', 'price' => 240.00],
    ['id' => 19, 'name' => 'Algorithms', 'price' => 330.00],
    ['id' => 20, 'name' => 'Introduction to Algorithms', 'price' => 480.00],
    ['id' => 21, 'name' => 'Cracking the Coding Interview', 'price' => 310.00],
    ['id' => 22, 'name' => 'Elements of Programming Interviews', 'price' => 350.00],
    ['id' => 23, 'name' => 'System Design Interview', 'price' => 270.00],
    ['id' => 24, 'name' => 'Designing Data-Intensive Applications', 'price' => 450.00],
    ['id' => 25, 'name' => 'Database System Concepts', 'price' => 520.00],
    ['id' => 26, 'name' => 'SQL for Data Scientists', 'price' => 190.00],
    ['id' => 27, 'name' => 'Web Development with Node and Express', 'price' => 280.00],
    ['id' => 28, 'name' => 'Express in Action', 'price' => 260.00],
    ['id' => 29, 'name' => 'React Up and Running', 'price' => 230.00],
    ['id' => 30, 'name' => 'Vue.js: Up and Running', 'price' => 210.00],
    ['id' => 31, 'name' => 'Angular Up and Running', 'price' => 240.00],
    ['id' => 32, 'name' => 'Fullstack React', 'price' => 320.00],
    ['id' => 33, 'name' => 'GraphQL in Action', 'price' => 290.00],
    ['id' => 34, 'name' => 'RESTful Web APIs', 'price' => 250.00],
    ['id' => 35, 'name' => 'Microservices Patterns', 'price' => 380.00],
    ['id' => 36, 'name' => 'Building Microservices', 'price' => 410.00],
    ['id' => 37, 'name' => 'Kubernetes in Action', 'price' => 340.00],
    ['id' => 38, 'name' => 'Docker Deep Dive', 'price' => 300.00],
    ['id' => 39, 'name' => 'The Phoenix Project', 'price' => 220.00],
    ['id' => 40, 'name' => 'The DevOps Handbook', 'price' => 360.00]
];

$response = $sampleData;

echo json_encode($response);


