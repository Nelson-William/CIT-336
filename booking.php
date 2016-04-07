<?php

/* 
 * Booking Controller
 * Will Nelson
 * 
 */

require_once '../model/session.php';
session_start();
include_once '../model/booking_db.php';
$action = filter_input(INPUT_POST, 'action');
if (!isset($action)){
    $action = 'Default';
}
switch ($action){
//default action
    case 'Default':
        include '../view/booking.php';
        break;
//action - get_event
    case 'Get Events':
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
        
        if ($email == TRUE && $phone == TRUE){
            $bookings = get_existing_booking($email, $phone);
            
        } else {
            $message = 'Please check your inputs, all fields required.';
            
        } include '../view/edit_delete_booking.php';
        break;
//action - book_event
    case 'Book Event':
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
        
                
        if ($name == TRUE && $email == TRUE && $phone == TRUE && $date == TRUE){
            add_booking_to_db($name, $email, $phone, $date);
            $message = 'Booking submitted successfully.';
        } else {
            $message = 'Please check your inputs, all fields required.';
        } include '../view/booking_results.php';
        break;
//action - delete_event
    case 'Delete Event':
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
        
        if ($email == TRUE && $date == TRUE){
            delete_booking_from_db($email, $date);
            $message = 'Your event was successfully deleted.';
        } else {
            $message = 'Unable to delete event.';
        }include '../view/booking_results.php';
        break;
    case 'Start Edit':
        $eventID = filter_input(INPUT_POST, 'event_id', FILTER_SANITIZE_NUMBER_INT);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT); 
        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
        
        if ($eventID == TRUE && $date == TRUE){
            edit_booking_from_db($eventID, $date);
        } else {
            $message = 'Sorry, there was an error.';
        }include '../view/booking_results.php';
        break;
//action - edit_event
    case 'Edit Event':
        $eventID = filter_input(INPUT_POST, 'event_id', FILTER_VALIDATE_EMAIL);
        //$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT); 
        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
        
        if ($eventID == TRUE && $date == TRUE){
            edit_booking_from_db($eventID, $date);
        } else {
            $message = 'Unable to edit event.';
        }include '../view/booking_results.php';
        break;
}