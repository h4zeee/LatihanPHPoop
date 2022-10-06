<?php


const CHECK_STATUS = 'HADIR';

const NAMA_GORENGAN = [
    'TAHU ISI' , 'BALA-BALA' , 'RISOLES', 'BAKWAN', TRUE
];

const STUDENT = [
    'name' => 'Reza',
    'age' =>   16,
    'role' =>  'Student',
    'isactive' => true
];

const USERS = [
    // CONST DENGAN NILAI ARRAY MULTIDIMENSI
    [
        'name' => 'Reza',
        'age' =>   16,
        'role' =>  'Student',
        'isactive' => true
    ],
    [
        'name' => 'Satrio',
        'age' =>   25,
        'role' =>  'Teacher',
        'isactive' => true
    ],
    [
        'name' => 'Asmida',
        'age' =>   16,
        'role' =>  'Student',
        'isactive' => false
    ]
];
//var_dump(STUDENT); 
var_dump(USERS);
