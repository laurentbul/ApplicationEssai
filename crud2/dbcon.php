<?php

$con = mysqli_connect('localhost', 'root', '1234', 'blog');

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}
