<?php

/* 
 * Products Database
 * Will Nelson
 * 
 */
include_once 'database.php';

function get_products(){
    $db = db_connect();
    
    $query = 'SELECT productCode, productName, productPrice
              FROM products
              ';
    $stmt = $db->prepare($query);
    
    $stmt->execute();
    $product = $stmt->fetchAll();
    $stmt->closeCursor();
    
    return $product;
}

function add_to_cart($productCode){
    $message = 'Sorry, I am not taking orders online.  To purchase, please send me an email instead!';
    
    return $message;
}
