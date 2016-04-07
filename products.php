<?php

/* 
 * Products Controller
 * Will Nelson
 * CIT 336
 */
require_once'../model/session.php';
session_start();
include_once'../model/products_db.php';

$action = filter_input(INPUT_POST, 'action');
if (!isset($action)){
    $action = 'Default';
}

switch ($action){
    //default action
    case 'Default':
        $products = get_products();
        include '../view/products.php';
        break;
    //add to cart - not implemented now.
    case 'Add to Cart' :
        $productCode = filter_input(INPUT_POST, 'productCode', FILTER_SANITIZE_NUMBER_INT);
        
        if ($productCode == TRUE){
            $message = add_to_cart($productCode);
            echo $message;
        } else {
            $message = 'Sorry, there was an error processing your request.';
        }
        break;
}

