<?php
/* 
 * Edit Booking View
 * Will Nelson
 * CIT 336
 */

require_once '../model/session.php';

?>

<head id="page_head"><?php include '../modules/head.php'; ?></head>
<body>
    <?php include_once '../modules/googletracking.php'; ?>


<header id="page_header"> <?php include '../modules/header.php'; ?> </header>
<nav id="page_nav"> <?php include '../modules/nav.php'; ?> </nav>

<section>
    
<h1>Event Booking</h1>
<h3>Hot and Fresh Popcorn on Location!</h3>

<h2>Needs Lots of Popcorn?  We'll Bring the Kettle!</h2>
<p>We are available to provide fresh-popped kettle corn wherever you need it.
    Whether it's a party, a fundraiser, or a large event, we can handle it!</p>
</section>
<img src='/img/workers.jpg' class='shadows'>
<article>
    
    <table>
        <caption>Scheduled Events:</caption>
        <tr>
            <th>Event ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($bookings as $booking) : ?>
        <tr>
            <td class="right"><?php echo $booking['event_id']; ?></td>
            <td><?php echo $booking['name']; ?></td>&nbsp;
            <td><?php echo $booking['email']; ?></td>&nbsp;
            <td><?php echo $booking['phone']; ?></td>&nbsp;
            <td><?php echo $booking['date']; ?></td>&nbsp;
            <td>
                <form action="/controllers/booking.php" method="post"> <!-- ../view/booking.php -->
                    <input type="hidden" name="action" value="Start Edit">
                    <input type="hidden" name="event_id" value="<?php echo $booking['event_id']; ?>">
                    <input type="hidden" name="name" value="<?php echo $booking['name']; ?>">
                    <input type="hidden" name="email" value="<?php echo $booking['email']; ?>">
                    <input type="hidden" name="phone" value="<?php echo $booking['phone']; ?>">
                    <input type="hidden" name="date" value="<?php echo $booking['date']; ?>">
                    <input type="submit" value="Edit">&nbsp;
                </form>
            </td>
            <td>
                <form action='/controllers/booking.php' method='post'>
                    <input type='hidden' name='action' value='Delete Event'>
                    <input type='hidden' name='email' value='<?php echo $booking['email']; ?>'>
                    <input type='hidden' name='date' value='<?php echo $booking['date']; ?>'>
                    <input type='submit' value='Delete'>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    
    
</article>
    


<aside>
    
<h3>Coconut Oil</h3>
<p>Sure it's expensive, but coconut oil is worth it.  It not only lacks
    dangerous saturated fats, it is also good for you!  And it tastes
    better too!</p>
<img src='/img/popcorn_bowl.jpg'>
    
</aside>


<footer><?php include '../modules/footer.php'; ?></footer>

</body>
