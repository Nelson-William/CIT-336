<?php

/* 
 * The session controller for booking applications
 * Will Nelson
 * Cit 336
 */

function startSession(){
    $lifetime = 60 * 60 * 24;
    session_set_cookie_params($lifetime, '/');
    session_start();
}