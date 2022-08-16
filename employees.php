<?php

$employees= 
 [

  "milanMizera"=>
  [

    "email"=>"milanmizera16@gmail.com",
    "salari"=>"50 000",
    "age"=>"24",
    "jobPosition"=>"phpDeveloper",

  ],

  "karelNovák"=>
  [

    "email"=>"karel10@seznam.cz",
    "salari"=>"36 000",
    "age"=>"33",
    "jobPosition"=>"marketingAnalyst",

  ],

  "pavlaBorská"=> 
  [

    "email"=>"paja.borska@centrum.cz",
    "salari"=>"40 000",
    "age"=>"56",
    "jobPosition"=>"accountant",

  ],

  "romanMatuška"=>
  [

    "email"=>"romanm@gmail.com",
    "salari"=>"80 000",
    "age"=>"50",
    "jobPositionc"=>"director",

  ]

];

$encoded_data=json_encode($employees, JSON_UNESCAPED_UNICODE);

file_put_contents("employees.json",$encoded_data);
