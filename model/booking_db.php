<?php

/* 
 * Booking Database
 * Will Nelson
 * 
 */

include_once 'database.php';

function get_existing_booking($email, $phone) {
    $db = db_connect();
    
    $query = "SELECT event_id, name, email, phone, date
              FROM booking
              WHERE email = :email
              AND phone = :phone";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':phone', $phone);
    $stmt->execute();
    $bookings = $stmt->fetchAll(); //Puts all items in array.
    $stmt->closeCursor();
    //$bookings = $booking['event_id'];
    
    return $bookings;
}

function add_booking_to_db($name, $email, $phone, $date) {
    $db = db_connect();
    
    $query = 'INSERT INTO booking
                (name, email, phone, date)
              VALUES
                (:name, :email, :phone, :date)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':date', $date);
    $bookings = $stmt->execute();
    $stmt->closeCursor();
    
    return $bookings;
}

function delete_booking_from_db($email, $date) {
    $db = db_connect();
    
    $query = 'DELETE
              FROM booking
              WHERE email = :email
              AND date = :date';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':date', $date);
    $stmt->execute();
    $stmt->closeCursor();
       
    
}


function edit_booking_from_db($eventID, $date) {
    $db = db_connect();
    
    $query = 'UPDATE booking
              SET date = :date
              WHERE event_id = :event_id
              ';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':event_id', $eventID);
    $stmt->bindValue(':date', $date);
    $stmt->execute();
    //$bookings = $stmt->fetch();
    $stmt->closeCursor();
    //$booking = $bookings['date'];
    
    //return $bookings;
}
