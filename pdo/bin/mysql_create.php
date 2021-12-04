<?php

declare(strict_types=1);

$mysql = require 'mysql_connection.php';

$mysql->exec("create table if not exists users (
                    id int primary key auto_increment, 
                    email varchar(45), 
                    password varchar(255)
                )"
);
