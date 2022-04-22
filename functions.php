<?php

//  DATABASE

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'projekti_web_php';

$db = new MySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}