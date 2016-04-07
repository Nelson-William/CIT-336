<?php

/* 
 * This page will display the variable called $message
 * 
 * 
 */

require_once '../model/session.php';

?>
<head id="page_head"><?php include '../modules/head.php'; ?></head>
<body>
    <?php include_once '../modules/googletracking.php'; ?>
<div id="wrapper">
<div id="content">
<header id="page_header"> <?php include '../modules/header.php'; ?> </header>
<nav id="page_nav"> <?php include '../modules/nav.php'; ?> </nav>

<main id="main">
<h1>Event Booking</h1>
<h3>Hot and Fresh Popcorn on Location!</h3>
<article>
<h2>Needs Lots of Popcorn?  We'll Bring the Kettle!</h2>
<p>We are available to provide fresh-popped kettle corn wherever you need it.
    Whether it's a party, a fundraiser, or a large event, we can handle it!</p>
</article>
Please enter the following information to schedule an event:
<img src='/img/fundraiser.jpg' class='shadows'>



<p class="alert"> 
    Server Message: <?php echo $message ?>
</p>

<h2>Edit Booking:</h2>
<form action="../controllers/booking.php" method="post" id="edit_booking_form">
    <input type="hidden" name="action" value="Edit Event">
    <label>Event ID:</label>
    <input type="hidden" value="<?php echo $booking['event_id']; ?>">
    <label><?php echo $booking['event_id']; ?></label>
    <label>Date:</label>
    <input type="text" name="date" value="<?php echo $booking['date']; ?>">
    <label>&nbsp;</label>
    <input type="submit" value="Save">
</form>


<aside>
<h3>Coconut Oil</h3>
<p>Sure it's expensive, but coconut oil is worth it.  It not only lacks
    dangerous saturated fats, it is also good for you!  And it tastes
    better too!</p>
<img src='/img/popcorn_bowl.jpg'>
</aside>


<footer id="page_footer"><?php include '../modules/footer.php'; ?></footer>
