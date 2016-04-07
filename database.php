<?php

/* 
 * Database Connection Function
 * Will Nelson
 * 
 */

function db_connect() {
    $dsn = 'mysql:host=localhost;dbname=colonel8_popcorn';
    $username = 'colonel8_iClient';
    $password = '-CRVQ21l(h)]';
	try {
	    $db = new PDO($dsn, $username, $password);
	} catch (PDOException $e) {
	    $message = $e->getMessage();
            }
	return $db;
    }