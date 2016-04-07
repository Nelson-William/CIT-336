<?php

/* 
 * Booking View
 * Will Nelson
 * 
 */

require_once '../model/session.php';

?>

<head id="page_head"><?php include '../modules/head.php'; ?></head>
<body>
    <?php include_once '../modules/googletracking.php'; ?>
<div id="wrapper">

<header id="page_header"> <?php include '../modules/header.php'; ?> </header>
<nav id="page_nav"> <?php include '../modules/nav.php'; ?> </nav>


<h1>Event Booking</h1>
<h3>Hot and Fresh Popcorn on Location!</h3>
<article>
<h2>Needs Lots of Popcorn?  We'll Bring the Kettle!</h2>
<p>We are available to provide fresh-popped kettle corn wherever you need it.
    Whether it's a party, a fundraiser, or a large event, we can handle it!</p>
</article>
Please enter the following information to schedule an event:

<section>

<form action='/controllers/booking.php' method='post' id='book_event_form'>
    <input type="hidden" name="action" value="Book Event">
    <label>Name:</label>
    <input type="text" name="name" />
    <br>
    
    <label>Email:</label>
    <input type="text" name="email" />
    <br>
    
    <label>Phone:</label>
    <input type="text" name="phone" />
    <br>
    
    <label>Date:</label>
    <input type="text" name="date" />
    <br>
    
    <label>&nbsp;</label>
    <input type="submit" value="Submit" />
        
    
</form>
To find a previous request, enter the following information:
<form action='/controllers/booking.php' method='post' id='edit_booking_form'>
    <input type='hidden' name='action' value='Get Events'>
    <label>Email:</label>
    <input type='text' name='email' value=''/>
    <br>
    <label>Phone:</label>
    <input type='text' name='phone' value=''/>
    <br>
    <label>&nbsp;</label>
    <input type='submit' value='Search' />
    
</form>
</section>
<article>
<img src='/img/storefront.jpg' class='shadows'>
</article>
<aside>
<h3>Coconut Oil</h3>
<p>Sure it's expensive, but coconut oil is worth it.  It not only lacks
    dangerous saturated fats, it is also good for you!  And it tastes
    better too!</p>
<img src='/img/popcorn_bowl.jpg'>
</aside>
</div>

<footer id="page_footer"><?php include '../modules/footer.php'; ?></footer>
