<?php

$db = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);

if (!$db) {
    echo "Error: Cannot connect to database.";
    echo "errno connect: " . mysqli_connect_errno();
    echo "errno connect: " . mysqli_connect_error();
    exit;
}
