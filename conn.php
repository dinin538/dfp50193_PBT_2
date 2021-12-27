<?php 
$host = 'localhost'; 
$user = 'root'; 
$pswd = ''; 
$dbname = 'pbt2' ;
$conn = new mysqli($host, $user, $pswd, $dbname); 
session_start();