<?php

require_once 'export_to_csv.php';

$persons=[
    [
        'firstname' => 'John',
        'lastname' => 'Doe',
        'phone' => '0123456789',
        'email' => 'johndoe@example.com',
    ],
    [
        'firstname' => 'Marcel',
        'lastname' => 'Dorel',
        'phone' => '0721392113',
        'email' => 'marcel@example.com',
    ],
    [
        'firstname' => 'Mirel',
        'lastname' => 'Darius',
        'phone' => '070979878',
        'email' => 'mirel@example.com',
    ],
];

exportToCSV($persons,'persons.csv','w+');