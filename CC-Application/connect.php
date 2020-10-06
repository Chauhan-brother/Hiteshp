<?php
$connection = mysqli_connect('timezone.ca5nf0yhgknd.us-east-1.rds.amazonaws.com', 'admin', 'chauhanhitu');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'user');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}