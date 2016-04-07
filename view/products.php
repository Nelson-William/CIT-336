<?php

/*
 * Products View
 * Will Nelson
 * CIT 336
 */

?>


<head id="page_head"><?php include '../modules/head.php'; ?></head>
<body>
    <?php include_once '../modules/googletracking.php'; ?>


<header id="page_header"> <?php include '../modules/header.php'; ?> </header>
<nav id="page_nav"> <?php include '../modules/nav.php'; ?> </nav>

<article>
    
<h1>Products</h1>
<h3>Delicious Popcorn, Delivered!</h3>

<h2>Popped Fresh!</h2>
<p>We're fanatics about fresh popcorn, and make new batches throughout the week to fill all orders.  You never have to worry about getting stale popcorn!</p>
</article>

<table>
    <caption>Currently Available Products</caption>
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Price</th>
        <th>&nbsp;</th>
    </tr>
    <?php foreach ($products as $product) : ?>
    <tr>
        <td><?php echo $product['productCode']; ?></td>
        <td><?php echo $product['productName']; ?></td>
        <td><?php echo $product['productPrice']; ?></td>
        
        <td>
            <form action='.' method='post'>
                <input type='hidden' name='action' value ='add_to_cart'>
                <input type='hidden' name='product_code' value="<?php echo $product['productCode']; ?>">
                <input type="submit" value="Add to Cart">
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<img src="../img/caramel_bowl.jpg">
<img src="../img/kettle_main.jpg">
<img src="../img/kettle_wrapped.jpg">


<!--     OLD VERSION OF PRODUCTS PAGE
    <h3>Kettle Corn</h3>
    <img src="/img/kettle_corn.jpg" class='shadows' alt="kettle_corn">
    <p>We don't hold back on the sugar or the salt in our glistening kettle corn!<br>
        Sold in 12" x 24" bags. <strong>$8 each.</strong></p>
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="SHSFBLL52AWHA">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
    </div>
</section>
<section>
    <h3>Caramel Corn</h3>
    <img src="/img/caramel_corn.jpg" class='shadows' alt="caramel_corn">
    <p>We cake on the caramel.  Then add a bit of salt to enhance the flavor!<br>
        Sold in 12" x 24" bags. <strong>$12 each.</strong></p>
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="NTPXV5TG7X3N2">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</section> -->

<aside>
<h3>It's (Somewhat) Healthy!</h3>
<p>Cooked in 100% Coconut Oil.  No artificial flavoring.  No preservatives.  Gluten-free.</p>
</aside>



<footer id="page_footer"><?php include '../modules/footer.php'; ?></footer>
